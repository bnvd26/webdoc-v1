<template>
 <div id="app">
<div class="centrage">
        <div class="legend legend__1">
          <div class="rod"></div>
          <p>20% des personnes pensent à la joie</p>
        </div>

        <img class="graph" src="../../images/page1.png" alt>

        <div class="legend legend__2">
          <p>80% des personnes pensent à l'énergie</p>
          <div class="rod"></div>
        </div>
        <p class="resultats">Résultats</p>
      </div>
      
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
            test: 'lzjberfo'
        
    
        }
    },

    watch: {
    '$route.params.id' (to, from) {
     console.log(to)
      if(to ==1)
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
.centrage {
  text-align: center;
  margin-top: 50vh;
  transform: translateY(-50%);
}

.next {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 220px;
  height: 75px;
  background: linear-gradient(to left, #4b2abf, #92fcfe);
  border-radius: 50px;
  text-decoration: none;
  font-family: "Gotham", sans-serif;
  font-weight: 300;
  font-style: normal;
  color: #ffffff;
  font-size: 1.5em;
  left: 50%; right: 50%;
  transform: translate(-50%, -220px);
}

.legend {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-family: "Gotham";
  font-weight: 300;
}

.rod {
  width: 120px;
  height: 5px;
  background: white;
}

.legend__1 {
  transform: translate(350px, 140px);
}

.legend__1 .rod {
  margin-right: 20px;
}

.legend__1 p {
  width: 200px;
  line-height: 1.2em;
}
.legend__2 {
  transform: translate(-345px, -140px);
}

.legend__2 .rod {
  margin-left: 20px;
}

.legend__2 p {
  width: 200px;
  line-height: 1.2em;
}

.resultats {
  position: relative;
  font-family: "Gotham";
  font-weight: 300;
  font-size: 80px;
  letter-spacing: 20px;
  text-transform: uppercase;
  background: -webkit-linear-gradient(left, #4b2abf, #92fcfe);
  -webkit-background-clip: text;
  -webkit-text-stroke: 4px transparent;
  color: #0f0f0f;
  text-align: right;
  margin: 0 40px 0 0;

}




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



    





</style>






