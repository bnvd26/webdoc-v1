<template>

    <div>
        <div class="vz-wrapper">
        <audio id="myAudio" :src="chapterOne.sound" data-author="" data-title=""></audio>
        <div class="vz-wrapper -canvas">
        <canvas id="myCanvas" width="1920" height="800"></canvas>
        </div>
    </div>
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
            name: 'app'
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

    
</style>