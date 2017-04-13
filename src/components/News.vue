<template>
  <div class="my-new">
    <x-header :left-options="{showBack: false}">{{ title }}</x-header>
    <swiper loop auto :list="demo06_list" :index="demo06_index" @on-index-change="demo06_onIndexChange"></swiper>
    <divider>今日头条</divider>
    <group gutter=0>
      <cell v-for="(item,index) in newList" :key="index" value-align="left" border-indent="false" :link="'/newsdet?key='+item.uniquekey">
        <img class="new-img" slot="icon" :src="item.thumbnail_pic_s" width="60" height="60">
        <div>
          <h4 class="new-title">{{ item.title }}</h4>
          <p class="new-content">{{ item.desc }}</p>
        </div>
      </cell>
    </group>
  </div>
</template>
<script>
import { XHeader, Panel, Swiper, Divider, Group, Cell } from 'vux'

const baseList = [{
  url: 'javascript:',
  img: 'http://p2.pstatp.com/origin/1ada000e3def0c0cc569',
  title: '《失恋》剧组有毒！白百何夫妇与文章夫妇昔日神握手画面成经典'
}, {
  url: 'javascript:',
  img: 'http://www.chinanews.com/2017/0413/201741310934.jpg',
  title: '华为郑叶来：云服务前景广阔 公有云合作伙伴会细分'
}, {
  url: 'javascript:',
  img: 'http://www.chinanews.com/2017/0412/2017412141951.jpg',
  title: '云狐携旗下智能工装产品“云狐手机”亮相北京军民融合展'
}]

const urlList = baseList.map((item, index) => ({
  url: 'http://m.baidu.com',
  img: item.img,
  title: `${item.title}`
}))

export default {
  components: {
    XHeader,
    Panel,
    Swiper,
    Divider,
    Group,
    Cell
  },
  data () {
    return {
      title: '新闻',
      demo06_list: urlList,
      demo06_index: 0,
      newList: [],
      footer: {
        title: '更多请前往今日头条',
        url: 'http://www.toutiao.com/'
      }
    }
  },
  created: function () {
    this.$http.get('http://www.jorken.cn/getNews.php', {}, {
      header: {

      },
      emulateJSON: true
    })
    .then((response) => {
      this.newList = response.data
    }, (response) => {
      console.log('加载失败')
    })
  },
  methods: {
    demo06_onIndexChange (index) {
      this.demo06_index = index
    }
  }
}
</script>
<style>
.my-new {
  padding-bottom: 50px;
}
.new-title {
  color:#000;
  font-size: 14px;
}
.new-content{
  height: 30px;
  word-break:break-all;
  display:-webkit-box;
  -webkit-line-clamp:2;
  -webkit-box-orient:vertical;
  overflow:hidden;
  font-size: 12px;
  color: #666;
}
.new-img{
  margin-right: 12px;
}
</style>
