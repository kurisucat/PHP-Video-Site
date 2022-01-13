<?php if (!defined('_IN_STATION_')) die('Access Denied');
	if ($global['page']['getFullPage']) {
		include 'template/submitMessageDialog.php'; ?>
</div>
<div class="doc-footer-nav" style="height:auto;width:100%;background:rgba(20,20,20,0.02)">
	<div class="mdui-divider"></div>
    <div class="mdui-typo mdui-theme-accent-blue-400" style="padding:8px">
		<? if (!empty($global['site']['footer'])) echo $global['site']['footer']; ?>
		
        <center>
            <!-- 倘若你要移除版权信息，我也不拦着你，我只会告诉你这事不好。 -->
<p>由 <a href="https://kurisucat.cn" target="_blank">克里斯猫</a> 移植 Bootstrap 主题以及魔改。
<br>由 <a href="https://github.com/MisaWorkGroup/Simple-PHP-Video-Station/" target="_blank">MisaLiu 的 PHP 牌视频点播站</a> 强力驱动以及技术支持。
<br>©<div id="years">2022</div> <? echo $global['site']['name']; ?></p></center>
	</div>
</div>
<script>
    // 获取当年信息然后自动修改©后面那个年份
    var date = new Date;
    document.getElementById('years').innerHTML = date.getFullYear();
</script>

<a href="" id="JumpLink" style="display:none">Jump</a>



<!-- 页面跳转 -->
<div class="modal fade" id="jumpMsgPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
						aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					页面跳转
				</h4>
			</div>
			<div class="modal-body">
				<label class="mdui-textfield-label"></label>
			    <div class="col-lg-6">
				<div class="input-group">
                    
					<input placeholder="请输入您要跳转的页码（范围 1-<?php echo $pageCount; ?>）" type="text" class="form-control" id="jumpPage">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button" onclick="jumpBoardPage();" >
							走起
						</button>
					</span>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			</div>
			<div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#jumpMsgFloor">
	                    楼层跳转
                </button>
				<button type="button" class="btn btn-default" 
						data-dismiss="modal">关闭
				</button>
				
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- 楼层跳转 -->
<div class="modal fade" id="jumpMsgFloor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
						aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					楼层跳转
				</h4>
			</div>
			<div class="modal-body">
				<label class="mdui-textfield-label"></label>
			    <div class="col-lg-6">
				<div class="input-group">
                    
					<input placeholder="请输入您要跳转的楼层编号（范围 1-<?php echo $rowCount; ?>）" type="text" class="form-control" id="jumpMessage">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button" onclick="jumpBoardMessage();" >
							走起
						</button>
					</span>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			</div>
			<div class="modal-footer">
                <button class="btn btn-default" data-toggle="modal" data-dismiss="modal" data-target="#jumpMsgPage">
	                    页面跳转
                </button>
				<button type="button" class="btn btn-default" 
						data-dismiss="modal">关闭
				</button>
				
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script src="template/js/pjax.js"></script>
<script src="template/js/preload.js?202105012102" type="text/javascript"></script>
<!-- jQuery -->
    <!-- script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script -->
<!-- bootstrap js -->
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script-->
<?php include "template/footerJs.php";} ?>
</body>
</html>
