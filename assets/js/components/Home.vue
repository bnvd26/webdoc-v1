<template>
   <div id="app">
            <template>
                <p>
                    {{chapterOne.content}}
                    {{chapterOne.id}}
                    {{chapterOne.title}}
                </p>
               
               <p>
                    {{chap.content}}
                    {{chap.id}}
                    {{chap.title}}
                </p>
                
                
            </template>
          
             <template v-for="detail in chapterTwo">
                <div v-bind:key="detail.id">
                    <p>{{ detail.id }}</p>
                    <p>{{ detail.title }}</p>
                    <p>{{ detail.content }}</p>
                    <img :src="detail.imageBackground">
                </div>
                
            </template>

     </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            chapterOne: ' ',
            chap: ' ',
            chapterTwo: {}
        }
    },
    async created () {
        axios
        .get('http://127.0.0.1:8001/api/chapterOne')
        .then(response => (this.chapterOne = response.data[0][0], 
                           this.chap = response.data[0][1]
                           ))
        const responses = await axios.get('http://127.0.0.1:8001/api/chapterTwo')
        this.chapterTwo = responses.data
        
    }
}
</script>



