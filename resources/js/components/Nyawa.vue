<template>
    <div class="lifes flex mt-10 sm:mt-0 gap-3">
        <svg v-for="i in 5" :key="i" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" :class="{'bi bi-heart-fill':true, 'text-red-500': i<=nyawa}" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
        </svg>
    </div>
</template>
<script>
export default {
    mounted() {
        this.$store.commit('UPDATE_NYAWA', this.start)
    },
    computed: {
        nyawa() {
            return this.$store.state.nyawa;
        }
    }
}
</script>