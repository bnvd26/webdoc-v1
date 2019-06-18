<template>
   <div>
            <template v-for="details in chapterOne">
                <div v-bind:key="details.id">
                    <p>{{ details.id }}</p>
                    <p>{{ details.title }}</p>
                    <p>{{ details.content }}</p>
                    <img v-bind:src="details.imageackground">
                </div>
                
            </template>
     </div>
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
        const response = await axios.get('http://127.0.0.1:8001/api/details')
        this.chapterOne = response.data
    }
}
</script>



