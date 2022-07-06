<template>
    <div>
        <h1>{{ titre }}</h1>

        <input type="text" v-model="titre">
    </div>
</template>

<script>
export default {
    props: ["title"],

    data() {
        return {
            titre: this.title
        }
    }
}
</script>