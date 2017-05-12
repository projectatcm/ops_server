<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();
$title = "News";
include 'includes/header.php';
$request_id = filter_input(INPUT_GET,'id');
if($request_id == ""){
	header('location:home.php');
}
$request = $admin->getRequest($request_id);
$user_id = $request[0]['user_id'];
$title = $request[0]['title'];
$date = $request[0]['date'];
$content = $request[0]['message'];
$status = $request[0]['status'];
$user_data = $user->getUser($user_id);
$user_name = $user_data[0]['name'];
?>
<br>
<div class="container" style="padding-right: 80px;">
	<h3 class="page-header">request View</h3>
	<div class="col-sm-12">
		<div class="paper_wrapper">
			<div class="title">
				<?=ucfirst($title);?>

			</div>
			<h6 class="date"><?=$date?></h6>
			<hr>
			<div class="content">
				<p>
					<?=ucfirst($content);?>
				</p>
			</div>

			<div class="info">
				<ul>
					<li>User Name : <?=ucfirst($user_name);?></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				$('select[name="status"]').change(function(event) {
					console.log($(this).val() );
					if($(this).val() == 2){
						$('.dateChoose').show();
					}else{
						$('.dateChoose').hide();
					}
				});
			});
		</script>
		<div class="paper_wrapper">
			<h4>Action</h4>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<form method="post" action="actions/replay_action.php">
						<div class="form-group">
							<label>Replay</label>
							<textarea class="form-control1" style="height:150px;" name="message" placeholder="Text" required></textarea>
							<br><br>
						<div class="dateChoose" style="display: none;">
							<label>Select Date</label>
							<input type="date" class="form-control1" placeholder="Select date" name="date">
						</div>
							<input type="hidden" name="id" value="<?=$request_id;?>">
							<input type="hidden" name="user_id" value="<?=$user_id;?>">
						</div>
						<button class="btn btn-info">
							Replay
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>
