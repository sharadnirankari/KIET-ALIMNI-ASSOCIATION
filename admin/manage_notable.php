<?php
require('top.inc.php');
isAdmin();
$alumni_name = '';
$alumni_branch = '';
$alumni_desc = '';
$alumni_category = '';
$image = '';
$msg = '';
$order_no = 0;
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $image_required = '';
    $res = mysqli_query($con, "select * from notable where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $alumni_name = $row['alumni_name'];
        $alumni_branch = $row['alumni_branch'];
        $alumni_desc = $row['alumni_desc'];
        $alumni_category = $row['alumni_category'];
        $image = $row['alumni_image'];
        $order_no = $row['order_no'];
    } else {
        header('location:manage_notable');
        die();
    }
}

if (isset($_POST['submit'])) {
    $alumni_name = get_safe_value($con, $_POST['alumni_name']);
    $alumni_branch = get_safe_value($con, $_POST['alumni_branch']);
    $alumni_desc = get_safe_value($con, $_POST['alumni_desc']);
    $alumni_category = get_safe_value($con, $_POST['alumni_category']);
    $order_no = get_safe_value($con, $_POST['order_no']);

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
                mysqli_query($con, "update notable set alumni_name='$alumni_name',alumni_branch='$alumni_branch',alumni_desc='$alumni_desc',alumni_category='$alumni_category',alumni_image='$image',order_no='$order_no' where id='$id'");
            } else {
                mysqli_query($con, "update notable set alumni_name='$alumni_name',alumni_branch='$alumni_branch',alumni_desc='$alumni_desc',alumni_category='$alumni_category',order_no='$order_no'  where id='$id'");
            }
        } else {
            $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], BANNER_SERVER_PATH . $image);
            //imageCompress($_FILES['image']['tmp_name'],BANNER_SERVER_PATH.$image);
            mysqli_query($con, "insert into notable(alumni_name,alumni_branch,alumni_category,alumni_image,alumni_desc,status,order_no) values('$alumni_name','$alumni_branch','$alumni_category','$image','$alumni_desc','1','$order_no')");
        }
        header('Location:manage_notable');
        die();
    }
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Alumni</strong><small> Add</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="alumni_name" class=" form-control-label">Alumni Name</label>
                                <input type="text" name="alumni_name" placeholder="Enter Committee Name" class="form-control" required value="<?php echo $alumni_name ?>">
                            </div>
                            <div class="form-group">
                                <label for="alumni_branch" class=" form-control-label">Alumni Branch</label>
                                <input type="text" name="alumni_branch" placeholder="Enter Alumni Branch" class="form-control" required value="<?php echo $alumni_branch ?>">
                            </div>
                            <div class="form-group">
                                <label for="alumni_desc" class=" form-control-label">Alumni Description</label>
                                <input type="text" name="alumni_desc" placeholder="Enter Alumni Desc" class="form-control" required value="<?php echo $alumni_desc ?>">
                            </div>
                            <div class="form-group">
                                <label for="alumni_desc" class=" form-control-label">Alumni Category</label>
                                <select type="text" name="alumni_category" class="form-control" required>
                                    <option selected disabled>Select</option>
                                    <option value="Academics & Research">Academics & Research</option>
                                    <option value="Public Governance">Public Governance</option>
                                    <option value="Entrepreneur">CxO's (Entrepreneur)</option>
                                    <option value="Private Sector">Private Sector</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alumni_image" class=" form-control-label">Alumni Image</label>
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