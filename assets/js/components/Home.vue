<template>
<div id="app">
    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <template v-for="movie in movies">
                <tr v-bind:key="movie.id">
                    <td>{{ movie.id }}</td>
                    <td>{{ movie.title }}</td>
                    <td>{{ movie.content }}</td>
                </tr>
            </template>
        </tbody>
    </table>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            movies: {}
        }
    },
    async created () {
        const response = await axios.get('http://127.0.0.1:8001/movies')
        this.movies = response.data
    }
}
</script>



