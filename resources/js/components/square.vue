<template>
  <button type="button" class="btn btn-primary btn-lg" @click="ClickedMe">{{ squareValue }}</button>
</template>

<script>
export default {
  data() {
    return {
      isClicked: false
    };
  },

  props: {
    squareId: {
      type: Number,
      required: true
    },
    squareValue: {
      type: String
    }
  },

  methods: {
    ClickedMe() {
      if (this.squareValue=="") {
        this.isClicked = true;
        this.$emit("TileClicked", { id: this.squareId });
      }
    }
  }
};
</script>

<style scoped>
.btn {
  background: none;
  padding: 50px 50px;
}

.btn-primary {
  border: 2px solid darkslategray;
  color:darkslategray;
}


.btn-primary:active,
.btn-primary {
  border-color: darkslategray;
  color: darkslategray;
  box-shadow: grey;
}
</style>