<?php
require('top.inc.php');
isAdmin();
$committee_name = '';
$committee_post = '';
$committee_desc = '';
$member = '';
$image = '';
$msg = '';
$order_no = 0;
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = get_safe_value($con, $_GET['id']);
	$image_required = '';
	$res = mysqli_query($con, "select * from committee where committee_id='$id'");
	$check = mysqli_num_rows($res);
	if ($check > 0) {
		$row = mysqli_fetch_assoc($res);
		$committee_name = $row['committee_name'];
		$committee_post = $row['committee_post'];
		$committee_desc = $row['committee_desc'];
		$member = $row['member'];
		$image = $row['committee_image'];
		$order_no = $row['order_no'];
	} else {
		header('location:manage_committee');
		die();
	}
}

if (isset($_POST['submit'])) {
	$committee_name = get_safe_value($con, $_POST['committee_name']);
	$committee_post = get_safe_value($con, $_POST['committee_post']);
	$committee_desc = get_safe_value($con, $_POST['committee_desc']);
	$order_no = get_safe_value($con, $_POST['order_no']);
	$member = get_safe_value($con, $_POST['member']);

	if (isset($_GET['id']) && $_GET['id'] == 0) {
		if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
			$msg = "Please select only png,jpg and jpeg image formate";
		}
	} else {
		if ($_FILES['image']['type'] != '') {
			if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
				$msg = "Please select only png,jpg and jpeg image formate";
			}
		}
	}

	$msg = "";

	if ($msg == '') {
		if (isset($_GET['id']) && $_GET['id'] != '') {
			if ($_FILES['image']['name'] != '') {
				$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], BANNER_SERVER_PATH . $image);
				//imageCompress($_FILES['image']['tmp_name'], BANNER_SERVER_PATH . $image);
				mysqli_query($con, "update committee set committee_name='$committee_name',committee_post='$committee_post',committee_desc='$committee_desc',committee_image='$image',order_no='$order_no',member='$member' where committee_id='$id'");
			} else {
				mysqli_query($con, "update committee set committee_name='$committee_name',committee_post='$committee_post',committee_desc='$committee_desc',order_no='$order_no',member='$member'  where committee_id='$id'");
			}
		} else {
			$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], BANNER_SERVER_PATH . $image);
			//imageCompress($_FILES['image']['tmp_name'],BANNER_SERVER_PATH.$image);
			mysqli_query($con, "insert into committee(committee_name,committee_post,committee_image,committee_desc,status,order_no,member) values('$committee_name','$committee_post','$image','$committee_desc','1','$order_no','$member')");
		}
		header('Location:committee');
		die();
	}
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Committee</strong><small> Add</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">
							<div class="form-group">
								<label for="committee_name" class=" form-control-label">Committee Name</label>
								<input type="text" name="committee_name" placeholder="Enter Committee Name" class="form-control" required value="<?php echo $committee_name ?>">
							</div>
							<div class="form-group">
								<label for="committee_post" class=" form-control-label">Committee Post</label>
								<input type="text" name="committee_post" placeholder="Enter Committee Post" class="form-control" required value="<?php echo $committee_post ?>">
							</div>
							<div class="form-group">
								<label for="committee_desc" class=" form-control-label">Committee Description</label>
								<input type="text" name="committee_desc" placeholder="Enter Committee Desc" class="form-control" required value="<?php echo $committee_desc ?>">
							</div>

							<div class="form-group">
								<label for="committee_member" class=" form-control-label">Committee Member</label>
								<select class="form-control" name="member" required>

									<option value="Executive Member">Executive Member</option>
									<option value="Board Member">Board Member</option>
								</select>
							</div>
							<div class="form-group">
								<label for="committee_image" class=" form-control-label">Image</label>
								<input type="file" name="image" placeholder="Enter image" class="form-control" <?php echo  $image_required ?> value="<?php echo $image ?>">
								<?php
								if ($image != '') {
									echo "<a target='_blank' href='" . BANNER_SITE_PATH . $image . "'><img width='150px' src='" . BANNER_SITE_PATH . $image . "'/></a>";
								}
								?>
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Order No</label>
								<input type="text" name="order_no" placeholder="Enter order no" class="form-control" value="<?php echo $order_no ?>">
							</div>
							<button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
								<span id="payment-button-amount">Submit</span>
							</button>
							<div class="field_error"><?php echo $msg ?></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('footer.inc.php');
?>