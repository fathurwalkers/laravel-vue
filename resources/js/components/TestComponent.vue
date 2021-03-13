<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Belajar Laravel & Vue Js</h2>
                <nav>
                    <router-link v-bind:to="{name: 'Home'}">Home</router-link>
                    <router-link v-bind:to="{name: 'About'}">About</router-link>
                    <router-link v-bind:to="{name: 'User'}">Users</router-link>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
// export default {
//     mounted(){
//         console.log('export berhasil!');
//     }
// }
</script>
