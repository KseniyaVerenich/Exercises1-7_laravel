<template>
  <div>
    <div class="calculator">
      <div class="display">{{current || 0}}</div>
      <div v-for="n in 20" :key="n">
        <calcButton v-if="n < 10" :inputType="n.toString()" v-on:onButtonClick="clickedButton"></calcButton>
        <calcButton v-if="n == 11" :inputType="'.'" v-on:onButtonClick="clickedButton"></calcButton>
        <calcButton v-if="n == 10" :inputType="'0'" v-on:onButtonClick="clickedButton"></calcButton>
        <calcButton
          v-if="n > 11 && n !=20"
          :inputType="ops[n-12]"
          v-on:onButtonClick="clickedButton"
        ></calcButton>
      </div>
    </div>
  </div>
</template>

<script>
import calcButton from "./calcButton";

export default {
  data() {
    return {
      current: "",
      temp: "",
      ops: ["AC", "+/-", "%", "/", "*", "-", "+", "="]
    };
  },
  components: {
    calcButton
  },

  methods: {
    clickedButton(obj) {
      if (obj.NumOp == this.ops[7]) {
        var total = eval(this.current);
        this.current = total;
      } else if (obj.NumOp == this.ops[0]) {
        this.current = "";
      } else if (obj.NumOp == this.ops[2]) {
        console.log("line 52", this.current);
        this.current = this.current / 100;
        console.log("line 54", this.current);
      } else if (obj.NumOp == this.ops[1]) {
        console.log (obj.NumOp);
        if (this.ops[5] != this.current.charAt(0)) {
          this.current = "-" + this.current;
        } 
        else {
          this.current= this.current.slice(1);
        }
      } 
      else {
        this.current = this.current + obj.value;
      }

      this.temp = this.current;
    }
  },

  created() {
    this.clickedButton({ value: "" });
  }
};
</script>


<style scoped>
.calculator {
  margin: 0 auto;
  width: 300px;
  font-size: 40px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: minmax(50px, auto);
}

.display {
  grid-column: 1/5;
  background-color: rgb(113, 113, 133);
  border-color: rgb(113, 113, 133);
  color: white;
}

.zero {
  grid-column: 1/3;
}
</style>

