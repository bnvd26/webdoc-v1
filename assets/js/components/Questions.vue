
        <template>
   <div>
      

             
               
                    <p class="id__question" style="color:white">{{level.id}}
                </p>
                     <p style="color:white">
                    {{level.question}}</p>
                       <p class="ok" style="color:white">
                    {{level.reponseA}}</p>
                     <p class="ok" style="color:white">
                    {{level.reponseB}}</p>
                     <p class="ok" style="color:white">
                    {{level.reponseC}}</p>
                    <p class="ok" style="color:white">
                    {{level.link}}</p>
                   
                    
                    <router-link :to="level.link" >Suivant</router-link>
     </div>

         </template>
<script>
import axios from 'axios'

export default {
    data() {
        return {
            chapterOne: ' ',
            chap: ' ',
            chapterTwo: {},
            level: ' '
    
        }
    },

    watch: {
    '$route.params.id' (to, from) {
      console.log(to, from)
      if(to == 1)
      {
          axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (
            this.level = response.data[0][1]
                           ))
          
      }
      else if(to == 2)
      {
          axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (
            this.level = response.data[0][2]
                           ))
          
      }
    }
  },


    
    async created () {
        axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (this.chapterOne = response.data[0][0], 
                           this.chap = response.data[1][0],
                           this.level = response.data[0][this.$route.params.id]
                           ))

    
        
    }
}
</script>

        
<style>
@font-face {
    font-family: 'Gotham Book';
    font-style: normal;
    font-weight: normal;
    src: local('Gotham Book'), url('../../css/GothamBook.woff') format('woff');
    }



    @font-face {
font-family: 'Gotham Bold';
font-style: normal;
font-weight: normal;
src: local('Gotham Bold'), url('../../css/GothamBold.woff') format('woff');
}

.id__question {
    position: absolute;
    right: 7%;
    bottom: 5%;
}




</style>






