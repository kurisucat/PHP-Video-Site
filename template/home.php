<?php if (!defined('_IN_STATION_')) die('Access Denied');
	require_once('template/header.php'); ?>

<!-- h1 id="title"><? echo $global['site']['name']; ?></h1 -->


<? if (!empty($home['notice'])) { ?>
		<!-- div class="mdui-card mdui-hoverable">
			<div class="mdui-card-content">
				<div class="mdui-typo" style="position:relative;top:-20px;">
					<h1>公告板</h1>
					<? echo $global['site']['notice']; ?>
				</div>
			</div>
		</div -->
        <div class="jumbotron">
            <h1>公告板</h1>
            <p><? echo $global['site']['notice']; ?></p> 
        </div>
	<br>
<? } ?>

<h1>视频播放列表</h1>

<? if (isset($home['videos'])) {
	for ($i = 0; $i < count($home['videos']); $i++) { ?>
		<a href="media/<? echo $home['videos'][$i]['id']; ?>" class="list-group-item"><? echo $home['videos'][$i]['name']; ?></a>

	<? }
	} else { ?>
			<center><p>当前没找到视频～</p></center>
<? } ?>

<!-- /div -->
<br>
<? require_once("template/footer.php"); ?>
