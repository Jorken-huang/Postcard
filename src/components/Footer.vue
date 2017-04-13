<template>
  <div class="foot">
    <tabbar>
      <tabbar-item link="/news">
        <img slot="icon" src="../assets/image/ic_nav_news_normal.png">
        <img slot="icon-active" src="../assets/image/ic_nav_news_actived.png">
        <span slot="label">新闻</span>
      </tabbar-item>
      <tabbar-item link="/find">
        <img slot="icon" src="../assets/image/ic_nav_discover_normal.png">
        <img slot="icon-active" src="../assets/image/ic_nav_discover_actived.png">
        <span slot="label">发现</span>
      </tabbar-item>
      <tabbar-item link="/comp">
        <img slot="icon" src="../assets/image/ic_nav_tweet_normal.png">
        <img slot="icon-active" src="../assets/image/ic_nav_tweet_actived.png">
        <span slot="label">综合</span>
      </tabbar-item>
      <tabbar-item link="/mime" selected>
        <img slot="icon" src="../assets/image/ic_nav_my_normal.png">
        <img slot="icon-active" src="../assets/image/ic_nav_my_pressed.png">
        <span slot="label">我的</span>
      </tabbar-item>
    </tabbar>
  </div>
</template>
<script>
import { Tabbar, TabbarItem } from 'vux'
export default {
  components: {
    Tabbar,
    TabbarItem
  },
  data () {
    return {

    }
  }
}
</script>
<style>
.foot {
  width: 100%;
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 999;
}
</style>
