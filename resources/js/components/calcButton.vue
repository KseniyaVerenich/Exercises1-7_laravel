<template>
  <div>
    <button type="button" class="btn btn-primary btn-lg" @click="clickHandler">{{ outputType }}</button>
  </div>
</template>


<script>
export default {
    name:"calc-button",
  data() {
    return {
    
      number: null,
      operator: null,

    
    }
  },
  props: {
    inputType: String

  },

  methods: {
    numOrop() {
      if (!isNaN(this.inputType) || this.inputType == ".") {
        this.number = this.inputType;
      } else {
        this.operator = this.inputType;
        
      }
    },

    clickHandler() {
        
        var val = this.outputType;
       this.$emit("onButtonClick", {value:val, NumOp: this.operator} );
      
    }

  
  },
  computed: {
    outputType() {
      this.numOrop();
      if (this.number) {
        return this.number;
      } else {
        return this.operator;
      }
    }
  }
};
</script>

<style scoped>
.btn {
  background-color: orange;
  border-color: slategray;
  color: black;


}
</style>








