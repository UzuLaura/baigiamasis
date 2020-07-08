<template>
    <div class="card">
        <img v-bind:src="service.url" v-bind:alt="service.title">
        <h3>{{ service.title }}</h3>
        <p>{{ service.body }}</p>
    </div>
</template>

<script>
    export default {
        props: ['service']
    }
</script>