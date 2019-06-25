<template>

    <div class="screen">
        <img class="speaker" src="../../images/speaker.svg" alt="Speaker">

        <p class="extrait"><img class="note" src="../../img/note.svg" alt="Note de musique">{{level.extrait}}</p>

        <p class="id__question">{{level.id}}<span>/3</span></p>
        <p class="question">{{level.question}}</p>

        <div class="response">
            <div class="A">{{level.reponseA}}</div>
            <div class="B">{{level.reponseB}}</div>
            <div class="C">{{level.reponseC}}</div>
        </div>

        <router-link class="next" :to="level.link"><p>Suivant</p></router-link>
    </div>

</template>


<script>
import axios from "axios";

export default {
  data() {
    return {
      chapterOne: " ",
      chap: " ",
      chapterTwo: {},
      level: " "
    };
  },

  async created() {
    axios
      .get("http://127.0.0.1:8001/api/chapters")
      .then(
        response => (
          (this.chapterOne = response.data[0][0]),
          (this.chap = response.data[1][0]),
          (this.level = response.data[0][this.$route.params.id])
        )
      );
  }
};
</script>

        
<style>

    /*      IMPORT FONTS       */

    @font-face {
        font-family: 'Gotham Book';
        src: url('../../fonts/Gotham-Book.woff2') format('woff2'),
            url('../../fonts/Gotham-Book.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-Light.woff2') format('woff2'),
            url('../../fonts/Gotham-Light.woff') format('woff');
        font-weight: 300;
        font-style: normal;
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






