<template>
  <div id="name">
    <div id="room">

    </div>
  </div>
</template>
<script>
import echarts from 'echarts'

export default {
  name: 'chart',
  data () {
    return {
      chart: null,
      option: ['基础', '进阶', '框架'],
      optionData: [
        {value: 31, name: '基础'},
        {value: 31, name: '进阶'},
        {value: 8, name: '框架'}
      ]
    }
  },
  methods: {
    drawPie (id) {
      this.chart = echarts.init(document.getElementById(id))
      this.chart.setOption({
        title: {
          text: '技能掌握情况',
          left: 'center',
          top: 10,
          textStyle: {
            fontSize: 24,
            fontFamily: 'Helvetica',
            fontWeight: 400
          }
        },
        tooltip: {
          trigger: 'item',
          fomatte: '{b}: {c} ({d}%)'
        },
        toolbox: {
          feature: {
            saveAsImage: {},
            dataView: {}
          },
          right: 15,
          top: 10
        },
        legend: {
          orient: 'vertical',
          left: 5,
          top: 10,
          data: this.option
        },
        series: [{
          name: '基本技能',
          type: 'pie',
          radius: ['30%', '50%'],
          center: ['50%', '70%'],
          avoidLabelOverlap: false,
          label: {
            emphasis: {
              show: true,
              textStyle: {
                fontSize: '24',
                fontWeight: 'bold'
              }
            }
          },
          labelLine: {
            normal: {
              show: false
            }
          },
          data: this.optionData,
          itemStyle: {
            emphasis: {
              shadowBlur: 10,
              shadowOffset: 0,
              shadowColor: 'rgba(0,0,0,.5)'
            }
          }
        }]
      })
    }
  },
  mounted () {
    this.$nextTick(function () {
      this.drawPie('room')
    })
  }
}
</script>
<style>
#room {
  position: relative;
  left: 50%;
  padding-left: 15px;
  margin-left: -200px;
  margin-bottom: 70px;
  width: 380px;
  height: 160px;
  background-color: #fff;
}
</style>
