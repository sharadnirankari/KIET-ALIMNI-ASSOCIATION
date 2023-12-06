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
</style>


<div class="pageHeader fullwidth">
  <div class="min-width">
    <h1>Distinguished Alumnus Award</h1>
    <ul class="breadcrumb">
      <li><a href="index">Home</a></li>
      <li>/</li>
      <li>Distinguished Alumnus Awards
      </li>
    </ul>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">
    <div class="fullwidth whiteBg">


      <div class="slideshow-container">
        <div class="mySlides fade"><img src="uploaded/gallery/awards (1).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (2).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (3).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (4).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (5).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (6).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (7).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (8).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (9).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (10).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (11).jpg" style="width:100%"></div>
        <div class="mySlides fade"><img src="uploaded/gallery/awards (12).jpg" style="width:100%"></div>

      </div>
    </div>
  </div>
</div>


<div class="fullwidth padding">
  <div class="min-width">

    <div class="fullwidth whiteBg">
      <h2>Distinguished Alumnus Award-2022</h2><br>
      <table id="shatabledata">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Alumni Full Name</th>
            <th>Achievement Area</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Year of Passing</th>
            <th>Affiliation</th>
          </tr>
        </thead>


        <?php
        $query = "SELECT * FROM `award` WHERE awardyear=2022";
        $fire = mysqli_query($conn, $query);
        $i = 1;

        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['achievement'] ?></td>
            <td><?php echo $row['course'] ?></td>
            <td><?php echo $row['branch'] ?></td>
            <td><?php echo $row['passout'] ?></td>
            <td><?php echo $row['affiliation'] ?></td>
          </tr>


        <?php } ?>
      </table>
    </div>
  </div>
</div>



<div class="fullwidth padding" style="margin-top:-80px;">
  <div class="min-width">

    <div class="fullwidth whiteBg">
      <h2>Distinguished Alumnus Award-2021</h2><br>
      <table id="shatabledata">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Alumni Full Name</th>
            <th>Achievement Area</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Year of Passing</th>
            <th>Affiliation</th>
          </tr>
        </thead>

        <?php
        $query = "SELECT * FROM `award` WHERE awardyear=2021";
        $fire = mysqli_query($conn, $query);
        $i = 1;

        while ($row = mysqli_fetch_assoc($fire)) {


        ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['achievement'] ?></td>
            <td><?php echo $row['course'] ?></td>
            <td><?php echo $row['branch'] ?></td>
            <td><?php echo $row['passout'] ?></td>
            <td><?php echo $row['affiliation'] ?></td>
          </tr>


        <?php } ?>


      </table>
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