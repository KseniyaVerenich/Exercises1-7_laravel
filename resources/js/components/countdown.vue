<template>
  <div>
    <div class="h-100 row align-items-center">
      <div class="col">
        <span class="time">{{totalCountdown}}</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentTime: new Date(),
      futureTime: new Date("Dec 31, 2030 23:59:59")
    };
  },
  mounted() {
    this.countdown();
  },

  methods: {
    countdown() {
      var temp_time = setInterval(() => {
        this.currentTime = new Date();
      }, 1000);
    },
    beforeDestroy() {
      clearInterval(this.interval);
    }
  },

  computed: {
    years() {
      return this.futureTime.getYear() - this.currentTime.getYear();
    },

    days() {
      return this.futureTime.getDate() - this.currentTime.getDate();
    },

    hours() {
      return this.futureTime.getHours() - this.currentTime.getHours();
    },
    minutes() {
      return this.futureTime.getMinutes() - this.currentTime.getMinutes();
    },

    seconds() {
      return this.futureTime.getSeconds() - this.currentTime.getSeconds();
    },

    totalCountdown() {
      return (
        this.years +
        "Y" +
        this.days +
        "D" +
        this.hours +
        "HR" +
        this.minutes +
        "MIN" +
        this.seconds +
        "SEC"
      );
    }
  }
};
</script>
