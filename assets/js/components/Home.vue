<template>
   <div id="app">
            <template v-for="details in chapterOne">
                <div v-bind:key="details.id">
                    <p>{{ details.id }}</p>
                    <p>{{ details.title }}</p>
                    <p>{{ details.content }}</p>
                    <img :src="details.imageBackground">
                </div>
                
            </template>
             <template v-for="detail in chapterTwo">
                <div v-bind:key="detail.id">
                    <p>{{ detail.id }}</p>
                    <p>{{ detail.title }}</p>
                    <p>{{ detail.content }}</p>
                    <img :src="detail.imageBackground">
                </div>
            </template>
            <router-view></router-view>
     </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            chapterOne: {},
            chapterTwo: {}
        }
    },
    async created () {
        const response = await axios.get('http://127.0.0.1:8001/api/details/chapterOne')
        this.chapterOne = response.data
        const responses = await axios.get('http://127.0.0.1:8001/api/details/chapterTwo')
        this.chapterTwo = responses.data
        
    }
}
</script>



