<template>

    <div>
        <div class="vz-wrapper">
        <audio id="myAudio" :src="chapterOne.sound" data-author="" data-title=""></audio>
        <div class="vz-wrapper -canvas">
        <canvas id="myCanvas" width="1920" height="800"></canvas>
        </div>

    </div>
            <img class="speaker" src="../../images/speaker.svg" alt="Coupe son" @click="noSound()" v-if="sound">
            <img class="nospeaker" src="../../images/nospeaker.svg" alt="Coupe son"  @click="yesSound()" v-if="sound == false">
            

        <img id="infos" class="infos" src="../../images/infos.svg" alt="Informations Navigation" @click="activeModal()">
        <transition name="modal">
             <div  class="infos__popup" v-if="modal" style="
    position: absolute;
    z-index: 200;
    background: black;
    border-radius: 30px;left:10%;
" >
    <h2 class="popup__title">Indications :</h2>
    <div class="popup__content">
      <div class="popup__scroll">
        <img class="scrollGif" src="../../images/Scroll .gif" alt="Scroll">
        <p class="popup__explain">Scroller pour faire défiler le texte et naviguer entre les pages</p>
      </div>
      <div class="popup__hover">
        <img class="hoverIcon" src="../../images/hover.svg" alt="Hover">
        <p class="popup__explain">Survolez ces zones avec votre souris</p>
      </div>
    </div>
  </div>
  </transition>

    <router-view :key="$route.fullPath"/>
  
    </div>
</template>

<script>
import waves from '../waves'
import axios from 'axios'
    export default {
       data() {
        return {
            chapterOne: ' ',
            name: 'app',
            sound: false,
            modal : false
            
        }
    },

    methods : 
    {
        noSound()
        {
            this.sound = false
        },

        yesSound()
        {
            this.sound = true
        },

        activeModal()
        {
            if(this.modal == false)
            {
    this.modal = true
            }
        
         else {
            this.modal = false
        }

        }
    },
    async created () {
        axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (this.chapterOne = response.data[1][0]
        ))}
    }
</script>

<style>
@import url("../../css/reset.css");

/* CANVAS */
body {
    overflow: hidden;
    background-color: #0F0F0F;
}

    .vz-wrapper {
        position: absolute;
        z-index: -1;
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


.infos {
  position: absolute;
  top: 8%;
  left: 2%;
  width: 2.5%;
}

.modal-enter-active {
    animation: fadeIn 1s
}

.modal-leave-active {
  animation: fadeOut 1s;
}



@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}


.speaker {
  position: absolute;
  top: 2%;
  left: 2%;
  width: 30px;
}

.nospeaker {
  position: absolute;
  top: 2%;
  left: 2%;
  width: 30px;
}



.clicked {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 45vw;
  height: 40vh;
  background-color: rgba(31, 31, 31, 0.7);
  border: 1px solid #92FCFE;
  border-radius: 10px;
}

.popup__title {
  font-family: 'Gotham', sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 24px;
  color: #FFFFFF;
  text-decoration: underline;
  text-align: center;
  transform: translateY(-100%);
}

.popup__content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: row;
  height: 50%;
}

.popup__scroll, .popup__hover {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
  height: 100%;
  width: 45%;
  font-family: 'Gotham Book';
  font-size: 20px;
  text-align: center;
  color: #FFFFFF;
}

.scrollGif {
  width: 30%;
}

.hoverIcon {
  width: 10%;
}
    
</style>