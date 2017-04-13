import Vue from 'vue'
import Router from 'vue-router'

// 全局路由设置
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/mime',
      name: 'mime',
      component: require('../components/Mime')
    }, {
      path: '/find',
      name: 'find',
      component: require('../components/Find')
    }, {
      path: '/news',
      name: 'news',
      component: require('../components/News')
    }, {
      path: '/comp',
      name: 'comp',
      component: require('../components/Composite')
    }, {
      path: '/mvdetail',
      name: 'mvdetail',
      component: require('../components/Moviedetail')
    }, {
      path: '/newsdet',
      name: '/newsdet',
      component: require('../components/Newsdetail')
    }, {
      path: '*', redirect: '/mime'
    }
  ]
})
