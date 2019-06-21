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
                           this.chap = response.data[1][0]
                           ))
        const responses = await axios.get('http://127.0.0.1:8001/api/chapterTwo')
        this.chapterTwo = responses.data
        
    }
}
</script>



