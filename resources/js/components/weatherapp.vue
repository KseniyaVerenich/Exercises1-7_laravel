<template>
  <div>
    <div class="container">
      <h1>YOUR WEATHER</h1>
      <input type="text" placeholder="40502" v-model="zipCode" @keyup.enter="myFunction()">

      <button class="weathertop" @click="myFunction()">GET WEATHER</button>
    </div>
    <div class="container" style="display:block" id="weatherInfo">
      <div class="container" v-show="this.showDiv">
        <div class="row"></div>
        <div id="city" >{{city}}</div>
      </div>
      <div class="row">
          <div class="col">
              


              </div>
          </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
</style>