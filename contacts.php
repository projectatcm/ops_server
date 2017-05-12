<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();
$title = "News";
include 'includes/header.php';
$contacts = $admin->getContacts();
?>
<br>
<div class="container">
	<h3 class="page-header">Contacts's</h3>
	<div class="complaints_wrapper "  style="padding-right: 60px;">
		<div class="col-sm-6">
			<label><strong>Add contact</strong></label>
			<form class="" action="actions/add_contact.php" method="post" requied />
			<br>
			<label>Name</label>
				<input type="text" class="form-control1" name="name" required />
				<label>Number</label>
				<input type="text" class="form-control1" name="phone">
				<button class="bth btn-primary">Add Contact</button>
			</form>
		</div>
		<div class="col-sm-6">
			<table class="table table-bordered data-container" >
			<tbody>
				<tr class="unread checked complaint_row">
				<th style="color:#06d995">Name</th>
				<th style="color:#06d995">Number</th>
				<th width="10px"></th>
				</tr>
				<?php foreach ($contacts as $contact): ?>
					<tr>
					<td><?=$contact['name']?></td>
					<td><?=$contact['phone']?></td>
					<td><a
						onclick="javascript:if(!confirm('Are you sure to delete ?')) return false;"
					 href="actions/delete_contact.php?id=<?=$contact['id']?>">Delete</a></td>
				</tr>
				<?php endforeach ?>
				</tbody>
			</table>
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
