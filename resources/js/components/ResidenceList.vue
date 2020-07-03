<template>
    <div>
        <div v-for="residence in residences" v-bind:key="residence.id">
            {{ residence.name }}
        </div>
    </div>
</template>

<script>
    import ResidenceSquare from './ResidenceSquare.vue';
    import axios from 'axios';
    export default {
        name: 'ResidenceList',
        data() {
            return {
                residences: []
            }
        },
        components: {
            ResidenceSquare
        },
        created() {
            axios.get('http://localhost:8000/api/getResidences')
                .then( res => {
                    this.residences = res.data;
                })
                .catch( error => {
                    alert(error);
                })
        }
    }
</script>

<style scoped>

</style>

