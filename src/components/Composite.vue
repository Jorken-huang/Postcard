<template>
  <div class="composite">
    <x-header :left-options="{showBack: false}">{{ title }}</x-header>
    <sticky>
      <tab>
        <tab-item :selected="tag === item.value" v-for="(item,i) in tab_list" :key=i @click.native="onClick(item)">{{item.value}}</tab-item>
      </tab>
    </sticky>
    <group gutter=0 class="movielist">
      <cell v-for="(item,index) in gridList" :key="index" value-align="left" :link="'/mvdetail?id='+item.id">
          <img slot="icon" class="movie-img" :src="item.images.medium"/>
          <div class="movie-info">
            <h3 class="movie-title">{{ item.title }}</h3>
            <p>上映年份：{{item.year}}</p>
            <p>类型：{{item.genres.join('、')}}</p>
            <p>导演：<span v-for="(d,i) in item.directors" :key="i">{{ i !== item.directors.length-1?d.name + '、' : d.name }}</span></p>
            <p>主演：<span v-for="(d,i) in item.casts" :key="i">{{ i !== item.casts.length-1?d.name + '、' : d.name }}</span></p>
          </div>
          <p class="movie-grade">{{ item.rating.average===0?'未评':item.rating.average+'分' }}</p>
      </cell>
    </group>
    <div class="weui-cell"><br/></div>
    <loading v-model="showLoading" :text="loadText"></loading>
  </div>
</template>
<script>
import { XHeader, Tab, TabItem, Panel, Loading, Divider, Group, Cell, Sticky } from 'vux'

export default {
  components: {
    XHeader,
    Tab,
    TabItem,
    Panel,
    Loading,
    Divider,
    Group,
    Cell,
    Sticky
  },
  data () {
    return {
      showLoading: false,
      loadText: '正在加载',
      title: '综合',
      tag: '正在热映',
      tab_list: [{
        index: 0,
        value: '正在热映'
      }, {
        index: 1,
        value: '即将上映'
      }, {
        index: 2,
        value: '排行榜'
      }],
      gridList: Object,
      params: ['in_theaters', 'coming_soon', 'top250']
    }
  },
  created: function () {
    this.showLoading = true
    this.$http.jsonp('https://api.douban.com/v2/movie/' + this.params[0] + '?count=10', {}, {
      header: {

      },
      emulateJSON: true
    })
    .then((response) => {
      this.showLoading = false
      this.gridList = response.data.subjects
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
  },
  methods: {
    onClick (item) {
      this.tag = item.value
      this.index = item.index
      this.showLoading = true
      this.$http.jsonp('https://api.douban.com/v2/movie/' + this.params[this.index] + '?count=10', {}, {
        header: {

        },
        emulateJSON: true
      })
      .then((response) => {
        this.showLoading = false
        this.gridList = response.data.subjects
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
  }
}
</script>
<style>
.movielist {
  position: relative;
  top:-1px;
}
.movie-img {
  margin-right: 8px;
}
.movie-title {
  color:#000;
  vertical-align: top;
  text-align: left;
}
.movie-info {
  position: relative;
  color:#666;
}
.movie-grade {
  position: absolute;
  top: 0;
  right: -10px;
  color: #f00;
}

</style>
