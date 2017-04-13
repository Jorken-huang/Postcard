# Postcard

> 使用vue2.0、vux2.0、vue-router2.0、echarts等搭建的一个简单的单页应用程序
> 不支持IE8及其以下版本，单页面应用
> 对vux2.0和vue2.0的试手，之后随着深入学习一直迭代并用node.js+mongoDB扩展到后台

## 调试步骤
```
# 克隆项目
git clone git@github.com:Jorken-huang/Postcard.git

# 安装依赖
npm install

# 在本地启动服务，并且通过localhost:8080地址进行访问
npm run dev

# 编译并压缩代码发布
npm run build

```

## 在线访问
http://www.jorken.cn      

## 源码说明
```
|-- build                            // 项目构建相关代码
|-- config                           // 项目开发环境配置
|-- src                              // 源码目录
|   |-- assets                       // 原始资源
|   |-- components                   // vue公共组件
|   |-- router                       // 路由配置
|   |-- App.vue                      // 页面入口文件
|   |-- main.js                      // 程序入口文件，加载各种公共组件
|-- static
|   |-- .gitkeep                     // 追踪空文件
|-- .babelrc                         // ES6语法编译配置
|-- .editorconfig                    // 定义代码格式
|-- .gitignore                       // git上传需要忽略的文件格式
|-- README.md                        // 项目说明
|-- favicon.ico
|-- index.html                       // 入口页面
|-- package.json                     // 项目配置相关信息
.
```

## 教程
//之后添加

For detailed explanation on how things work, checkout the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).
