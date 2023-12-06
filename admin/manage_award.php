<?php
require('top.inc.php');
isAdmin();
$name = '';
$branch = '';
$passout = '';
$email = '';
$course = '';
$achievement = '';
$affiliation = '';
$msg = '';
$orderno = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);

    $res = mysqli_query($con, "select * from award where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $branch = $row['branch'];
        $passout = $row['passout'];
        $course = $row['course'];
        $orderno = $row['orderno'];
        $achievement = $row['achievement'];
        $affiliation = $row['affiliation'];
        $awardyear = $row['awardyear'];
    } else {
        header('location:award');
        die();
    }
}

if (isset($_POST['submit'])) {
    $name = get_safe_value($con, $_POST['name']);
    $branch = get_safe_value($con, $_POST['branch']);
    $passout = get_safe_value($con, $_POST['passout']);
    $course = get_safe_value($con, $_POST['course']);
    $orderno = get_safe_value($con, $_POST['orderno']);
    $achievement = get_safe_value($con, $_POST['achievement']);
    $affiliation = get_safe_value($con, $_POST['affiliation']);
    $awardyear = get_safe_value($con, $_POST['awardyear']);

    if (isset($_GET['id']) && $_GET['id'] != '') {
        mysqli_query($con, "update award set name='$name',branch='$branch',passout='$passout',course='$course',orderno='$orderno' where id='$id'");
    } else {
        mysqli_query($con, "insert into award(name, achievement, course, branch, passout, affiliation, awardyear, orderno) values('$name','$achievement','$course',$branch','$passout','$affiliation','$awardyear','$orderno')");
    }
    header('Location:award');
    die();
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>award</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Name</label>
                                <input type="text" name="name" placeholder="Enter Title" class="form-control" required value="<?php echo $name ?>">
                            </div>
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Achievement</label>
                                <input type="text" name="achievement" placeholder="Enter Title" class="form-control" required value="<?php echo $achievement ?>">
                            </div>
                            <div class="form-group ">
                                <label for="heading1" class=" form-control-label">Course</label>
                                <input type="text" name="course" placeholder="Enter Description" class="form-control" required value="<?php echo $course ?>">
                                <label for="heading1" class=" form-control-label">Branch</label>
                                <input type="text" name="branch" placeholder="Enter Description" class="form-control" required value="<?php echo $branch ?>">

                            </div>
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Passout</label>
                                <input type="number" name="passout" placeholder="Enter Description" class="form-control" required value="<?php echo $passout ?>">
                            </div>
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Affiliation</label>
                                <input type="text" name="email" placeholder="Enter Description" class="form-control" required value="<?php echo $affiliation ?>">
                            </div>
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Award Year</label>
                                <input type="number" name="year" placeholder="Enter Description" class="form-control" required value="<?php echo $awardyear ?>">
                            </div>
                            <div class="form-group">
                                <label for="heading1" class=" form-control-label">Position</label>
                                <input type="number" name="orderno" placeholder="Enter Position" class="form-control" required value="<?php echo $orderno ?>">
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