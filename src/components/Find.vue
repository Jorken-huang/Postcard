<template>
  <div class="find-box">
    <x-header :left-options="{showBack: false}">{{ title }}</x-header>
    <div class="img-box" v-for="src in list" style="text-align:center;">
      <x-img :src="src" class="img-com" :offset="-100"></x-img>
    </div>
  </div>
</template>

<script>
import { Masker, XHeader, XImg } from 'vux'

export default {
  components: {
    Masker,
    XHeader,
    XImg
  },
  data () {
    return {
      title: '发现',
      list: [
        'https://o5omsejde.qnssl.com/demo/test1.jpg',
        'https://o5omsejde.qnssl.com/demo/test2.jpg',
        'https://o5omsejde.qnssl.com/demo/test4.jpg',
        'https://o5omsejde.qnssl.com/demo/test5.jpg',
        'https://o5omsejde.qnssl.com/demo/test6.jpg',
        'https://o5omsejde.qnssl.com/demo/test7.jpg',
        'https://o5omsejde.qnssl.com/demo/test8.jpg'
      ]
    }
  }
}
</script>

<style lang="less">
.find-box{
  padding-bottom:50px;
}
.img-com {
  width: 100%;
  margin:0px;
  padding:0px;
  height: auto;
}
</style>
