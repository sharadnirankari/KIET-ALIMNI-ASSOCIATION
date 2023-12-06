<?php include("header.php") ?>
<style>
  .flip-box {
    background-color: transparent;
    width: 300px;
    height: 200px;
    border: 1px solid #f1f1f1;
    perspective: 1000px;
    /* Remove this if you don't want the 3D effect */
  }

  /* This container is needed to position the front and back side */
  .flip-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }

  /* Do an horizontal flip when you move the mouse over the flip box container */
  .flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
  }

  /* Position the front and back side */
  .flip-box-front,
  .flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    /* Safari */
    backface-visibility: hidden;
  }

  /* Style the front side (fallback if image is missing) */
  .flip-box-front {
    background-color: #bbb;
    color: black;
  }

  /* Style the back side */
  .flip-box-back {
    background-color: dodgerblue;
    color: white;
    transform: rotateY(180deg);
  }

  .column {
    float: left;
    width: 33.33%;

  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
</style>

<div class="pageHeader fullwidth">
  <div class="min-width">
    <h1>Chapter Leaders</h1>
    <ul class="breadcrumb">
      <li><a href="index">Home</a></li>
      <li>/</li>
      <li>Chapter Leaders</li>
    </ul>
  </div>
</div>
<br>&nbsp;<br>&nbsp;<br>&nbsp;
<div class="row" style="margin-left:100px;">
  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/263March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>Bengaluru</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">
            Mr. Abhishek Srivastava
            ferrariabhi@gmail.com</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>


  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/264March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>Delhi/NCR</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">

            Mr. Vinod Kumar
            vicepresident.alumni@kiet.edu</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>
  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/265March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>Europe/Australia</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">

            Mr. Shivam Shukla
            president.alumni@kiet.edu</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>

</div>

<br>&nbsp;<br>&nbsp;<br>&nbsp;

<div class="row" style="margin-left:100px;">
  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/266March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>Hyderabad</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">

            Mr. Rohit Singh
            calluprohit@gmail.com</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>


  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/267March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>Pune/Mumbai</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">

            Mr. Vivek Tripathi
            vivektripathi.1983@gmail.com</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>
  <div class="column">
    <!--code for chapters-->
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="uploaded/gallery/268March2023.jpg" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <br>
          <h2>United State</h2><br>
          <p style="font-size:12pt;color:white;font-weight:bold;">

            Mr. Vinay Kureel
            kureelvinay@gmail.com</p>
        </div>
      </div>
    </div>
    <!--end code for chapters-->
  </div>

</div>



<?php include("footer.php") ?>