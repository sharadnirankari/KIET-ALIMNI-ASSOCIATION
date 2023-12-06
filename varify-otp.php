<?php include("header.php") ?>


<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>Verify OTP</h1>
        <ul class="breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li>/</li>
            <li>Verify OTP</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
    <div class="min-width">
        <div class="searchContainer">
            <p>OTP sent on registered <b>Mobile No. & Mail ID</b> </p>
            <div class="flashdata">
            </div>
            <form method="post" action="#">
                <div class="fields">
                    <input type="text" name="sotp" id="sotp" placeholder="Enter Valid OTP" onBlur="this.placeholder='Enter Valid OTP'" onFocus="this.placeholder=''" value="">
                </div>

                <div class="fields"><input type="submit" value="Verify" class="btn" id="searchBtn"></div>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>