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
        <h1>Mentorship</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Mentorship</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
     <div class="min-width"><center>
        <div class="fullwidth whiteBg" style="min-height:125px;">
           
			  <a href="https://kiet.almaconnect.com/directory/filter/business-management-professionals-203" target="_blank">
  <button class="button" style="vertical-align:middle"><span>Entreprenurs</span></button></a><a href="https://kiet.almaconnect.com/directory/filter/software-engineering-professionals-9
" target="_blank">
  <button class="button" style="vertical-align:middle"><span>IT Expert</span></button></a><a href="https://kiet.almaconnect.com/directory/lists" target="_blank">
  <button class="button" style="vertical-align:middle"><span>Professonal Guidance</span></button></a>
        </div></center>
    </div>
</div>




<div class="row" style="margin-left:130px;">
     <div class="column">
        <div class="fullwidth whiteBg" style="min-height:150px;">
           
			  <h2>Public Governance</h2><br>
			  Mr. Ajay Kumar Yadav<br>
awesamajay@gmail.com 
        </div>
    </div>
	 <div class="column">
        <div class="fullwidth whiteBg" style="min-height:150px;">
           
			 <h2>Higher Studies Abroad</h2><br>
			 Mr. Vinay Kureel<br>
kureelvinay@gmail.com 
        </div>
    </div>
</div>




<?php include("footer.php") ?>