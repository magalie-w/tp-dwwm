<template>
    <div class="card" :style="{ backgroundColor: color }">
        <p>Ceci est une carte avec {{ message }}</p>

        <input v-model="message">

        <p>Le slogan est {{ slogan }}</p>
    </div>
</template>

<script>
export default {
    props: ['slogan', 'color'],

    data() {
        return {
            message: this.slogan || "Salut Composant",
        }
    }
}
</script>


<!-- scoped pour modifier que les éléments du composant -->
<style scoped>
    .card {
        background-image: #fff;
        padding: 10px;
        border-radius: 20px;
        box-shadow: 2px 2px 8px #000;
        margin-bottom: 20px;
    }
</style>