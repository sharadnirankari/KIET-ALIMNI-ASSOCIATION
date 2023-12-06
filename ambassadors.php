<?php include("header.php") ?>

<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>KAA Team Members</h1>
        <ul class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li>/</li>
            <li>KAA Team Members</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
    <div class="min-width">
        <div class="fullwidth whiteBg">


            <table id="shatabledata">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name of Alumni</th>
                        <th>Branch</th>
                        <th>Passing Out Year</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `ambassadors` ORDER BY `ambassadors`.`orderno` ASC";
                    $fire = mysqli_query($conn, $query);
                    $i = 1;

                    while ($row = mysqli_fetch_assoc($fire)) {


                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['branch'] ?></td>
                            <td><?php echo $row['passout'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <?php $i++ ?>

                    <?php } ?>
            </table>

        </div>
    </div>
</div>


<?php include("footer.php") ?>