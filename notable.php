<?php include("header.php") ?>

<style>
  .row {
    display: flex;
    flex-wrap: wrap;

  }

  .column {
    flex: 20%;
    margin: 1px;
    border-radius: 10px;
    padding: 10px;
    max-width: 250px;

  }

  .child {
    display: inline-block;
    vertical-align: middle;
  }

  @media screen and (max-width: 800px) {
    .column {
      flex: 25%;
    }
  }

  @media screen and (max-width: 600px) {
    .column {
      flex: 40%;
    }
  }

  @media screen and (max-width: 400px) {
    .row {
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }
  }
</style>

<div class="pageHeader fullwidth">
  <div class="min-width">
    <h1>Notable Alumni</h1>
    <ul class="breadcrumb">
      <li><a href="index">Home</a></li>
      <li>/</li>
      <li>Notable Alumni</li>
    </ul>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">

      <h2>Academics & Research</h2><br>

      <div class="row">
        <?php
        $query = "SELECT * FROM notable WHERE alumni_category='Academics & Research'";
        $fire = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <div class="column">
            <div class="child">
              <img src="<?php echo BANNER_SITE_PATH . $row['alumni_image'] ?>" height="300px" width="200px" alt="1">
            </div>
            <br />
            <div class="child">
              <br>
              <h4><?php echo $row['alumni_name'] ?></h4>
              <p><?php echo $row['alumni_branch'] ?></p>
              <p><?php echo $row['alumni_desc'] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>

    </div>
  </div>
</div>

<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">

      <h2>Public Governance</h2><br>
      <div class="row">
        <?php
        $query = "SELECT * FROM notable WHERE alumni_category='Public Governance' ";
        $fire = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <div class="column">
            <div class="child">
              <img src="<?php echo BANNER_SITE_PATH . $row['alumni_image'] ?>" height="300px" width="200px" alt="1">
            </div>

            <div class="child">
              <br>
              <h4><?php echo $row['alumni_name'] ?></h4>
              <p><?php echo $row['alumni_branch'] ?></p>
              <p><?php echo $row['alumni_desc'] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">

      <h2>CxO's (Entrepreneur)</h2><br>
      <div class="row">
        <?php
        $query = "SELECT * FROM `notable` WHERE alumni_category='Entrepreneur'";
        $fire = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <div class="column">
            <div class="child" style="width: 100%; ">
              <img src="<?php echo BANNER_SITE_PATH . $row['alumni_image'] ?>" height="300px" width="200px" alt="1">
            </div>

            <div class="child">
              <br>
              <h4><?php echo $row['alumni_name'] ?></h4>
              <p><?php echo $row['alumni_branch'] ?></p>
              <p><?php echo $row['alumni_desc'] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">

      <h2>Private Sector</h2><br>
      <div class="row">
        <?php
        $query = "SELECT * FROM notable WHERE alumni_category='Private Sector'";
        $fire = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <div class="column">
            <div class="child">
              <img src="<?php echo BANNER_SITE_PATH . $row['alumni_image'] ?>" height="300px" width="200px" alt="1">
            </div>

            <div class="child">
              <br>
              <h4><?php echo $row['alumni_name'] ?></h4>
              <p><?php echo $row['alumni_branch'] ?></p>
              <p><?php echo $row['alumni_desc'] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>



<?php include("footer.php") ?>