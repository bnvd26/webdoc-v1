import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.config.productionTip = false

Vue.use(VueRouter)

import Home from './components/Home.vue';
import App from './components/App.vue';
import Questions from './components/Questions.vue';
import Summary from './components/Summary.vue';
import ChapterOne from './components/ChapterOne.vue';
import Result from './components/Result.vue';


const routes = [
  { path: '/', component: Home },
  { path: '/questions/:id', component: Questions, name: 'questions'},
  { path: '/questions/:id/result', component: Result, name: 'result'},
  { path: '/summary', component: Summary, name: 'summary'},
  { path: '/chapterOne/:id', component: ChapterOne, name: 'chapterOne'},

]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')




