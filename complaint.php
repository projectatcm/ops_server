<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();
$title = "News";
include 'includes/header.php';
$complaint_data = $admin->getComplaint();

?>
<br>
<div class="container">
	<h3 class="page-header">Complaint's</h3>
	<div class="complaints_wrapper "  style="padding-right: 60px;">
	<label><strong>Unread Complaint's</strong></label>
		<table class="table table-bordered data-container" >
			<tbody>
				<?php foreach ($complaint_data as $complaint){ 
					$complaint_id = $complaint['id'];
					$user_id = $complaint['user_id'];
					$title = $complaint['title'];
					$date = $complaint['date'];
					$location = $complaint['location'];
					$content = $complaint['content'];
					$status = $complaint['status'];
					$user_data = $user->getUser($user_id);
					$user_name = $user_data[0]['name'];
					?>
						<tr class="unread checked complaint_row">
								
							<td width="120px">
								<?=ucfirst($date)?>
							</td>
						
							<td class="hidden-xs">
								<strong>
									<?=ucfirst($user_name)?>
								</strong>
							</td>
							<td>
								<?=ucfirst($title)?>
							</td>
						
							<td>
								<a href="complaint_view.php?id=<?=$complaint_id;?>" class="btn btn-primary">
									Show
								</a>
							</td>
							</tr>
					
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<div id="complaintModel" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<p class="modal-text"></p>
			</div>
			<div class="modal-footer">
				<>
				<a class="btn btn-primary pull-left" style="width:100px;">
					<i class="fa fa-globe"></i> 
					Location
				</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<?php include 'includes/footer.php';?>
