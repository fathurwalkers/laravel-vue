<template>
    <div>
        <section v-if="name">
            Hello, {{ name }}
        </section>

        <section v-else>
            <h2>User tidak di Temukan.</h2>
        </section>
    </div>
</template>

<script>
    export default {
        props: ['name'],
    }
</script>
