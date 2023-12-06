<?php include("header.php") ?>

<style>
.button {
  display: inline-block;
  border-radius: 20px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.column {
  float: left;
  width: 45%;
 
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
        <h1>Highlights</h1>
        <ul class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li>/</li>
            <li>Highlights</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
     <div class="min-width"><center>
        <div class="fullwidth whiteBg" style="min-height:125px;">
           
			  <a href="2023.php">
  <button class="button" style="vertical-align:middle"><span>2023</span></button></a><a href="2022.php">
  <button class="button" style="vertical-align:middle"><span>2022</span></button></a><a href="2020.php">
  <button class="button" style="vertical-align:middle"><span>2020</span></button></a><a href="2019.php">
  <button class="button" style="vertical-align:middle"><span>2019</span></button></a>
        </div></center>
    </div>
</div>







<?php include("footer.php") ?>