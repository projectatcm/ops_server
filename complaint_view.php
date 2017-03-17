<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();
$title = "News";
include 'includes/header.php';
$complaint_id = filter_input(INPUT_GET,'id');
if($complaint_id == ""){
	header('location:home.php');
}
$complaint = $admin->getComplaint($complaint_id);
$user_id = $complaint[0]['user_id'];
$title = $complaint[0]['title'];
$date = $complaint[0]['date'];
$location = $complaint[0]['location'];
$content = $complaint[0]['content'];
$status = $complaint[0]['status'];
$user_data = $user->getUser($user_id);
$user_name = $user_data[0]['name'];
?>
<br>
<div class="container" style="padding-right: 80px;">
	<h3 class="page-header">Complaint View</h3>
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
					<li>Location : <a href="http://maps.google.com/?q=<?=$location?>" target="_blank">View in Map</a></li>
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
				<div class="col-sm-4">
					<form method="post" action="actions/complaint_status_action.php">
						<div class="form-group">
							<label>Action</label>
							<select class="form-control1" name="status">
								<option value="0">Select</option>
								<option value="1">Accept</option>
								<option value="2">Place a siting</option>
								<option value="3">Reject</option>
							</select>
							<br><br>
						<div class="dateChoose" style="display: none;">
							<label>Select Date</label>
							<input type="date" class="form-control1" placeholder="Select date" name="date">
						</div>
							<input type="hidden" name="id" value="<?=$complaint_id;?>">
							<input type="hidden" name="user_id" value="<?=$user_id;?>">
						</div>
						<button class="btn btn-info">
							Save
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>
