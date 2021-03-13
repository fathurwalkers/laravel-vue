<template>
    <div>
        <section v-if="name">
            Hello, {{ name }}
        </section>

        <section v-else>
            <h2>Daftar Users yang Tersedia</h2>
            <ul>
                <li v-for="user in users">
                    <router-link :to="'/user/' + user.name">{{ user.name }}</router-link>
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
                users: [
                    {id: 1, name: 'FathurWalkers'},
                    {id: 2, name: 'Doremi'},
                    {id: 3, name: 'Fasila Sido'},
                ]
            }
        }
    }
</script>
