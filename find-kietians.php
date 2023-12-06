<?php include("header.php") ?>

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



      <embed src="https://google.com" width="400" height="400" />
      <div id="iframe-container" style="overflow: hidden;">
        <iframe id="myIframe" class="fullwidth" onload="adjustIframeHeight()" src="https://kiet.almaconnect.com/alumni?frm=main_menu" style="border: 0; width:100%; height:3000px; overflow:hidden;">Your browser doesn't support iFrames.</iframe>
      </div>
      <input type="button" style="display: none;" value="Back in the main frame" onclick="window.parent.main.history.back()">


    </div>
  </div>
</div>







<script>
  function adjustIframeHeight() {
    const iframe = document.getElementById('myIframe');
    const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

    // Get the height of the content within the iframe
    const contentHeight = iframeDocument.body.scrollHeight;

    // Set the iframe's height to match the content height
    iframe.style.height = contentHeight + 'px';
  }
</script>

<?php include("footer.php") ?>