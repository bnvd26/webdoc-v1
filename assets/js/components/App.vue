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
        <img id="infos" class="infos" src="../../images/infos.svg" alt="Informations Navigation">
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
    
</style>