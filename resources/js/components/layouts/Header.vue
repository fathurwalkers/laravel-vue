<template>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link v-bind:to="{name: 'Home'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link v-bind:to="{name: 'About'}">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link v-bind:to="{name: 'User'}">Users</router-link>
                </li>
            </ul>
        </div>
    </nav>
    
</template>

<script>

</script>
