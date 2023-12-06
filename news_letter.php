<?php include("header.php") ?>

<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>KAA NEWS LETTER</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>KAA News Letter</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
    <div class="min-width">
        <div class="fullwidth whiteBg">


            <div id="iframe-container" style="overflow: hidden;">
                <iframe id="myIframe" class="fullwidth" src="https://www.kiet.edu/KIET%20News%20Letters" style="border: 0; width:100%; height:3000px; overflow:hidden;">Your browser doesn't support iFrames.</iframe>
            </div>
            <input type="button" style="display: none;" value="Back in the main frame" onclick="window.parent.main.history.back()">


        </div>
    </div>
</div>







<?php include("footer.php") ?>