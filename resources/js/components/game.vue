<template>
  <div class="container">
    <div class="row-mt-3 justify-content-center">
      <div class="col-4">
        <div class="row">
          <div class="col-4" id="column" v-for="i in squares" :key="i.id">
            <square v-bind:squareId="i.id" v-on:TileClicked="onClickedTile" v-bind:squareValue="i.value"></square>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class='row-mt-3 justify-content-center'>
      <div class='col'>
      <button @click='reset' id="resetbutton" class="btn btn-primary"><a style="text-decoration : none; color : white;" href="/game">Reset</a> </button>
    </div>
      </div>
  </div>
</template>

<script>
import square from "./square";

export default {
  data() {
    return {
      num: [0, 1, 2],
      clicks: 1,
      turns: ['X' , 'O'],
      squares: [
          {id:1, value:""},
          {id:2, value:""},
          {id:3, value:""},
          {id:4, value:""},
          {id:5, value:""},
          {id:6, value:""},
          {id:7, value:""},
          {id:8, value:""},
          {id:9, value:""}],
        currentPlayer: "X",
    };
  },
  components: {
    square
  },

  methods: {
    addCount() {
      this.clicks++;
    },

    whichOne() {
        this.currentPlayer = this.whoTurn;
    },

    onClickedTile(obj) {
        this.addCount();
        this.whichOne();
        this.squares[obj.id-1].value = this.currentPlayer;
    },

    reset() {
      for (var i = 0; i<this.squares.length; i++){
        this.squares[i].value = "";
      }
      this.count = 0;
    }

  },

  beforeDestroy() {},
  created() {},

  computed: {
    clickTurn() {
      return this.clicks % 2;
    },

    whoTurn() {
      if (this.clicks % 2 == 0) {
        return this.turns[0];
      } else {
        return this.turns[1];
      }
    }
  }
};
</script>

<style scoped>

 .col-4 {
   margin-top: 20px;
 }



#resetbutton {
  background-color: grey !important;
  border-color: grey !important;
  padding: 10px 140px;
 

}


</style>