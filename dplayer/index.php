<html>
<head>
	<title>dplayer增加记忆+P2P播放</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=11" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dplayer@latest/dist/DPlayer.min.css" /> 
<style type="text/css">
    body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
    *{margin:0;border:0;padding:0;text-decoration:none}
    #stats{position:fixed;top:5px;left:10px;font-size:10px;color:#fdfdfd;z-index:20719029;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
    #dplayer{position:inherit}
</style>
 </head>
<body style="background:#000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu=window.event.returnValue=false>
<div id="dplayer"></div>
<div id="stats"></div>
<script src="https://cdn.jsdelivr.net/npm/cdnbye@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/dplayer@latest"></script>
<script>var url='<?php echo($_REQUEST['url']);?>';var isWap=navigator.userAgent.match(/iPad|iPhone|iPod|Baidu/i)!=null;if(!isWap){if(url.indexOf(".m3u8")>0){var _peerId='',_peerNum=0,_totalP2PDownloaded=0,_totalP2PUploaded=0;var type='customHls'}else{var type='normal'}var dp=new DPlayer({container:document.getElementById('dplayer'),autoplay:true,hotkey:true,logo:'logo.png',video:{url:url,pic:'loading_wap.gif',type:type,customType:{'customHls':function(video,player){const hls=new Hls({debug:false,p2pConfig:{logLevel:true,live:false,}});hls.loadSource(video.src);hls.attachMedia(video);hls.p2pEngine.on('stats',function(stats){_totalP2PDownloaded=stats.totalP2PDownloaded;_totalP2PUploaded=stats.totalP2PUploaded;updateStats()}).on('peerId',function(peerId){_peerId=peerId}).on('peers',function(peers){_peerNum=peers.length;updateStats()})}}},danmaku:{id:'9E2E3368B56CDBB4',api:'https://dplayer.alone88.cn/',bottom:'25%',unlimited:true,},contextmenu:[{text:'极速影视',link:'http://qxkkk.cn',},],highlight:[{text:'提示：点击下方状态栏可以发送字幕',time:120,},{text:'警告：请不要相信视频中任何广告与字幕',time:600,},]});var webdata={set:function(key,val){window.sessionStorage.setItem(key,val)},get:function(key){return window.sessionStorage.getItem(key)},del:function(key){window.sessionStorage.removeItem(key)},clear:function(key){window.sessionStorage.clear()}};dp.seek(webdata.get('vod'+url));setInterval(function(){webdata.set('vod'+url,dp.video.currentTime)},1000)}else{document.getElementById('dplayer').innerHTML='<video src="'+url+'" controls="controls" preload="preload" poster="loading_wap.gif" width="100%" height="100%" autoplay="autoplay"></video>'}function updateStats(){var text='七星P2P正在为您加速'+(_totalP2PDownloaded/1024).toFixed(2)+'MB 已分享'+(_totalP2PUploaded/1024).toFixed(2)+'MB'+' 连接节点'+_peerNum+'个';document.getElementById('stats').innerText=text}</script>;
<script src="https://s19.cnzz.com/z_stat.php?id=1263734298&web_id=1263734298" language="JavaScript" type=”hidden”></script>
</body>
</html>