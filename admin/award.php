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
        $update_status_sql = "update award set status='$status' where id='$id'";
        mysqli_query($con, $update_status_sql);
    }
}

$sql = "select * from award order by id asc";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">award </h4>
                        <a class="box" href="manage_award">Add New award</a>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Name</th>
                                        <th>Achievement</th>
                                        <th>Course</th>
                                        <th>Branch</th>
                                        <th>Passout</th>
                                        <th>Affiliate</th>
                                        <th>AwardYear</th>
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
                                            <td><?php echo $row['achievement'] ?></td>
                                            <td><?php echo $row['course'] ?></td>
                                            <td><?php echo $row['branch'] ?></td>
                                            <td><?php echo $row['passout'] ?></td>
                                            <td><?php echo $row['affiliation'] ?></td>
                                            <td><?php echo $row['awardyear'] ?></td>
                                            <td>
                                                <?php
                                                echo "<span class='badge badge-edit'><a href='manage_award.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";
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