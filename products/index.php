<?php
include "../api.php";
$pathname = "/content/item/productPage?populate=2";
$data = fetchData($pathname);
$categoryPathname = "/content/items/categories?populate=1";
$categories = fetchData($categoryPathname);
?>

<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
    <?php include '../partials/meta.php';?>
    <?php include '../partials/products/head-styles.html';?>
   </head>
   <body class="page-template-default page page-id-3180 custom-background et-tb-has-template et-tb-has-header et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter osx et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db loftloader-lite-enabled modula-best-grid-gallery">
        <?php include "../partials/loader.html"; ?>
      <div id="page-container">
         <div id="et-boc" class="et-boc">
            <?php include "../partials/header.php"; ?>
            <div id="et-main-area">
               <div id="main-content">
                  <article id="post-3180" class="post-3180 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div class="et-l et-l--post">
                           <div class="et_builder_inner_content et_pb_gutters3">
                              <div id="linhas" class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular" >
                                 <div style="margin-top: 100px;" class="et_pb_row et_pb_row_0">
                                    <?php foreach ($categories as $key => $category): ?>
                                    <div class="et_pb_column et_pb_column_1_3 et_pb_column_1 smoothies-frutados card category-<?php echo $key; ?> <?php echo ($key === 0) ? 'ativo' : ''; ?> et_pb_css_mix_blend_mode_passthrough">
                                       <div class="et_pb_module et_pb_text et_pb_text_2 header  et_pb_text_align_left et_pb_text_align_center-tablet et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <h3><?php echo $category["name"]; ?></h3>
                                          </div>
                                       </div>
                                       <div class="et_pb_module et_pb_text et_pb_text_3 et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <p><img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-3.png" alt="Strawberry" class=" fruta morango3 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-2.png" alt="Strawberry" class=" fruta morango2 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-1.png" alt="Strawberry" class=" fruta morango1 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-3.png" alt="Blueberry" class=" fruta mirtilo3 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-2.png" alt="Blueberry" class=" fruta mirtilo2 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-1.png" alt="Blueberry" class=" fruta mirtilo1 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-maracuja.png" alt="Passion fruit" class=" fruta maracuja lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-manga.png" alt="Mango" class=" fruta manga lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-banana-2.png" alt="Banana" class=" fruta banana2 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-banana-1.png" alt="Banana" class=" fruta banana1 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-amora-1.png" alt="Blackberry" class=" fruta amora1 lazyload">
                                             <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-amora-2.png" alt="Blackberry" class=" fruta amora2 lazyload">
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <?php endforeach; ?>
                                 </div>
                              </div>
                              <?php foreach ($categories as $key => $category): ?>
                              <div id="product-<?php echo $key; ?>" class="et_pb_section et_pb_section_1 produtos <?php echo ($key === 0) ? 'ativo' : ''; ?> et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row et_pb_row_1">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_center et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <p><?php echo $data["description"]; ?></p>
                                          </div>
                                       </div>
                                       <div class="et_pb_with_border et_pb_module brbl_post_grid brbl_post_grid_0 produtos-list">
                                          <div class="et_pb_module_inner">
                                             <div class="brbl-module brbl-post-grid equal-height-on " data-options="{&quot;layout&quot;:&quot;layout1&quot;,&quot;blog_order&quot;:0,&quot;pagination_type&quot;:&quot;&quot;,&quot;loadmore_type&quot;:&quot;scroll&quot;}" >
                                                <div id="brbl-blog-wrapper" class="brbl-blog brbl-blog-scroll-0">
                                                   <?php foreach ($category["products"] as $key => $product): ?>
                                                   <div class="brbl-blog-item  brbl-blog-item-layout1-0">
                                                      <article class="brbl-post-card brbl-post-card-1">
                                                         <figure class="brbl-post-thumb">
                                                            <a href="../product/<?php echo $product["slug"]; ?>">
                                                               <div class="brbl-overlay" data-icon=""></div>
                                                               <img fetchpriority="high" decoding="async" width="730" height="971" src="https://cms.rajinout.co.in/storage/uploads<?php echo $product["image"]["path"]; ?>" class="attachment-full size-full wp-post-image" alt="product image" /> 
                                                            </a>
                                                         </figure>
                                                         <div class="brbl-blog-content">
                                                            <h4 class="brbl-post-title"> <a href="../product/<?php echo $product["slug"]; ?>">
                                                               <?php echo $product["name"]; ?></a></h4>
                                                            <div class="brbl-post-btn-wrap brbl-flex-base"> <a href="../product/<?php echo $product["slug"]; ?>" target="_self" class="et_pb_button brbl-post-btn" data-icon="&#x24;"> Details </a></div>
                                                         </div>
                                                      </article>
                                                   </div>
                                                   <?php endforeach; ?>
                                                </div>
                                                <nav class="brbl-pagination" role="navigation" aria-label="Pagination"></nav>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php endforeach; ?>
                              <div class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row et_pb_row_4">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_code et_pb_code_0">
                                          <div class="et_pb_code_inner"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <?php include "../partials/footer.php"; ?>
            </div>
         </div>
      </div>
      <script defer type="text/javascript" src="../wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js" id="siteground-optimizer-lazy-sizes-js-js"></script> <script type="text/javascript" id="divi-custom-script-js-extra"> /* <![CDATA[ */
         var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
         var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"};
         var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
         var et_pb_custom = {"ajaxurl":"https:\/\/smoovco.com\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"98f06c2fa0","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"8c253219de","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"3180","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":"","tinymce_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/frontend-builder\/assets\/vendors","accent_color":"#e2dd00","waypoints_options":[]};
         var et_pb_box_shadow_elements = [];
         /* ]]> */ 
      </script> 
      <script defer src="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-js-52c424a60ecdbd617aceefe005d0b87e.js"></script>
      <?php include "../partials/home/scripts.html"; ?>
   </body>
</html>