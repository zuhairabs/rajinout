<?php
   include "../api.php";
   $pathname = "/content/item/shippingPolicy?populate=2";
   $data = fetchData($pathname);
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include "../partials/meta.php"; ?>
      <?php include "../partials/product/head-styles.html"; ?>
   </head>
   <body class="post-template-default single single-post postid-3244 single-format-standard custom-background et-tb-has-template et-tb-has-header et-tb-has-body et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter osx et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_divi_theme et-db loftloader-lite-enabled modula-best-grid-gallery">
      <?php include "../partials/loader.html"; ?>
      <div id="page-container">
      <div id="et-boc" class="et-boc">
      <?php include "../partials/header.php"; ?>
      <div id="et-main-area">
         <div id="main-content">
            <div class="et-l et-l--body">
               <div class="et_builder_inner_content et_pb_gutters3">
                  <div id="produto" class="et_pb_section et_pb_section_0_tb_body et_pb_with_background et_section_regular" >
                     <div style="display: block;" class="et_pb_row et_pb_row_0_tb_body">
                        <div style="width: 100%; display: flex; align-items: center; justify-content: center;" class="et_pb_column et_pb_column_1_2 et_pb_column_0_tb_body descricao  et_pb_css_mix_blend_mode_passthrough">
                           <div class="et_pb_module et_pb_post_title et_pb_post_title_0_tb_body et_pb_bg_layout_light  et_pb_text_align_left"   >
                              <div class="et_pb_title_container">
                                 <h1 class="entry-title"><?php echo $data["title"]; ?></h1>
                              </div>
                           </div>
                           <div class="et_pb_module et_pb_code et_pb_code_0_tb_body">
                              <div class="et_pb_code_inner"></div>
                           </div>
                        </div>
                        <div id="ingredientes-tabela" class="et_pb_module et_pb_code et_pb_code_1_tb_body">
                           <div class="et_pb_code_inner">
                              <div class="ingredientes-botao">
                                 <div style="width: 100%" class="ingredientes">
                                    <div style="border: none" class="wrapper">
                                        <?php echo $data["description"]; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php include "../partials/footer.php"; ?>
            </div>
         </div>
      </div>
      <script defer type="text/javascript" src="../wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js" id="siteground-optimizer-lazy-sizes-js-js"></script> <script type="text/javascript" id="divi-custom-script-js-extra"> /* <![CDATA[ */
         var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
         var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"};
         var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
         var et_pb_custom = {"ajaxurl":"https:\/\/smoovco.com\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"ff19cbd9cf","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"cdbb9bab29","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"3244","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":"","tinymce_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/frontend-builder\/assets\/vendors","accent_color":"#e2dd00","waypoints_options":[]};
         var et_pb_box_shadow_elements = [];
         /* ]]> */ 
      </script>
      <script defer src="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-js-e5307e5b54991962bb7d65c669a1b633.js"></script>
      <?php include "../partials/home/scripts.html"; ?>
   </body>
</html>