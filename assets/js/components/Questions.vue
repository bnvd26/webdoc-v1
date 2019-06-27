<template>
    <div class="screen">
        <p class="extrait"><img class="note" src="../../images/note.svg" alt="Note de musique">{{level.extrait}}</p>
        <p class="id__question">{{level.id}}<span>/3</span></p>
        <p class="ok">{{level.question}}</p>
        <div class="response">
            <router-link to="/questions/:id/result" tag="div" class="A">{{level.reponseA}}</router-link>
            <div class="B">{{level.reponseB}}</div>
            <div class="C">{{level.reponseC}}</div>
        </div>        
        <router-link class="next" :to="level.link.toString()">Suivant</router-link>
        <router-link :to="level.linkSumm"  class="next">lknev</router-link>      
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
            level: ' ',
        
    
        }
    },

    watch: {
    '$route.params.id' (to, from) {
     
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

        
<style scoped>





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

/*      STYLE       */
    .speaker {
        width: 2%;
        position: absolute;
        top: 2%;
        left: 2%;
    }
    .screen {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100vw;
        height: 80vh;
        color: #FFFFFF;
        font-family: 'Gotham Book', sans-serif;
        font-size: 24px;
        text-align: center;
    }
    .screen p, .screen div {
        padding: 30px 0;
    }
    .id__question {
        position: absolute;
        right: 7%;
        bottom: -20%;
        background: -webkit-linear-gradient(left, #4B2ABF, #92FCFE);
        -webkit-background-clip: text;
        -webkit-text-stroke: 4px transparent;
        color: #0F0F0F;
        font-family: 'Gotham', sans-serif;
        font-weight: 300;
        font-style: normal;
        font-size: 200px;
    }
    .id__question span {
        font-size: 80px;
    }
    .note {
      width: 4%;
      padding-right: 10px;
      transform: translateY(10px);
    }
    .response {
        display: flex;
        justify-content: space-between;
        width: 50%;
        height: 20%;
    }
    .A, .B, .C {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 25%;
        height: 6%;
        border: 1px solid #FFFFFF;
        border-radius: 50px;
        font-family: 'Gotham', sans-serif;
        font-weight: 300;
        font-style: normal;
    }
    .next {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 15%;
        height: 10%;
        background: linear-gradient(to left, #4B2ABF, #92FCFE);
        border-radius: 32px;
        text-decoration: none;
        font-family: 'Gotham', sans-serif;
        font-weight: 300;
        font-style: normal;
        color: #FFFFFF;
    }

    





</style>






