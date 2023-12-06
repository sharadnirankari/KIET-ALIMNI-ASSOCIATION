<?php
require('top.inc.php');
isAdmin();
$name = '';
$branch = '';
$passout = '';
$email = '';
$orderno = '';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = get_safe_value($con, $_GET['id']);

	$res = mysqli_query($con, "select * from ambassadors where id='$id'");
	$check = mysqli_num_rows($res);
	if ($check > 0) {
		$row = mysqli_fetch_assoc($res);
		$name = $row['name'];
		$branch = $row['branch'];
		$passout = $row['passout'];
		$email = $row['email'];
		$orderno = $row['position'];
	} else {
		header('location:manage_ambassadors.php');
		die();
	}
}

if (isset($_POST['submit'])) {
	$name = get_safe_value($con, $_POST['name']);
	$branch = get_safe_value($con, $_POST['branch']);
	$passout = get_safe_value($con, $_POST['passout']);
	$email = get_safe_value($con, $_POST['email']);
	$orderno = get_safe_value($con, $_POST['position']);

	if (isset($_GET['id']) && $_GET['id'] != '') {
		mysqli_query($con, "update ambassadors set name='$name',branch='$branch',passout='$passout',email='$email',orderno='$orderno' where id='$id'");
	} else {
		mysqli_query($con, "insert into ambassadors(name,branch,passout,email,orderno,status) values('$name','$branch','$passout','$email','$orderno',1)");
	}
	header('Location:ambassadors');
	die();
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Ambassadors</strong><small> Form</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Name</label>
								<input type="text" name="name" placeholder="Enter Title" class="form-control" required value="<?php echo $name ?>">
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Branch</label>
								<input type="text" name="branch" placeholder="Enter Description" class="form-control" required value="<?php echo $branch ?>">
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Passout</label>
								<input type="number" name="passout" placeholder="Enter Description" class="form-control" required value="<?php echo $passout ?>">
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Email</label>
								<input type="email" name="email" placeholder="Enter Description" class="form-control" required value="<?php echo $email ?>">
							</div>
							<div class="form-group">
								<label for="heading1" class=" form-control-label">Position</label>
								<input type="number" name="position" placeholder="Enter Position" class="form-control" required value="<?php echo $orderno ?>">
							</div>



							<button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
								<span id="payment-button-amount">Submit</span>
							</button>

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