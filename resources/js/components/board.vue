<template>
  <div>
    <div class="calculator">
      <div class="display">{{current || 0}}</div>
      <div v-for="n in 20" :key="n">
        <calcButton v-if="n < 10" :inputType="n.toString()" v-on:onButtonClick="clickedButton"></calcButton>
        <calcButton v-if="n == 11" :inputType="'.'"></calcButton>
        <calcButton v-if="n == 10" :inputType="'0'"></calcButton>
        <calcButton v-if="n > 11 && n !=19" :inputType="ops[n-12]"></calcButton>
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
      numbers: [],
      ops: ["x", "/", "-", "+", "=", "ac", "+/-", "%"]
    };
  },
  components: {
    calcButton
  },

  methods: {

    clickedButton (obj) {
        console.log(obj);
        this.current;
    },
//     clear() {
//       this.current = "";
//     },

//     sign() {
//       if (this.current.charAt(0) == ops[2]) {
//         this.current.slice(1);
//       } else {
//         this.current = ops[2] + this.current;
//       }
//     },

//     percentage() {
//       this.current = this.current / 100;
//     },

//     appendNumber() {
//       this.current = this.current + ;
//     },

//     store() {
//       this.numbers.push(this.current);
//       this.current = "";
//       console.log(this.numbers);
//     },

   
//     period() {
//       if (this.current.indexOf(".") === -1) {
//         this.appendNumber(".");
//       }
//     },

//     equal() {
   
//     }
  },

  created (){
      this.clickedButton({value:"test"});
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

