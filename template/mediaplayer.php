<?php if (!defined('_IN_STATION_')) die('Access Denied'); ?>
<script type="text/javascript">
			function copyText(text, callback) {

			    var tag = document.createElement('input');
			    tag.setAttribute('id', 'cp_hgz_input');
			    tag.value = text;

			    document.getElementsByTagName('body')[0].appendChild(tag);

			    document.getElementById('cp_hgz_input').select();
			    document.execCommand('copy');
			    document.getElementById('cp_hgz_input').remove();
			    
			    if(callback) {callback(text)}
			}
</script>
<div class="jumbotron">
		<h1><?php echo $media['now']['title']; ?></h1>
		<p><?php echo $media['now']['description']; ?></p>
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo $media['now']['views'] . " 次观看" ?><br><br>
		<p><buttom onclick="copyText('<?php echo $media['now']['url']; ?>', function(){mdui.snackbar({message: '复制视频地址成功'})})" class="btn btn-primary" role="button">
			复制视频链接</buttom>
           <button class='btn btn-primary' onclick="copyText('<?php echo (isHTTPS() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . "/media/" . $media['now']['id']; ?>', function(){mdui.snackbar({message: '复制本页地址成功'})})" style='margin-left:8px;'>复制本页地址</button>
		</p>
</div>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">
        &times;
    </a>
</div>

<? include 'data/mediaplayer.php'; ?>
<br><br>
<a href='<? echo $media['pre']['id'] ? '/media/' . $media['pre']['id'] : 'javascript:;'; ?>' class='btn btn-default'>上一篇：<? echo $media['pre']['title']; ?></a>
<a href='<? echo $media['next']['id'] ? '/media/' . $media['next']['id'] : 'javascript:;'; ?>' class='btn btn-default' id='mdui_media_next'>下一篇：<? echo $media['next']['title']; ?></a>
