<template>
  <div id="app">
    <keep-alive><router-view></router-view></keep-alive>
    <app-footer></app-footer>
  </div>
</template>

<script>
import AppFooter from './components/Footer'
import { XHeader } from 'vux'

export default {
  components: {
    AppFooter,
    XHeader
  }
}
</script>

<style lang="less">
@import '~vux/src/styles/reset.less';
@header-background-color: #35495e;

body {
  background-color: #f8f8f8;
}
</style>
