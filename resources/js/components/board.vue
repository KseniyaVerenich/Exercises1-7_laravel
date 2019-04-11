<template>
  <div class="calculator">
    <div class="btn display">{{current || 0 }}</div>
    <div @click="clear" class="btn btn-primary">AC</div>
    <div @click="sign" class="btn btn-primary">+/-</div>
    <div @click="percentage" class="btn btn-primary">%</div>
    <div class="btn btn-secondary">/</div>
    <div @click="appendNumber('7')" class="btn btn-primary">7</div>
    <div @click="appendNumber('8')" class="btn btn-primary">8</div>
    <div @click="appendNumber('9')" class="btn btn-primary">9</div>
    <div @click="multiply" class="btn btn-secondary">x</div>
    <div @click="appendNumber('4')" class="btn btn-primary">4</div>
    <div @click="appendNumber('5')" class="btn btn-primary">5</div>
    <div @click="appendNumber('6')" class="btn btn-primary">6</div>
    <div class="btn btn-secondary">-</div>
    <div @click="appendNumber('1')" class="btn btn-primary">1</div>
    <div @click="appendNumber('2')" class="btn btn-primary">2</div>
    <div @click="appendNumber('3')" class="btn btn-primary">3</div>
    <div class="btn btn-secondary">+</div>
    <div @click="appendNumber('0')" class="btn zero btn-primary">0</div>
    <div @click="period" class="btn btn-primary">.</div>
    <div class="btn btn-secondary">=</div>
  </div>
</template>

<script>
import buttons from "./buttons";

export default {
  data() {
    return {
      current: "",
    };
  },
  components: {
    buttons
  },

  methods: {
    clear() {
      this.current = "";
    },

    sign() {
        if (this.current.charAt(0) == '-') {
            this.current.slice(1);
        } else {
            this.current = '-' + this.current
        }
    },

    percentage() {
        this.current= this.current/100;
    },

    appendNumber (number) {
        this.current = this.current + number;
    },

    multiply() {
        this.current = appendNumber() * number ;
    },

    period() {
        if (this.current.indexOf('.') === -1){
            this.appendNumber ('.');
        }
    }

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

.btn-secondary {
 
}

.btn-primary {
  background-color: lightgrey;
  border-color: slategray;
  color: black;
}
</style>

