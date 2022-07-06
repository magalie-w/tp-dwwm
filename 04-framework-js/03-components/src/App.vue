<template>
  <div>
    <XCard slogan="Bye composant" color="red"/>
    <XCard :color="theme"/>
    <input v-model="theme"/>
    <div class="card">Test</div>
    <XCard color="green"/>
    
    <XTitre title="Un titre" />

    <h1>Counter</h1>
    <XCounter />
    <Xcounter :start="5" :max="10" />

    <h2>Affichage</h2>
    <button @click="displayTerm = true">Nouveau terme</button>
    <div v-if="displayTerm">
      <label for="term">Terme:</label>
      <input type="text" id="term" v-model="term.term"> <br>

      <label for="definition">Définition</label>
      <input type="text" id="definition" v-model="term.definition"> <br>
      <button @click="addTerm">ok</button>
    </div>

    <div v-for="(term, index) in terms" :key="index">
      {{ terms }}
    </div>

    <XTerm v-for="(term, index) in terms" :key="index" :term="term" />

    <p>
      Quel groupe afficher ?
      <label for="group-a">Groupe A</label><input type="radio" v-model="group" value="a" id="group-a">

      <label for="group-b">Groupe B</label><input type="radio" v-model="group" value="b" id="group-b">
      
      <label for="group-all">Les deux</label><input type="radio" v-model="group" value="all" id="group-all">
    </p>

    <XStudents :tableau="students" :filter="group" />
  </div>
</template>

<script>

import XCard from './components/XCard.vue';
import XTitre from './components/XTitre.vue';
import XCounter from './components/XCounter.vue';
import XTerm from './components/XTerm.vue';

export default {
  components: {
    XCard,
    XTitre,
    XCounter,
    XTerm,
    XStudents,
  },

  data() {
    return {
      theme: 'lightblue',
      displayTerm: false,
      term: { term: '', definition: ''},
      terms: [],
      group: '',
      students: [
        { nom: 'Jean', note: 8, groupe: 'B' },
        { nom: 'Louis', note: 9, groupe: 'A' },
        { nom: 'François', note: 14, groupe: 'B' },
        { nom: 'Martin', note: 12, groupe: 'A' },
      ],
    }
  },
  
  methods: {
    addTerm() {
      //On clone l'objet term pour éviter les problèmes de référence
      this.terms.push({...this.term});
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
