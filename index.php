<?php
include "api.php";
$pathname = "/content/item/home?populate=2";
$data = fetchData($pathname);
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include 'partials/meta.php';?>
      <?php include 'partials/home/head-styles.html';?>
   </head>
   <body class="home page-template-default page page-id-3170 custom-background et-tb-has-template et-tb-has-header et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db loftloader-lite-enabled modula-best-grid-gallery">
      <?php include "partials/loader.html"; ?>
      <div id="page-container">
         <div id="et-boc" class="et-boc">
            <?php include "partials/header.php"; ?>
            <div id="et-main-area">
               <div id="main-content">
                  <article id="post-3170" class="post-3170 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div class="et-l et-l--post">
                           <div class="et_builder_inner_content et_pb_gutters3">
                              <?php include "partials/home/hero.php"; ?>
                              <?php include "partials/home/about.php"; ?>
                              <?php include "partials/home/categories.php"; ?>
                              <?php include "partials/home/featured.php"; ?>
                              <?php include "partials/home/enquiry.php"; ?>
                              <?php include "partials/contact.php"; ?>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <?php include "partials/footer.php"; ?>
            </div>
         </div>
      </div>
      <?php include "partials/home/scripts.html"; ?>
   </body>
</html>