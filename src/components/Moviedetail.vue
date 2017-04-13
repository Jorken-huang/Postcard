<template>
  <div id="movie-detail">
    <x-header :left-options="{backText: ''}">电影详情</x-header>
    <h2 class="detail-title">{{ title }}</h2>
    <x-img :default-src="large" class="ximg-demo"></x-img>
    <p class="detail-summary">{{ summary }}</p>
    <loading v-model="showLoading" :text="loadText"></loading>
  </div>
</template>
<script>
import { Group, CellBox, XHeader, XImg, Loading } from 'vux'
export default {
  components: {
    Group,
    CellBox,
    XHeader,
    XImg,
    Loading
  },
  data () {
    return {
      showLoading: false,
      loadText: '正在加载',
      title: '',
      large: '',
      summary: ''
    }
  },
  methods: {
    getDetail () {
      this.showLoading = true
      let addr = 'http://api.douban.com/v2/movie/subject/' + this.$route.query.id
      this.$http.jsonp(addr, {}, {
        header: {

        },
        emulateJSON: true
      }).then((response) => {
        this.showLoading = false
        this.large = response.data.images.large
        this.title = response.data.title
        this.summary = response.data.summary
      }, (response) => {
        this.loadText = '加载失败'
        let self = this
        if (self && !self._isDestroyed) {
          setTimeout(() => {
            if (self && !self._isDestroyed) {
              this.showLoading = false
            }
          }, 2000)
        }
      })
    }
  },
  activated () {
    this.getDetail()
  }
}
</script>
<style>
.detail-title{
  color: #000;
  text-align: center;
}
.ximg-demo {
  width: 90%;
  display: block;
  margin:0 auto;
}
.detail-summary {
  padding:16px 16px 60px 16px;
  text-indent: 2em;
}
</style>
