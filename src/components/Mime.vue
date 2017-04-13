<template>
  <div class="mime">
    <blur :blur-amount=50 :height=180 :url="data.user.avater">
      <p class="center"><img :src="data.user.avater"></p>
      <h3>{{ data.user.name }}</h3>
    </blur>
    <div class="card-demo-flex card-demo-content01 cardbox">
      <div v-for="(item,index) in data.user.card" :key="index">
        <span>{{ item.value }}</span>
        <br/>
        {{ item.label }}
      </div>
    </div>
    <group title="基本技能">
      <grid :rows="4">
        <grid-item :label="item.label" v-for="(item,index) in data.user.skill" :key="index">
          <img slot="icon" :src="item.icon">
        </grid-item>
      </grid>
    </group>
    <group title="技能掌握情况">
      <chart></chart>
    </group>
    <group title="技能加点">
      <cell v-for="(item,index) in data.user.point" :key="index" primary="content" :title="item.label" class="title-font">
        <rater :value="item.value" slot="value" active-color="#04BE02" :font-size="20" disabled></rater>
      </cell>
    </group>
  </div>
</template>

<script>
import Chart from './Chart'
import { Blur, Group, CellBox, Cell, Grid, GridItem, Rater, XCircle, XHeader } from 'vux'
export default {
  components: {
    Blur,
    Group,
    CellBox,
    Cell,
    Grid,
    GridItem,
    Rater,
    XCircle,
    XHeader,
    Chart
  },
  data () {
    return {
      data: {
        user: {
          title: '我的',
          name: 'jorken',
          avater: 'https://o3e85j0cv.qnssl.com/waterway-107810__340.jpg',
          card: [
            {
              label: '收藏夹',
              value: '366'
            },
            {
              label: '关注博客',
              value: '592'
            },
            {
              label: '足迹',
              value: '1346'
            }
          ],
          skill: [
            {
              label: 'HTML5',
              icon: 'http://static.runoob.com/images/icon/html5.png'
            },
            {
              label: 'CSS3',
              icon: 'http://static.runoob.com/images/icon/css3.png'
            },
            {
              label: 'JavaScript',
              icon: 'http://static.runoob.com/images/icon/js.png'
            },
            {
              label: 'jQuery',
              icon: 'http://static.runoob.com/images/icon/jquery.png'
            },
            {
              label: 'AngularJs',
              icon: 'http://static.runoob.com/images/icon/angularjs.png'
            },
            {
              label: 'Vue.js',
              icon: 'http://static.runoob.com/images/icon/vue.png'
            },
            {
              label: 'React',
              icon: 'http://static.runoob.com/images/icon/react.png'
            },
            {
              label: 'Node.js',
              icon: 'http://static.runoob.com/images/icon/nodejs.png'
            }
          ],
          exp: '60',
          vit: '96',
          point: [
            {
              label: 'HTML+CSS',
              value: 5
            },
            {
              label: 'JavaScript',
              value: 4.5
            },
            {
              label: 'jQuery',
              value: 4.5
            },
            {
              label: 'AngularJs',
              value: 4
            },
            {
              label: 'Vue.js',
              value: 3.5
            },
            {
              label: 'Nodejs',
              value: 3.5
            }
          ]
        }
      }
    }
  }
}
</script>

<style lang="less">
@import '~vux/src/styles/1px.less';
.mime {
  padding-bottom: 50px;
}
.center {
  text-align: center;
  padding-top: 20px;
  font-size: 18px;
}
.center img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 4px solid #ececec;
}
h3 {
  text-align: center;
  color: #ececec;
}
.card-demo-flex {
  display: flex;
}
.card-demo-content01 {
  padding: 10px 0;
}
.card-padding {
  padding: 15px;
}
.card-demo-flex > div {
  flex: 1;
  text-align: center;
  font-size: 12px;
}
.card-demo-flex span {
  color: #f74c31;
}
.cardbox {
  background-color:#fff;
}
.circle {
  display: flex;
  background-color: #fff;
}
.circle > div {
  flex: 1;
  text-align: center;
  font-size: 12px;
}
.title-font{
  font-size: 14px;
}
</style>
