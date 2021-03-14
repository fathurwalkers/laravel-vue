<template>
    <div>
        <section v-if="name">
            Hello, {{ name }}
        </section>

        <section v-else>
            <h2>Daftar Users yang Tersedia</h2>
            <ul>
                <li v-for="user in users">
                    <router-link :to="profile_uri(user.name)">{{ user.name }}</router-link>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        data() {
            return {
                users: []
            }
        },
        mounted(){
            axios.get('/api/users').then((response) => {
                console.log(response)
                this.users = response.data
            })
        },
        methods: {
            profile_uri(name) {
                return '/user/' + toString(name)
            }
        }
    }
</script>
