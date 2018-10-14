<?php include('view/common/header.html'); ?>
<body>
	

	<?php include_once('view/common/head.html') ?>

	<div class="main">
		<div class="left">
			<?php include('view/common/send-weibo.php') ?>
			<!--广告-->
			<div class="little_banner">
				<a href="https://mrbccd.taobao.com">
					<img src="public/images/weibo_banner.png" alt="">
				</a>
			</div>
			<h4 class="weibo_list_title">全部微博</h4>
			<?php if (!isset($lists)) { ?>
			<div class="empty">
				<p>还没有微博哦！</p>
			</div>
			<?php }else{
				//微博列表
				include_once('view/common/weibo-list.php');
				//分页
				include_once('view/common/page.php');
			 ?>
		</div>
		<!--个人信息-->
		<?php include_once('view/common/profile.php') ?>
	</div>
	<!--底部信息-->
	<?php include_once('view/common/footer.php') ?>
</body>