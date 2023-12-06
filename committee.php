<?php include("header.php") ?>
<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>Committee Members</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Committee Members</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
    <div class="min-width">
        <div class="fullwidth committeeTable">
            <div class="table fullwidth">
                <table border="1px" width="100%">
                    <thead>
                        <tr>
                            <th>Committee Name</th>
                            <th colspan="">Committee Post</th>
                            <th colspan="">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from committee  where status='1' order by order_no asc";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td><?php echo $row['committee_name'] ?></td>
                                <td><?php echo $row['committee_post'] ?></td>
                                <td><img src="uploaded/banner/<?php echo $row['committee_image'] ?>" style="width: 80px; height: 80px; border-radius: 50%;"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php") ?>