<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');

$json = '[{
					"uniquekey":"2d5b9bf680308579882eab91341b669f",
					"title":"中日邦交正常化45周年，驻日使馆将办“2017中国节”",
					"date":"2017-04-11 16:53",
					"category":"头条",
					"author_name":"澎湃新闻",
					"desc":"据中国驻日本大使馆官网4月10日消息，“2017中国节”筹备工作启动仪式7日在中国驻日本大使馆举行。中国驻日本大使程永华、刘少宾公使、郭燕公使及使馆相关部门负责人、日本众议院议员青柳阳一郎等运营事务局成员、在日中国企业协会会长彭卜钢等中资机构代表、东京华侨总会会长林斯福等华侨华人团体代表50余人出席启动仪式。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411165346339.html",
					"thumbnail_pic_s":"http:\/\/05.imgmini.eastday.com\/mobile\/20170411\/20170411165346_83931539437640d218fd23f924571c73_1_mwpm_03200403.jpeg",
					"thumbnail_pic_s02":"http:\/\/05.imgmini.eastday.com\/mobile\/20170411\/20170411165346_83931539437640d218fd23f924571c73_3_mwpm_03200403.jpeg",
					"thumbnail_pic_s03":"http:\/\/05.imgmini.eastday.com\/mobile\/20170411\/20170411165346_83931539437640d218fd23f924571c73_2_mwpm_03200403.jpeg"
				},
				{
					"uniquekey":"c9da005f2c7a592262cdc8e5fe03e213",
					"title":"美国若对朝动武会否征得韩同意？韩方：韩美将紧密合作",
					"date":"2017-04-11 16:46",
					"category":"头条",
					"author_name":"环球网",
					"desc":"据报道，文尚均在被问及“美国如向朝鲜发起军事行动，是否会与韩国达成协议或事先征得韩方同意”时表示，韩国和美国以紧密合作关系为基础，一切行动都在坚固的韩美联合防卫姿态之下进行。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411164607959.html",
					"thumbnail_pic_s":"http:\/\/07.imgmini.eastday.com\/mobile\/20170411\/20170411164607_5bed5ad46e1efa3fbcd1354f00f35777_1_mwpm_03200403.jpeg"
				},
				{
					"uniquekey":"8100906729181cd755cd706246f2e637",
					"title":"朝官媒：先发制人非美专利 将以核打击变侵略大本营为焦土",
					"date":"2017-04-11 16:46",
					"category":"头条",
					"author_name":"环球网",
					"desc":"【环球网综合报道】美国近日空袭叙利亚，有分析认为，美国在朝鲜问题上也将会先发制人。“先发制人不是美国专利”，朝鲜《劳动新闻》11日以此为题的评论称，如果美国想对朝鲜先发制人，朝鲜将会使用强威力的核打击手段，将侵略和挑衅的大本营变成焦土。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411164606422.html",
					"thumbnail_pic_s":"http:\/\/03.imgmini.eastday.com\/mobile\/20170411\/20170411164606_44019a9e27b026f9bfd7ced680744510_1_mwpm_03200403.png"
				},
				{
					"uniquekey":"abddf904056a177f23373fbfceb286f0",
					"title":"女学生与老师斗气遭扇耳光 奋起反击:我要你管?",
					"date":"2017-04-11 16:31",
					"category":"头条",
					"author_name":"中国经济网",
					"desc":"女学生与老师斗气遭扇耳光， 奋起反击上演“课堂”大战】近日网友上传一段视频，视频显示：在某学校的一节课堂上，一名学生与老师发生矛盾。老师指责女学生没有礼貌，讲话方式不对，女学生则说“我要你管，你是我谁”。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411163155212.html",
					"thumbnail_pic_s":"http:\/\/09.imgmini.eastday.com\/mobile\/20170411\/20170411163155_66e3f916f8a3da7094ff48cfbd64c702_1_mwpm_03200403.png"
				},
				{
					"uniquekey":"bfabd9423e3c5a502c0b7bcf0d5fb924",
					"title":"河南人民广播电台原台长李新全受贿798万元 获刑11年半",
					"date":"2017-04-11 16:31",
					"category":"头条",
					"author_name":"郑州中级法院",
					"desc":"2017年4月11日上午，在郑州市第十四届人民代表大会第五次会议上，郑州市中级人民法院院长于东辉作工作报告。郑州中院官方微信公号同时刊发小编解读报告中那些大案要案。 其中显示，河南人民广播电台原台长李新全受贿案。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411163122674.html",
					"thumbnail_pic_s":"http:\/\/04.imgmini.eastday.com\/mobile\/20170411\/20170411163122_90dd7419b97629b5ddc5a41ca81e5a03_2_mwpm_03200403.jpeg"
				},
				{
					"uniquekey":"4c32ca5197cf9a106215bb63cf6f16e0",
					"title":"2017年养老金上涨5.5%，企业退休人员为何如此担忧？",
					"date":"2017-04-11 16:24",
					"category":"头条",
					"author_name":"南公爵无欢",
					"desc":"财政部近日公布今年年中央财政预算，从今年年1月1日起，按照平均5.5%的幅度提高企业和机关事业单位退休人员养老金标准，确保按时足额发放。今年调整的退休人员基本养老金已基本到位，全国1亿多企业和机关事业单位退休人员养老待遇提高。",
					"url":"http:\/\/mini.eastday.com\/mobile\/170411162432880.html",
					"thumbnail_pic_s":"http:\/\/00.imgmini.eastday.com\/mobile\/20170411\/20170411_05e13d1b3cdfb496d535aabb46e21b74_cover_mwpm_03200403.jpeg",
					"thumbnail_pic_s02":"http:\/\/00.imgmini.eastday.com\/mobile\/20170411\/20170411_adcedfcaf2dfc71cb0d3e15bec7e3657_cover_mwpm_03200403.jpeg",
					"thumbnail_pic_s03":"http:\/\/00.imgmini.eastday.com\/mobile\/20170411\/20170411_32eed960da8ad18711a110b07ccc4859_cover_mwpm_03200403.jpeg"
				}]';

$news = (Array)json_decode($json);

echo json_encode($news);
