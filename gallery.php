<?php include("header.php") ?>
<style>
    .row {
        display: flex;
        flex-wrap: wrap;

    }

    /* Create four equal columns */
    .column {
        flex: 25%;
        margin: 1px;
        border-radius: 10px;
        padding: 10px;

    }

    .child {
        display: inline-block;
        vertical-align: middle;
    }

    /* On screens that are 992px wide or less, go from four columns to two columns */
    @media screen and (max-width: 900px) {
        .column {
            flex: 100%;
        }
    }

    @media screen and (max-width: 400px) {
        .row {
            flex-direction: column;
        }
    }
</style>

<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>Gallery</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Gallery</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
    <div class="min-width">
        <div class="galContainer galPageContainer fullwidth">
            <div class="row">

                <?php
                if (isset($_GET['categories'])) {
                    $id = $_GET['categories'];
                    $query = "SELECT * FROM gallery_images WHERE gallery_id='$id'";
                    $fire = mysqli_query($conn, $query);

                    while ($fetch = mysqli_fetch_assoc($fire)) {
                ?>
                        <div class="column">

                            <a href="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $fetch['gallery_images']; ?>" data-magnify="photo" data-caption="Photo">
                                <img src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $fetch['gallery_images']; ?>" style="width:100%">
                            </a>
                        </div>
                    <?php
                    }
                } else {
                    $query = "SELECT * FROM `categories` ORDER BY `id` DESC";
                    $fire = mysqli_query($conn, $query);

                    while ($categoryRow = mysqli_fetch_assoc($fire)) {
                    ?>
                        <h2 style="width:100%;background:red;padding:5px;border-radius:10px; color:white;"><?php echo $categoryRow['categories']; ?></h2><br>
                        <?php
                        $categoryId = $categoryRow['id'];
                        $subCategoryQuery = "SELECT * FROM `sub_categories` WHERE categories_id='$categoryId'";
                        $subCategoryFire = mysqli_query($conn, $subCategoryQuery);

                        while ($subCategoryRow = mysqli_fetch_assoc($subCategoryFire)) {
                        ?>
                            <div class="column">
                                <?php
                                $subCategoryId = $subCategoryRow['id'];
                                $galleryQuery = "SELECT * FROM `gallery` WHERE sub_categories_id='$subCategoryId'";
                                $galleryFire = mysqli_query($conn, $galleryQuery);

                                while ($galleryRow = mysqli_fetch_assoc($galleryFire)) {
                                ?>
                                    <center>
                                        <div class="child">
                                            <h4><?php echo $galleryRow['name']; ?></h4>
                                        </div>
                                    </center>
                                    <a href="gallery.php?categories=<?php echo $galleryRow['id']; ?>">
                                        <div class="child">
                                            <img src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $galleryRow['image']; ?>" height="300px" width="100%" alt="1">
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                <?php
                        }
                    }
                }
                ?>


            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>