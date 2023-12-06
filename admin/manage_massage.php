<?php
require('top.inc.php');
isAdmin();
$msg_title = '';
$msg_desc = '';
$image = '';
$msg = '';
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = get_safe_value($con, $_GET['id']);
	$image_required = '';
	$res = mysqli_query($con, "select * from massage where msg_id='$id'");
	$check = mysqli_num_rows($res);
	if ($check > 0) {
		$row = mysqli_fetch_assoc($res);
		$msg_title = $row['msg_title'];
		$msg_desc = $row['msg_description'];
		$image = $row['msg_dp'];
	} else {
		header('location:manage_massage.php');
		die();
	}
}

if (isset($_POST['submit'])) {
	$msg_title = get_safe_value($con, $_POST['msg_title']);
	$msg_desc = get_safe_value($con, $_POST['msg_desc']);


	if (isset($_GET['msg_id']) && $_GET['msg_id'] == 0) {
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
				mysqli_query($con, "update massage set msg_title='$msg_title',msg_description='$msg_desc',msg_dp='$image' where msg_id='$id'");
			} else {
				mysqli_query($con, "update massage set msg_title='$msg_title',msg_description='$msg_desc',msg_dp='$image' where msg_id='$id'");
			}
		} else {
			$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], BANNER_SERVER_PATH . $image);
			//imageCompress($_FILES['image']['tmp_name'],BANNER_SERVER_PATH.$image);
			mysqli_query($con, "insert into massage(msg_title,msg_description,msg_dp) values('$msg_title','$msg_desc','$image')");
		}
		header('Location:massage');
		die();
	}
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Banner</strong><small> Form</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Title</label>
								<input type="text" name="msg_title" placeholder="Enter Title" class="form-control" required value="<?php echo $msg_title ?>">
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Description</label>
								<textarea type="text" name="msg_desc" placeholder="Enter Description" class="form-control" required><?php echo $msg_desc ?></textarea>
							</div>
						
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Image</label>
								<input type="file" name="image" placeholder="Enter image" class="form-control" <?php echo  $image_required ?> value="<?php echo $image ?>">
								<?php
								if ($image != '') {
									echo "<a target='_blank' href='" . BANNER_SITE_PATH . $image . "'><img width='150px' src='" . BANNER_SITE_PATH . $image . "'/></a>";
								}
								?>
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