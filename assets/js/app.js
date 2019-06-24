import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.config.productionTip = false

Vue.use(VueRouter)

import Home from './components/Home.vue';

import Test from './components/Test.vue';


const routes = [
  { 
    path: '/', 
    component: require('./components/Home.vue').default
  },
  {
    path: '/test',
    component: require('./components/Test.vue').default
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(Home)
}).$mount('#app')


