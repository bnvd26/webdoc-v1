<template>
    <div id="app">

        <img class="speaker" src="../../images/speaker.svg" alt="Speaker">

        <p class="title">{{chapterOne.title}}</p>

        <p class="content">{{chapterOne.question}}</p>

        <p class="music">{{chapterOne.guide}}</p>

        <img class="scroll" src="../../images/scroll.svg" alt="Scroll Down">

    </div>
</template>
<script>
import axios from 'axios'
import waves from '../waves'


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

        
<style>
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

    .speaker {
        width: 2%;
        position: absolute;
        top: 2%;
        left: 2%;
    }

    .title {
        font-family: 'Gotham';
        font-weight: bold;
        font-size: 100px;
        letter-spacing: 36px;
        text-transform: uppercase;
        background: -webkit-linear-gradient(left, #4B2ABF, #92FCFE);
        -webkit-background-clip: text;
        -webkit-text-stroke: 4px transparent;
        color: #0F0F0F;
        text-align: center;
    }

    .content {
        position: absolute;
        bottom: 25%;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        font-family: 'Gotham';
        font-weight: 500;
        font-style: italic;
        font-size: 30px;
        color: #FFFFFF;
        text-align: center;
    }

    .music {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        font-family: 'Gotham';
        font-weight: 300;
        font-style: italic;
        font-size: 18px;
        text-align: center;
        color: #FFFFFF;
    }

    .scroll {
        position: absolute;
        bottom: 5%;
        left: 50%;
        transform: translateX(-50%);
        animation: move 1s infinite alternate-reverse;
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

    @keyframes move {
        from {
            bottom: 5%;
        }

        to {
            bottom: 2%;
        }
    }




</style>






