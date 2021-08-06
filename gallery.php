        
        <?php require"header.php" ?>


        <!-- page-title -->
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Our Gallery</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span>Our Gallery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

<?php 
$path='images/gallery/';
$images_g=array_reverse(glob($path.'*.{jpg,jpeg,png,gif,JPG,JPEG,bmp,BMP}',GLOB_BRACE));
?>
    <!--site-main start-->
    <div class="site-main">


            <!--grid-section-->
            <div class="ttm-row grid-section clearfix">
                <div class="container">
                    <div class="row ttm-boxes-spacing-10px">
    <?php

        foreach($images_g as $imagesg){
           
?>  
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="<?php echo $imagesg; ?>" alt="image">
                                    </div>
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" data-rel="prettyPhoto" href="<?php echo $imagesg; ?>">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="silk-fabric.html">Sehmi Engineering Works</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
       
        }
?>  
                        
                        
                        
                        
                        
                    </div><!-- row end -->
                </div>
            </div>
            <!--grid-section end-->


    </div><!--site-main end-->

            <?php require"footer.php" ?>
             <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script> 
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>


       