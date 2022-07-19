<template>
    <div class="card mb-3 d-flex flex-column justify-content-between" style="width: 18rem;">
        <img
            :src="card.image"
            class="card-img-top"
            alt="card"
        >
        <div class="card-body align-self-center">
            <h5 class="card-title">{{ card.name }}</h5>
            <img
                v-if="card.add_image"
                :src="card.add_image"
                alt="cart"
            >
            <p
                v-else
                class="card-text"
            >
                {{ card.transcription }}
            </p>
<!--            <a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
    </div>
</template>

<script>
export default {
    name: "Card",
    props: ['card'],
    mounted() {
        // console.log('CARD', this.card)
    }
}
</script>

<style scoped>

</style>
