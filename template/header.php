<?php if (!defined('_IN_STATION_')) die('Access Denied'); ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
        <!-- meta 标签 -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="baidu-site-verification" content="code-uf4ULLH2hl" />
		<title><?php echo $global['page']['title']; ?></title>
		
		<? if ($global['page']['getFullPage']) { ?>
			<base href="<?php echo (isHTTPS() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']; ?>/">
			
			
			<meta name="title" content="<?php echo $global['page']['title']; ?>" />
			<meta name="keywords" content="<?php echo $config['site']['keywords']; ?>" />
			<meta name="description" content="<?php echo $global['site']['description']; ?>" />
			<meta name="author" content="<?php echo $global['site']['author']; ?>" />
			
            <!-- Bootstrap CSS -->
            <!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="favicon.ico">
			<link rel="stylesheet" href="template/css/mdui.min.css" />
			<link rel="stylesheet" href="template/css/mdui.docs.css" />
			<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
			<script src="template/js/mdui.min.js"></script>
			<script src="data/DPlayer.min.js"></script>
			<script language='javascript'>
        
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                mdui.alert('微信用户请点击右上角 “ … ” 点击 在浏览器打开 。', '提示'); // 此处为在 微信 中的内置浏览器显示的内容，使用 MDUI 的 alert 。我为什么要这么做：因为腾讯有的时候会把你的链接封杀掉，为了防止这种现象，使用这种方式可能可以降低被封杀的风险。
            } else if (ua.match(/QQ/i) == "qq") {
                mdui.alert('QQ用户请点击右上角 “ + ” 找到 浏览器 按钮打开 。', '提示'); // 此处为在 QQ 中的内置浏览器显示的内容，使用 MDUI 的 alert 。我为什么要这么做：因为腾讯有的时候会把你的链接封杀掉，为了防止这种现象，使用这种方式可能可以降低被封杀的风险。
            } else {
          
            }
        
    </script>
			<style>html, body {scroll-behavior:smooth;}</style>

			<script>
				var xmlhttp;
				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				} else{ 
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				
				function setCookie(name,value) {
					var Days = 30;
					var exp = new Date();
					exp.setTime(exp.getTime() + Days*24*60*60*1000);
					document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/";
				}
				
				function getCookie(name) {
					var arr,reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
					if (arr = document.cookie.match(reg)) {
						return unescape(arr[2]);
						
					} else {
						return null;
						
					}
				}
				
			</script>
		<? } ?>
</head>

	<!-- body class="mdui-appbar-with-toolbar mdui-drawer-body-left mdui-theme-primary-indigo mdui-theme-accent-pink" --> 
    <body style="margin:0 auto;max-width: 860px" class="mdui-theme-primary-blue mdui-theme-accent-blue"> 
		<? if ($global['page']['getFullPage']) include 'template/drawer.php'; ?>

		<div class="mdui-container container" id="text_container">
