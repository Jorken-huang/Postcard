<template>
  <div id="newsDetail">
    <x-header :left-options="{backText: ''}">新闻详情</x-header>
    <h3 class="newsdetail-title">{{ title }}</h3>
    <p class="detail-summary new-desc">{{ desc }}</p>
    <p class="new-foot"><span>来源：{{ origin }}</span>&nbsp&nbsp&nbsp&nbsp&nbsp<span>{{ datetime }}</span></p>
    <loading v-model="showLoading" :text="loadText"></loading>
  </div>
</template>
<script>
import { XHeader, Loading } from 'vux'

export default {
  components: {
    XHeader,
    Loading
  },
  data () {
    return {
      showLoading: false,
      loadText: '正在加载',
      title: '',
      desc: '',
      datetime: '',
      origin: ''
    }
  },
  methods: {
    getDetail () {
      this.showLoading = true
      let key = this.$route.query.key
      this.$http.get('http://www.jorken.cn/getNews.php', {}, {
        header: {

        },
        emulateJSON: true
      })
      .then((response) => {
        this.showLoading = false
        for (let i = 0; i < response.data.length; i++) {
          if (response.data[i].uniquekey === key) {
            this.title = response.data[i].title
            this.desc = response.data[i].desc
            this.datetime = response.data[i].date
            this.origin = response.data[i].author_name
          }
        }
      }, (response) => {
        console.log('加载失败')
      })
    }
  },
  activated () {
    this.getDetail()
  }
}
</script>
<style>
  .newsdetail-title {
    color: #000;
    text-align: left;
  }
  .newsdetail-title,.new-desc,.new-foot {
    padding: 10px;
  }

</style>
