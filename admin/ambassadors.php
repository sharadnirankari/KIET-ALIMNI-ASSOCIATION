<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
	$type = get_safe_value($con, $_GET['type']);
	if ($type == 'status') {
		$operation = get_safe_value($con, $_GET['operation']);
		$id = get_safe_value($con, $_GET['id']);
		if ($operation == 'active') {
			$status = '1';
		} else {
			$status = '0';
		}
		$update_status_sql = "update ambassadors set status='$status' where id='$id'";
		mysqli_query($con, $update_status_sql);
	}
}

$sql = "select * from ambassadors order by id asc";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Ambassadors </h4>
						<a class="box" href="manage_ambassadors.php">Add New Ambassadors </a>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th class="serial">#</th>
										<th>Name</th>
										<th>Branch</th>
										<th>PassOut</th>
										<th>Email</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($row = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<td class="serial"><?php echo $i ?></td>
											</td>
											<td><?php echo $row['name'] ?></td>
											<td><?php echo $row['branch'] ?></td>
											<td><?php echo $row['passout'] ?></td>
											<td><?php echo $row['email'] ?></td>
											<td>
												<?php
												if ($row['status'] == 1) {
													echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
												} else {
													echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
												}
												echo "<span class='badge badge-edit'><a href='manage_ambassadors.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";


												?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.inc.php');
?>