<?php 
require_once 'libs/Admin.php';
$admin = new Admin();
$title = "News";
include 'includes/header.php';
$news_data = $admin->getNews();
?>
<br>
<div class="container">
	<h3 class="page-header">News</h3>
	<div class="row">
		<?php foreach ($news_data as $news): ?>
			<div class="col-sm-4">
				<div class="news_thumb">
					<img src="<?=$news['image']?>" />
					<h4><?=$news['title']?></h4>
					<p><?=$news['news']?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->



<?php include 'includes/footer.php';?>
