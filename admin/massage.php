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
		$update_status_sql = "update massage set msg_status='$status' where msg_id='$id'";
		mysqli_query($con, $update_status_sql);
	}
}

$sql = "select * from massage order by msg_id asc";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Massage </h4>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th class="serial">#</th>
										<th>Title</th>
										<th>Discription</th>

										<th>Image</th>
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
											<td><?php echo $row['msg_title'] ?></td>
											<td><?php echo $row['msg_description'] ?></td>

											<td>
												<?php

												echo "<a target='_blank' href='" . BANNER_SITE_PATH . $row['msg_dp'] . "'><img width='150px' src='". BANNER_SITE_PATH . $row['msg_dp'] ."'/></a>";
												?>
											</td>
											<td>
												<?php
												if ($row['msg_status'] == 1) {
													echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=" . $row['msg_id'] . "'>Active</a></span>&nbsp;";
												} else {
													echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=" . $row['msg_id'] . "'>Deactive</a></span>&nbsp;";
												}
												echo "<span class='badge badge-edit'><a href='manage_massage.php?id=" . $row['msg_id'] . "'>Edit</a></span>&nbsp;";


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