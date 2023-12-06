<?php include("header.php") ?>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  .mySlides2 {
    display: none;
  }

  .mySlides3 {
    display: none;
  }

  .mySlides4 {
    display: none;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    justify-content: center;

  }

  /* Create four equal columns */
  .column {
    flex: 25%;
    max-width: 250px;
    margin: 1px;

    border-radius: 10px;
    padding: 20px;
  }

  .child {
    display: inline-block;
    vertical-align: middle;
  }

  /* On screens that are 992px wide or less, go from four columns to two columns */
  @media screen and (max-width: 992px) {
    .column {
      flex: 50%;
    }
  }

  /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .row {
      text-align: center;
    }
  }
</style>

<div class="pageHeader fullwidth">
  <div class="min-width">
    <h1>KAA Team Members</h1>
    <ul class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>/</li>
      <li>KAA Team Members</li>
    </ul>
  </div>
</div>
<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">

      <h2>Executive Members</h2><br>
      <div class="row">
        <?php
        $query = "SELECT * FROM committee  where member='Executive Member' ORDER BY `committee`.`order_no` ASC";
        $fire = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($fire)) {
        ?>
          <div class="column" style="border: 1px solid lightblue;">
            <div class="child">
              <img src="<?php echo BANNER_SITE_PATH . $row['committee_image'] ?>" width="150px" height="150px" alt="1" style="">
            </div>

            <div class="child">
              <br>
              <h4><?php echo $row['committee_name'] ?></h4>
              <p><?php echo $row['committee_desc'] ?></p>
            </div>
          </div>
        <?php }
        if (mysqli_num_rows($fire) == 0) {
          echo 'No Record Found';
        } ?>

      </div>
    </div>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">
      <h2>Board Members</h2><br>
      <div class="row">
        <?php
        $query = "SELECT * FROM committee where member='Board Member' ORDER BY `committee`.`order_no` ASC";
        $fire = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($fire)) {

        ?>
          <div class="column" style="border: 1px solid lightblue;">
            <div class="child">
              <img src="<?php echo BANNER_SITE_PATH . $row['committee_image'] ?>" width="150px" height="150px" alt="1" style="">
            </div>

            <div class="child">
              <br>
              <h4><?php echo $row['committee_name'] ?></h4>
              <p><?php echo $row['committee_desc'] ?></p>
            </div>
          </div>
        <?php }

        if (mysqli_num_rows($fire) == 0) {
          echo 'No Record Found';
        } ?>

      </div>
    </div>
  </div>
</div>




<script>
  let slideIndex = 0;
  let slideIndex2 = 0;
  let slideIndex3 = 0;
  let slideIndex4 = 0;
  showSlides();
  showSlides2();
  showSlides3();
  showSlides4();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }

  function showSlides2() {
    let i;
    let slides = document.getElementsByClassName("mySlides2");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex2++;
    if (slideIndex2 > slides.length) {
      slideIndex2 = 1
    }

    slides[slideIndex2 - 1].style.display = "block";

    setTimeout(showSlides2, 2000); // Change image every 2 seconds
  }

  function showSlides3() {
    let i;
    let slides = document.getElementsByClassName("mySlides3");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex3++;
    if (slideIndex3 > slides.length) {
      slideIndex3 = 1
    }

    slides[slideIndex3 - 1].style.display = "block";

    setTimeout(showSlides3, 2000); // Change image every 2 seconds
  }


  function showSlides4() {
    let i;
    let slides = document.getElementsByClassName("mySlides4");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex4++;
    if (slideIndex4 > slides.length) {
      slideIndex4 = 1
    }

    slides[slideIndex4 - 1].style.display = "block";

    setTimeout(showSlides4, 2000); // Change image every 2 seconds
  }
</script>
<?php include("footer.php") ?>