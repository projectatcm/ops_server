<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();
$title = "News";
include 'includes/header.php';
$request_data = $admin->getRequest();
?>
<br>
<div class="container">
	<h3 class="page-header">Request's</h3>
	<div class="complaints_wrapper "  style="padding-right: 60px;">
		<label><strong>Unread request's</strong></label>
		<table class="table table-bordered data-container" >
			<tbody>
				<tr class="unread checked complaint_row">
				<th style="color:#06d995">Date</th>
				<th style="color:#06d995">Name</th>
				<th style="color:#06d995">Title</th>
				<th style="color:#06d995">Message</th>
				<th style="color:#06d995">Action</th>

				</tr>
				<?php foreach ($request_data as $data){ 
					$complaint_id = $data['id'];
					$user_id = $data['user_id'];
					$title = $data['title'];
					$date = $data['date'];
					$message = $data['message'];
					$status = $data['status'];
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
							<?=ucfirst($message)?>
						</td>
						<td>
							<a href="request_view.php?id=<?=$complaint_id;?>" class="btn btn-primary">
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
