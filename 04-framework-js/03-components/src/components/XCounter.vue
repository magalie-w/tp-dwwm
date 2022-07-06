<template>
    <div :style="{backgroundColor: value >= max ? 'red' : ''}">
        <button @click="moins" v-if="compte > 0">-</button>
        {{ compte }}
        <button @click="compte++" v-if="!max || compte < max">+</button>
    </div>
</template>

<script>
export default {
    props: ['start', 'max'],
    
    data() {
        return{
            compte: this.start || 0,
        }
    },

    methods: {
        moins() {
            this.compte--;
        }

        //mounted() {
        //  this.value = this.start || 0
        //}
    }
}
</script>