<?php
include "../api.php";
$pathname = "/content/item/home?populate=2";
$data = fetchData($pathname);

$currentUrl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($currentUrl, PHP_URL_PATH);
$lastPathname = basename($path);
$productUrl = "/content/item/products?filter[slug]=" . $lastPathname;
$product = fetchData($productUrl);

// Update SEO title with product name
if (isset($product["name"]) && !empty($product["name"])) {
   $data["seo"]["title"] = $product["name"] . ' | ' . $data["seo"]["title"];
}

// Update SEO description with first 130 characters of product description
if (isset($product["description"]) && !empty($product["description"])) {
   // Remove HTML tags
   $cleanDescription = strip_tags($product["description"]);
   // Convert HTML entities to their corresponding characters
   $cleanDescription = html_entity_decode($cleanDescription);
   // Remove extra whitespace
   $cleanDescription = preg_replace('/\s+/', ' ', $cleanDescription);
   $cleanDescription = trim($cleanDescription);
   
   // Truncate to 130 characters
   $data["seo"]["description"] = substr($cleanDescription, 0, 130);
   // Add ellipsis if description was truncated
   if (strlen($cleanDescription) > 130) {
       $data["seo"]["description"] .= "...";
   }
}

$relatedUrl = "/content/item/categories?filter[_id]=" . $product["category"]["_id"] . "&populate=1";
$relatedProducts = fetchData($relatedUrl);
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
                           <div class="et_pb_row et_pb_row_0_tb_body">
                              <div class="et_pb_column et_pb_column_1_2 et_pb_column_0_tb_body descricao  et_pb_css_mix_blend_mode_passthrough">
                                 <div class="et_pb_module et_pb_post_title et_pb_post_title_0_tb_body et_pb_bg_layout_light  et_pb_text_align_left"   >
                                    <div class="et_pb_title_container">
                                       <h1 class="entry-title"><?php echo $product["name"]; ?></h1>
                                    </div>
                                 </div>
                                 <div id="produto-tags" class="et_pb_module et_pb_text et_pb_text_1_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
                                    <div class="et_pb_text_inner">
                                       <?php foreach ($product["gram"] as $key => $gram): ?>
                                        <div class="tag gluten-free">
                                            <span><?php echo $gram; ?></span>
                                            <p><?php echo $gram; ?> Gram</p>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <div class="et_pb_module et_pb_code et_pb_code_0_tb_body">
                                    <div class="et_pb_code_inner"></div>
                                 </div>
                                 <div id="ingredientes-tabela" class="et_pb_module et_pb_code et_pb_code_1_tb_body">
                                    <div class="et_pb_code_inner">
                                       <div class="ingredientes-botao">
                                          <div <?php echo empty($product["usedFor"]) ? "style='width: 100%'" : ''; ?> class="ingredientes">
                                             <div <?php echo empty($product["usedFor"]) ? "style='border: none'" : ''; ?> class="wrapper">
                                                <h3>Description</h3>
                                                <p><?php echo $product["description"]; ?></p>
                                                <div class="et_pb_module et_pb_text et_pb_text_3_tb_body et_clickable et_pb_section_video_on_hover et_pb_section_parallax_hover  et_pb_text_align_left et_pb_text_align_center-phone et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">
                                                      <a style="color: white;" href="/shipping-policy">
                                                         <p>Shipping Policy</p>
                                                      </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($product["usedFor"])): ?>
                                        <div class="botao">
                                            <div class="best-used-for">
                                                <?php $usedFor = explode(", ", $product["usedFor"]); ?>
                                                <h3>Best used for</h3>
                                                <?php foreach ($usedFor as $key => $use): ?>
                                                <p><?php echo ucwords($use); ?></p>
                                                <?php endforeach; ?>
                                            </div>
                                          </div>
                                          <?php endif; ?>
                                       </div>
                                    </div>
                                 </div>
                                </div>
                              <div class="et_pb_column et_pb_column_1_2 et_pb_column_1_tb_body imagem  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                 <div class="et_pb_module et_pb_post_title et_pb_post_title_1_tb_body et_pb_bg_layout_light  et_pb_text_align_left"   >
                                    <div class="et_pb_title_container"></div>
                                    <div class="et_pb_title_featured_container"><span class="et_pb_image_wrap"><img fetchpriority="high" decoding="async" width="730" height="894" src="https://cms.rajinout.co.in/storage/uploads<?php echo $product["image"]["path"]; ?>" alt="" title="<?php echo $product["name"]; ?>" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 730px, 100vw" class="wp-image-3072" /></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="et_pb_row et_pb_row_0_tb_body">
                               <div class="slider-main-container et_pb_module et_pb_code et_pb_code_1_tb_body">
                                       <div class="et_pb_code_inner">
                                       <div class="slider-wrapper ingredientes-botao">
                                           <div class="slider-wrapper ingredientes">
                                           <?php if (isset($product["procedure"]) && is_array($product["procedure"]) && count($product["procedure"]) > 0) {
                                                echo '<h3>Procedure</h3>';
                                             } ?>
                                               <div class="slider-items-wrapper">
                                                   <?php foreach ($product["procedure"] as $key => $process): ?>
                                                   <div class="slider-item">
                                                       <div class="slider-title-wrapper">
                                                            <h4>Step</h4>
                                                            <span><?php echo ((int)$key) + 1; ?></span>
                                                        </div>
                                                       <p><?php echo $process; ?></p>
                                                   </div>
                                                   <?php endforeach; ?>
                                               </div>
                                           </div>
                                       </div>
                                       </div>
                                   </div>
                                </div>
                           </div>
                        <div class="et_pb_section et_pb_section_1_tb_body produtos ativo single et_pb_with_background et_section_regular" >
                           <div class="et_pb_row et_pb_row_1_tb_body">
                              <div class="et_pb_column et_pb_column_4_4 et_pb_column_2_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                 <div class="et_pb_with_border et_pb_module brbl_post_grid brbl_post_grid_0_tb_body produtos-list">
                                    <div class="et_pb_module_inner">
                                       <div class="brbl-module brbl-post-grid equal-height-on " data-options="{&quot;layout&quot;:&quot;layout1&quot;,&quot;blog_order&quot;:0,&quot;pagination_type&quot;:&quot;&quot;,&quot;loadmore_type&quot;:&quot;scroll&quot;}" >
                                          <div id="brbl-blog-wrapper" class="brbl-blog brbl-blog-scroll-0">
                                             <?php foreach ($relatedProducts["products"] as $key => $relatedProd): ?>
                                                <?php if ($relatedProd["slug"] !== $lastPathname): ?>
                                             <div class="brbl-blog-item  brbl-blog-item-layout1-0">
                                                <article class="brbl-post-card brbl-post-card-1">
                                                   <figure class="brbl-post-thumb">
                                                      <a href="../product/<?php echo $relatedProd["slug"]; ?>">
                                                         <div class="brbl-overlay" data-icon=""></div>
                                                         <img width="730" height="894" src="https://cms.rajinout.co.in/storage/uploads<?php echo $relatedProd["image"]["path"]; ?>" class="attachment-full size-full wp-post-image" alt="" decoding="async" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 730px, 100vw" /> 
                                                      </a>
                                                   </figure>
                                                   <div class="brbl-blog-content">
                                                      <h4 class="brbl-post-title"> <a href="../product/<?php echo $relatedProd["slug"]; ?>"><?php echo $relatedProd["name"]; ?></a></h4>
                                                      <div class="brbl-post-btn-wrap brbl-flex-base"> <a href="../product/<?php echo $relatedProd["slug"]; ?>" target="_self" class="et_pb_button brbl-post-btn" data-icon="&#x24;"> Details </a></div>
                                                   </div>
                                                </article>
                                             </div>
                                             <?php endif; ?>
                                             <?php endforeach; ?>
                                          </div>
                                          <nav class="brbl-pagination" role="navigation" aria-label="Pagination"></nav>
                                       </div>
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