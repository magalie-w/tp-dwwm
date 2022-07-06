<template>
  <div class="container flex justify">
    <div class="img">
      <img :src="imgCat" alt="chat">
    </div>

    <div class="text">
      <h1>{{ title }}</h1>
      <span>{{ prix }} € l'unité</span>

      <br>

      <span v-if="quantite >= 1"> Total : {{ prix * quantite }} €</span>
      
      <br>

      <span>En stock : {{ stock }}</span>

      <br>

      <!-- quantité souhaité par l'utilisateur -->
      <input type="number" v-model="quantite">
      
      <br>

      <span v-if="quantite <= stock">En Stock</span>
      <span v-else>Rupture</span>

      <ul>
        <li v-for="(liste, index) in listes" :key="index">{{ liste }}</li>
      </ul>

      <div class="flex">
        <div @click="blocBlue" class="margin blue"></div>
        <div @click="blocRed" class="red"></div>
      </div>

    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      stock: 5,
      quantite: 0,
      prix:10,

      title: "Brand Cat",

      listes: ["Mignon", "Affectueux", "Gourmand"],

      imgCat: "chat.jpg",
    }
  },

  methods: {
    blocBlue() {
      this.title = "Brand Cat";
      this.prix = 10;
      this.listes = ["Mignon", "Affectueux", "Gourmand"];
      this.imgCat = "chat.jpg";
    },

    blocRed() {
      this.title = "Brand kitten";
      this.prix = 5;
      this.listes = ["M", "A", "G"];
      this.imgCat = "chaton.jpeg";
    }

  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
}

.container{
  width: 600px;
  margin: auto;
  background-color: lightgrey;
  box-shadow: 6px 6px 6px 6px lightgrey;
  padding: 30px;
}

.flex{
  display: flex;
}

.justify{
  justify-content: space-around;
}

.margin{
  margin-right: 5px;
}

h1{
  margin:0;
}

ul li{
  list-style: none;
}

ul{
  padding:0;
}

.blue{
  width: 20px;
  height: 20px;
  background-color: blue;
}

.red{
  width: 20px;
  height: 20px;
  background-color: red;
}

img{
  max-width: 269px;
  height: 187px;
  object-fit: cover;
}
</style>
