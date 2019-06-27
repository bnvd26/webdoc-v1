<template>
    <div id="app">

        <img class="speaker" src="../../images/speaker.svg" alt="Speaker">

     

  <div class="menu">
    <img class="brain" src="../../images/cerveau.svg" alt="Cerveau">
    <img id="partOne" class="part partOne" src="../../images/partOne.png" alt="Partie 1">
    <img id="partTwo" class="part partTwo" src="../../images/partTwo.png" alt="Partie 2">
    <img id="partThree" class="part partThree" src="../../images/partThree.png" alt="Partie 3">
    <img id="partFour" class="part partFour" src="../../images/partFour.png" alt="Partie 4">
  </div>

  <div id="itemOne" class="menu__item item--one">
    <h1 class="title">Chapitre 1 :</h1>
    <h2 class="subtitle">Le commencement</h2>
    <p class="description">Ce chapitre explique comment la musique impacte notre cerveau et les effets quelle provoque.</p>
  </div>

  <div id="itemTwo" class="menu__item item--two">
    <h1 class="title">Chapitre 2 :</h1>
    <h2 class="subtitle">La société</h2>
    <p class="description">Ce chapitre explique comment la musique impacte nos vies au quotidien et comment la société a intégré ces
      procédés </p>
  </div>

  <div id="itemThree" class="menu__item item--three">
    <h1 class="title">Chapitre 3 :</h1>
    <h2 class="subtitle">L'histoire</h2>
    <p class="description">Ce chapitre vous explique comment la musique a été utilisée par le passé.</p>
    <br>
    <p class="soon">Arrive bientôt</p>
  </div>

  <div id="itemFour" class="menu__item item--four">
    <h1 class="title">Chapitre 4 :</h1>
    <h2 class="subtitle">La santé</h2>
    <p class="description">Ce chapitre montre les bienfaits de la musique sur la santé.</p>
    <br>
    <p class="soon">Arrive bientôt</p>
  </div>
</div>
</template>
<script>
import axios from 'axios'
import waves from '../waves'
import main from '../main'


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
        .then(response => (this.chapterOne = response.data[1][0], 
                           this.chap = response.data[1][0]
                           ))
    }
}
</script>

        
<style scoped>
  @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-Bold.woff2') format('woff2'),
            url('../../fonts/Gotham-Bold.woff') format('woff');
        font-weight: bold;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-Light.woff2') format('woff2'),
            url('../../fonts/Gotham-Light.woff') format('woff');
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham Book';
        src: url('../../fonts/Gotham-Book.woff2') format('woff2'),
            url('../../fonts/Gotham-Book.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham Book';
        src: url('../../fonts/Gotham-BookItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-BookItalic.woff') format('woff');
        font-weight: normal;
        font-style: italic;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-MediumItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-MediumItalic.woff') format('woff');
        font-weight: 500;
        font-style: italic;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-LightItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-LightItalic.woff') format('woff');
        font-weight: 300;
        font-style: italic;
    }

    body {
  background-color: #0F0F0F;
}

.lines {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.speaker {
  position: absolute;
  top: 2%;
  left: 2%;
  width: 3%;
}

.menu {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80vw;
  height: 80vh;
}

.menu__item {
  display: flex;
  justify-content: flex-start;
  flex-direction: column;
  width: 25%;
  background-color: #1F1F1F;
  border-radius: 10px;
  padding: 2%;
  opacity: 0;
}

.title, .subtitle {
  font-family: 'Gotham', sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 16px;
  color: #92FCFE;
  padding-bottom: 5%;
}

.title {
  text-decoration: underline;
}

.description {
  font-family: 'Gotham', sans-serif;
  font-weight: 300;
  font-style: normal;
  font-size: 14px;
  color: #ffffff;
}

.item--one {
  position: absolute;
  bottom: 18%;
  left: 8%;
}

.item--two {
  position: absolute;
  bottom: 5%;
  right: 2%;
}

.item--three {
  position: absolute;
  top: 5%;
  right: 2%;
}

.item--four {
  position: absolute;
  top: 5%;
  left: 6%;
}

.brain {
  width: 80%
}

.partOne {
  position: absolute;
  bottom: 17.5%;
  left: 30%;
  width: 42%;
  animation: blink 1s infinite alternate-reverse;
}

.partTwo {
  position: absolute;
  top: 39%;
  right: 26.5%;
  width: 40%;
}

.partThree {
  position: absolute;
  top: 23.7%;
  right: 19.5%;
  width: 11.3%;
}

.partFour {
  position: absolute;
  top: 15.5%;
  left: 19.5%;
  width: 15%;
}

.part {
  opacity: 0;
  cursor: url('../../images/cursor.png') 4 12, auto;
}

.part:hover {
  opacity: 1;
  transition: opacity 1s;
}

.soon {
  font-family: 'Gotham Book', sans-serif;
  font-weight: normal;
  font-style: italic;
  font-size: 14px;
  color: #ffffff;
  padding: 10px 0;
}


/*      ANIMATIONS      */

@keyframes blink {
  from {
    opacity: 0;
  }
  
  to {
    opacity: 1;
  }
}

    .speaker {
        width: 2%;
        position: absolute;
        top: 2%;
        left: 2%;
    }

    /* CANVAS */

    .vz-wrapper {
        position: absolute;
        height: 10vh;
        width: 100%;
    }

    .vz-wrapper.-canvas {
        position: absolute;
        top: -10%;
        transform: translateY(-15%);
        height: initial;
        width: initial;
    }
</style>






