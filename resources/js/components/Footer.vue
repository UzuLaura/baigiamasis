<template>
    <footer>
        © {{ this.date.getFullYear() }}. Laura Užusienė, all rights reserved.
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