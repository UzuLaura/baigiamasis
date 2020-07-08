<template>
    <footer>
        © {{ this.date.getFullYear() }}. Laura Užusienė, visos teisės saugomos.
    </footer>
</template>

<script>
    export default {
        data: function () {
            return {
                date: new Date()
            }
        }
    }
</script>