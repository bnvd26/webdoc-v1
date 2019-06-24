
        <template>
   <div>
      

             
               
                    <p class="homepage__titles">{{chapterOne.id}}
                </p>
                     <p>
                    {{chapterOne.music}}</p>
                       <p class="ok">
                    {{chapterOne.content}}</p>
               
           
                
                
   
  <svg width="60" height="37" viewBox="0 0 60 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L30.725 21L59 1" stroke="white"/>
<path d="M1 16L30.5404 36L59 16" stroke="white"/>
</svg>

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

.homepage__title {
    
    font-family: 'Gotham Bold';
    font-size: 100px;
    text-transform: uppercase;
background: -webkit-linear-gradient(left, #4B2ABF, #92FCFE);
  -webkit-background-clip: text;
  -webkit-text-stroke: 4px transparent;
  color: #262728;
 


}




</style>






