<template>
    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <template v-for="details in chapterOne">
                <tr v-bind:key="details.id">
                    <td>{{ details.id }}</td>
                    <td>{{ details.title }}</td>
                    <td>{{ details.content }}</td>
                </tr>
            </template>
        </tbody>
    </table>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            chapterOne: {}
        }
    },
    async created () {
        const response = await axios.get('http://127.0.0.1:8001/api/movies')
        this.chapterOne = response.data
    }
}
</script>



