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
<?php
$resBanner = mysqli_query($conn, "select * from banner where status='1' order by order_no asc");
if (mysqli_num_rows($resBanner) > 0) { ?>

  <div class="fullwidth banner">

    <div class="slider fullwidth">
      <?php while ($rowBanner = mysqli_fetch_assoc($resBanner)) { ?>

        <li style="background-image:url(<?php echo 'uploaded/banner/' . $rowBanner['image'] ?>)">

          <div class='bannerText'>
            <h2><?php echo $rowBanner['heading1'] ?></h2>

            <h3 style="color:red"><?php echo $rowBanner['heading2'] ?></h3>
          </div>
        </li>

      <?php } ?>

    </div>
  <?php } ?>

  <ol class="pager"></ol>
  <div class="scrollDown" style="background:url(assets/public/images/arrow-down.png) center no-repeat rgba(255,255,255,0.77);background-size: 30px;"></div>
  </div>

  <div class="fullwidth padding" id="overview">
    <div class="min-width">
      <?php $msg = mysqli_query($conn, "select * from massage where msg_status='1'");
      if (mysqli_num_rows($msg) > 0) { ?>

        <div class="conte"> <?php while ($rowMassage = mysqli_fetch_assoc($msg)) { ?>


            <div class="ChancellorMsg">

              <div class="chancellorHead fullwidth">
                <div class="imgBox"><img src="<?php echo 'uploaded/banner/' . $rowMassage['msg_dp'] ?>" alt="massage"></div>
                <h3><?php echo $rowMassage['msg_title'] ?></h3>
              </div>
              <p><?php echo $rowMassage['msg_description'] ?></p>
            </div>
          <?php } ?>
        </div>

      <?php } ?>

      <div class="fullwidth padding">
        <div class="min-width">
          <div class="fullwidth whiteBg">


            <div class="slideshow-container">
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/1.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/2.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: block;"><img src="uploaded/gallery/3.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/4.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/5.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/6.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/7.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/8.jpg" style="width:100%"></div>
              <div class="mySlides fade" style="display: none;"><img src="uploaded/gallery/9.jpg" style="width:100%"></div>


            </div>
          </div>
        </div>
      </div>
      <!-- <div class="hm-newsOuterBox">
        <div class="newsContainer fullwidth">
          <div class="hm-heading">
            <h3>News & <span>Updates</span> <a href="news">View All</a></h3>
          </div>
          <li>Updated Soon</li>
          <ul class="news fullwidth">
            <li><a href="#">
                <div class="dates">
                  26/02/2022</div>
                <p>Alumni Talk With KAA Members</p>
              </a></li>
          </ul>
        </div>
      </div> -->

    </div>
  </div>

  <!-- <div class="min-width midrandom" style="background:url(assets/public/images/collage.jpg) left center #fff;    background-size: contain;">
        <section>
            <h3><span>Search</span> and <span>network</span> with alums across programs and batches</h3>
            <div class="readmore"><a href="sign-in">Login/Signup</a></div>
        </section>
    </div> -->
  <div class="fullwidth padding">
    <div class="min-width">
      <div class="fullwidth whiteBg">
        <div class="hm-heading">
          <h3>Latest <span>Photos</span> <a href="gallery">View All</a></h3>
        </div>
        <div class="gallery fullwidth">

          <?php
          $query = mysqli_query($conn, "select * from gallery LIMIT 4");

          if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
              echo "<div class='galBox'> <a href='gallery.php?categories=" . $row['id'] . "'  data-caption='Photo'> <div class='imgBox'><img src='" . IMAGE . $row['image'] . "'></div> </a></div>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="fullwidth">
    <div class="min-width">
      <div class="hm-galOuterBox">
        <div class="galContainer fullwidth">
          <div class="hm-heading">
            <h3>Latest <span>Photos</span> <a href="gallery">View All</a></h3>
          </div>
          <div class="gallery fullwidth">

            <?php
            $query = mysqli_query($conn, "SELECT * FROM `gallery` ORDER BY `gallery`.`id` ASC LIMIT 4  ");

            if (mysqli_num_rows($query) > 0) {
              while ($row = mysqli_fetch_assoc($query)) {
                echo "<div> <a href='gallery.php?categories=" . $row['id'] . "' > <div class='imgBox'><img src='" . IMAGE . $row['image'] . " width='100px' height='100px''></div> </a></div>";
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div class="careerContainer">
        <div class="hm-heading">
          <h3>Blogs<a href="#">View All</a></h3>
        </div>
        <ul class="jobs fullwidth">
          <li><a href="#"><span>5 days ago</span>
              <p>Regarding Refund of Examination Fee, Session 2018-19</p>
            </a></li>
          <li><a href="#">
              <p>Coming Soon..</p>
            </a></li>
        </ul>
      </div>

    </div>
  </div>  -->

  </div>
  <div class="fullwidth padding">
    <div class="min-width">
      <div class="fullwidth whiteBg">
        <p>More than 20K KIETians spread worldwide and made their Alma Mater proud by achieving great heights of excellence in their respective fields and contribution to the socioeconomic development of the nation and the world at large. Our alumni be as Entrepreneur, Academician at IIT/NSIT/IIM, Civil Services officers as IAS/IFS/IRS/IES, PSUs professionals at IOCL/NTPC/ONGC/BEL/HPCL/SAIL, Scientists at ISRO/BARC or Corporate professionals at Google/Microsoft/Apple/Barclay/Siemens/Capgemini/ CISCO/Mercedes have distinguished themselves globally and made their Alma Mater proud by achieving great heights of excellence in their respective fields and contribution to the socioeconomic development of the nation and the world at large.
        </p><br>
        <p>To capture the indomitable force of the alumni and to strengthen the bond between the alumni and the alma mater, the Alumni Engagement Cell (AEC) has been established by Institution. AEC has been working since 2014; however the formal Association of KIET Group of Institutions, KIET Alumni Association, has been registered on 25th November 2021 under the UP Societies Registration Act, 1860.
        </p><br>
        <p>KAA plans, implements, and promotes the Alumni activities to build the strong relation with Alumni. KIET Alumni Association partners with various committees of the institute as member of IQAC, Departmental Advisory Board, Academic Council, etc. to spearhead the introduction of alumni involvement in the growth and continued leadership of the institute.
        </p>
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
  <div class="button-top"><i class="fa fa-angle-up"></i></div>
  </div>
  </body>


  </html>