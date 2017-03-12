<?php 
$title = "Admin Home";
include 'includes/header.php';
?>
<br>
<div class="container">
	<h3 class="page-header">Add News</h3>
	<div class="col-md-8">

		<div class="panel panel-default">
			<div class="panel-heading">
				Compose New Message 
			</div>
			<div class="panel-body">
				<form action="actions/news_add_action.php" method="post" enctype="multipart/form-data">
					<label>Enter Title : </label>
					<input type="text" name="title" class="form-control1 control3">
					<label>Choose Image :  </label>
					<input type="file" name="image" class="form-control1 control3">
					<label>Enter News : </label>
					<textarea rows="6" name="news" class="form-control1 control2"></textarea>
					<hr>
					<button type="submit" class="btn btn-primary">
						Add News
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->



<?php include 'includes/footer.php';?>
