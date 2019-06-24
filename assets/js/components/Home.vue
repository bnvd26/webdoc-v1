
        <template>
   <div id="app">
      

                <p class="ok">
                    {{chapterOne.content}}
                    {{chapterOne.id}}
                    {{chapterOne.title}}
                </p>
               
               <p>
                    {{chap.content}}
                    {{chap.id}}
                    {{chap.title}}
                </p>
                
<<<<<<< HEAD
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
=======
                
   
  

>>>>>>> dc60510c96708c52cf5069afc160e97fc8f6cec9
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
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (this.chapterOne = response.data[0][0], 
                           this.chap = response.data[1][0]
                           ))
        
    }
}
</script>

        

      <style>
.ok {
    color:blue;
}


</style>






