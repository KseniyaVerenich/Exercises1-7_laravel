<template>
   <div>
        <div class="h-100 row align-items-center">
            <div class="col">
                <span class='time'>{{ time }}</span>
            </div>
        </div>
  
   </div>
</template>




<script>
    export default {
    
    
    data: function () {
    return {
    time: '',
    interval: null,

    }

  },
  created(){
    this.clock();
  },

  methods: {

    clock: function () {
      this.interval = setInterval(() => {
        var date = new Date();
       this.time =  date.toLocaleTimeString();
      }, 1000);

    },
    beforeDestroy() {
      clearInterval(this.interval);
    },
  },
}



</script>

