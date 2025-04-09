<?php
   include "../api.php";
   $pathname = "/content/item/about?populate=2";
   $data = fetchData($pathname);
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include '../partials/meta.php';?>
      <?php include '../partials/about/head-styles.html';?>
   </head>
   <body class="page-template-default page page-id-3206 custom-background et-tb-has-template et-tb-has-header et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db loftloader-lite-enabled modula-best-grid-gallery">
      <?php include "../partials/loader.html"; ?>
      <div id="page-container">
         <div id="et-boc" class="et-boc">
            <?php include "../partials/header.php"; ?>
            <div id="et-main-area">
               <div id="main-content">
                  <article id="post-3206" class="post-3206 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div class="et-l et-l--post">
                           <div class="et_builder_inner_content et_pb_gutters3">
                              <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row et_pb_row_0">
                                    <div class="et_pb_column et_pb_column_2_5 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
                                       <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <h1><?php echo $data["title"]; ?></h1>
                                          </div>
                                       </div>
                                       <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <p><?php echo $data["description"]; ?></p>
                                             <p><strong><?php echo $data["boldDescription"]; ?></strong></p>
                                          </div>
                                       </div>
                                       <div class="hashTag et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <h3><?php echo $data["hashTag"]; ?></h3>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="about-image-banner et_pb_column et_pb_column_3_5 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty"></div>
                                 </div>
                              </div>
                              <div id="numeros" class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row et_pb_row_1">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <h2><?php echo $data["sideText"]; ?></h2>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_2 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_1_2 et_pb_column_3 et_pb_section_video et_pb_preload  et_pb_css_mix_blend_mode_passthrough et_pb_column_empty">
                                       <span class="et_pb_section_video_bg  ">
                                          <video loop="loop" autoplay playsinline muted >
                                             <source type="video/mp4" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["video1"]["path"]; ?>" />
                                          </video>
                                       </span>
                                    </div>
                                    <div class="et_pb_column et_pb_column_1_2 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_0 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-smoothie.svg" alt="Ícone Smoothie" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1591" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <?php echo $data["aboutPara1"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_1 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-natural.svg" alt="Ícone Natural" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1593" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <?php echo $data["aboutPara2"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_3 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_2 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-crescimento.svg" alt="Ícone Crescimento" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1585" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <?php echo $data["aboutPara3"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_4 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_1_3 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_3 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_light et_pb_blurb_position_left_tablet et_pb_blurb_position_left_phone">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-saudavel.svg" alt="Ícone Alimentação Saudável" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1590" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <?php echo $data["aboutPara4"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="et_pb_column et_pb_column_2_3 et_pb_column_7 et_pb_section_video et_pb_preload  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
                                       <span class="et_pb_section_video_bg  ">
                                          <video loop="loop" autoplay playsinline muted >
                                             <source type="video/mp4" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["video2"]["path"]; ?>" />
                                          </video>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_5 et_pb_equal_columns">
                                    <div style="background-image: url(https://cms.rajinout.co.in/storage/uploads<?php echo $data["image1"]["path"]; ?>)" class="et_pb_column et_pb_column_4_4 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty"></div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_6 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_4 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-dinheiro.svg" alt="Ícone Dinheiro" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1586" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <p><strong><?php echo $data["serviceTitle"]; ?></strong></p>
                                                   <?php echo $data["serviceDescription"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_7 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_2_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_5 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-faturamento.svg" alt="Ícone Faturamento" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1587" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <p?><strong><?php echo $data["exportValuesTitle"]; ?></strong></p>
                                                   <?php echo $data["exportValuesDescription"]; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="et_pb_column et_pb_column_1_3 et_pb_column_11 et_pb_section_video et_pb_preload  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
                                       <span class="et_pb_section_video_bg  ">
                                          <video loop="loop" autoplay playsinline muted >
                                             <source type="video/mp4" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["video3"]["path"]; ?>" />
                                          </video>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_5 et_pb_equal_columns">
                                    <div style="background-image: url(https://cms.rajinout.co.in/storage/uploads<?php echo $data["image2"]["path"]; ?>)" class="et_pb_column et_pb_column_4_4 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty"></div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_6 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_4 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-dinheiro.svg" alt="Ícone Dinheiro" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1586" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <p><strong><?php echo $data["visionTitle"]; ?></strong></p>
                                                   <ul style="padding-bottom: 0;">
                                                      <?php foreach ($data["visionList"] as $item): ?>
                                                      <li style="margin-top: 1rem; margin-bottom: 10px"><?php echo $item; ?></li>
                                                      <?php endforeach; ?>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="et_pb_row et_pb_row_7 et_pb_equal_columns">
                                    <div class="et_pb_column et_pb_column_2_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
                                       <div class="et_pb_module et_pb_blurb et_pb_blurb_5 card icone esquerda  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                                          <div class="et_pb_blurb_content">
                                             <!-- <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img decoding="async" src="https://smoovco.com/wp-content/uploads/2023/12/icon-faturamento.svg" alt="Ícone Faturamento" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-1587" /></span></div> -->
                                             <div class="et_pb_blurb_container">
                                                <div class="et_pb_blurb_description">
                                                   <p><strong><?php echo $data["missionTitle"]; ?></strong></strong></p>
                                                   <ul style="padding-bottom: 0;">
                                                      <?php foreach ($data["missionList"] as $item): ?>
                                                      <li style="margin-top: 1rem; margin-bottom: 10px"><?php echo $item; ?></li>
                                                      <?php endforeach; ?>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="et_pb_column et_pb_column_1_3 et_pb_column_11 et_pb_section_video et_pb_preload  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
                                       <span class="et_pb_section_video_bg  ">
                                          <video loop="loop" autoplay playsinline muted >
                                             <source type="video/mp4" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["video1"]["path"]; ?>" />
                                          </video>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div id="lojas" class="et_pb_section et_pb_section_2 home et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
                                          <div class="et_pb_text_inner">
                                             <h2><?php echo $data["qualityTitle"]; ?></h2>
                                          </div>
                                       </div>
                                       <div class="et_pb_module dica_divi_carousel dica_divi_carousel_0">
                                          <div class="process_grid_items et_pb_module_inner">
                                             <div class="process_grid_item et_pb_module dica_divi_carouselitem dica_divi_carouselitem_0">
                                                <div class="et_pb_module_inner">
                                                   <div class="dica-item image_top"   data-hash="dica_divi_carouselitem_0">
                                                      <div class="dica-image-container"><span class="image"><img decoding="async" src="../assets/icon-infra.svg" srcset="" alt="Ícone Loja de Rua" class="dica-item-image" width="f" height="u"/></span></div>
                                                      <div class="dica-item-content">
                                                         <h4 class="item-title">Infrastructure</h4>
                                                         <p>We operate through our modern pack house / cold storage facility for grapes, onion grading center & modern packing facility for Vegetables in Nashik (India) with the Best Hygienic conditions.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="process_grid_item et_pb_module dica_divi_carouselitem dica_divi_carouselitem_1">
                                                <div class="et_pb_module_inner">
                                                   <div class="dica-item image_top"   data-hash="dica_divi_carouselitem_1">
                                                      <div class="dica-image-container"><span class="image"><img decoding="async" src="../assets/icon-qa.svg" srcset="" alt="Ícone Quiosque" class="dica-item-image" width="f" height="u"/></span></div>
                                                      <div class="dica-item-content">
                                                         <h4 class="item-title">Quality Assurance</h4>
                                                         <p>Being quality conscious organization, all our produce from associated growers are closely monitored in various growth stages till packaging, the product can be tested in APEDA recognized laboratories as per customer’s need.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="process_grid_item et_pb_module dica_divi_carouselitem dica_divi_carouselitem_1">
                                                <div class="et_pb_module_inner">
                                                   <div class="dica-item image_top"   data-hash="dica_divi_carouselitem_1">
                                                      <div class="dica-image-container"><span class="image"><img decoding="async" src="../assets/icon-packing.svg" srcset="" alt="Ícone Quiosque" class="dica-item-image" width="f" height="u"/></span></div>
                                                      <div class="dica-item-content">
                                                         <h4 class="item-title">Packing</h4>
                                                         <p>RajInOut is carried out in hygienic packaging material to suit end-users requirements for export as well as domestic market.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="franqueado" class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular" >
                                 <div class="et_pb_row et_pb_row_10">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div class="et_pb_module modula_gallery modula_gallery_0">
                                          <div class="et_pb_module_inner">
                                             <div id="jtg-1766" class="modula modula-gallery modula-custom-grid modula-gallery-initialized" data-config="{&quot;height&quot;:0,&quot;tabletHeight&quot;:0,&quot;mobileHeight&quot;:0,&quot;desktopHeight&quot;:0,&quot;enableTwitter&quot;:false,&quot;enableWhatsapp&quot;:false,&quot;enableFacebook&quot;:false,&quot;enablePinterest&quot;:false,&quot;enableLinkedin&quot;:false,&quot;enableEmail&quot;:false,&quot;randomFactor&quot;:0,&quot;type&quot;:&quot;custom-grid&quot;,&quot;columns&quot;:12,&quot;gutter&quot;:15,&quot;mobileGutter&quot;:10,&quot;tabletGutter&quot;:10,&quot;desktopGutter&quot;:15,&quot;enableResponsive&quot;:&quot;1&quot;,&quot;tabletColumns&quot;:&quot;3&quot;,&quot;mobileColumns&quot;:&quot;2&quot;,&quot;lazyLoad&quot;:1,&quot;lightboxOpts&quot;:{&quot;animated&quot;:true,&quot;Thumbs&quot;:{&quot;type&quot;:&quot;modern&quot;,&quot;showOnStart&quot;:false},&quot;Toolbar&quot;:{&quot;display&quot;:{&quot;right&quot;:[&quot;close&quot;]},&quot;enabled&quot;:true},&quot;Carousel&quot;:{&quot;Panzoom&quot;:{&quot;touch&quot;:false},&quot;infinite&quot;:false},&quot;keyboard&quot;:{&quot;Escape&quot;:&quot;close&quot;,&quot;Delete&quot;:&quot;close&quot;,&quot;Backspace&quot;:&quot;close&quot;,&quot;PageUp&quot;:false,&quot;PageDown&quot;:false,&quot;ArrowUp&quot;:false,&quot;ArrowDown&quot;:false,&quot;ArrowRight&quot;:false,&quot;ArrowLeft&quot;:false},&quot;touch&quot;:false,&quot;backdropClick&quot;:false,&quot;l10n&quot;:{&quot;CLOSE&quot;:&quot;Close&quot;,&quot;NEXT&quot;:&quot;Next&quot;,&quot;PREV&quot;:&quot;Previous&quot;,&quot;Error&quot;:&quot;The requested content cannot be loaded. Please try again later.&quot;,&quot;PLAY_START&quot;:&quot;Start slideshow&quot;,&quot;PLAY_STOP&quot;:&quot;Pause slideshow&quot;,&quot;FULL_SCREEN&quot;:&quot;Full screen&quot;,&quot;THUMBS&quot;:&quot;Thumbnails&quot;,&quot;DOWNLOAD&quot;:&quot;Download&quot;,&quot;SHARE&quot;:&quot;Share&quot;,&quot;ZOOM&quot;:&quot;Zoom&quot;,&quot;EMAIL&quot;:&quot;Here is the link to the image : %%image_link%% and this is the link to the gallery : %%gallery_link%%&quot;,&quot;MODAL&quot;:&quot;You can close this modal content with the ESC key&quot;,&quot;ERROR&quot;:&quot;Something Went Wrong, Please Try Again Later&quot;,&quot;IMAGE_ERROR&quot;:&quot;Image Not Found&quot;,&quot;ELEMENT_NOT_FOUND&quot;:&quot;HTML Element Not Found&quot;,&quot;AJAX_NOT_FOUND&quot;:&quot;Error Loading AJAX : Not Found&quot;,&quot;AJAX_FORBIDDEN&quot;:&quot;Error Loading AJAX : Forbidden&quot;,&quot;IFRAME_ERROR&quot;:&quot;Error Loading Page&quot;,&quot;TOGGLE_ZOOM&quot;:&quot;Toggle zoom level&quot;,&quot;TOGGLE_THUMBS&quot;:&quot;Toggle thumbnails&quot;,&quot;TOGGLE_SLIDESHOW&quot;:&quot;Toggle slideshow&quot;,&quot;TOGGLE_FULLSCREEN&quot;:&quot;Toggle full-screen mode&quot;},&quot;Images&quot;:{&quot;Panzoom&quot;:{&quot;maxScale&quot;:2}},&quot;mainClass&quot;:&quot;modula-fancybox-container modula-lightbox-jtg-1766&quot;,&quot;Html&quot;:{&quot;videoAutoplay&quot;:0,&quot;videoTpl&quot;:&quot;<video class=\&quot;fancybox__html5video\&quot; controls muted playsinline controlsList controlsList=\&quot;nodownload\&quot; poster=\&quot;{{poster}}\&quot; src=\&quot;{{src}}\&quot; type=\&quot;{{format}}\&quot; >  Sorry, your browser doesn't support embedded videos, <a href=\&quot;{{src}}\&quot;> download <\/a> and watch with your favorite video player! <\/video>&quot;}},&quot;inView&quot;:false,&quot;email_subject&quot;:&quot;Check out this awesome image !!&quot;,&quot;email_message&quot;:&quot;Here is the link to the image : %%image_link%% and this is the link to the gallery : %%gallery_link%%&quot;,&quot;lightbox&quot;:&quot;fancybox&quot;}">
                                                <div class="modula-items" style="position: relative; height: 945px;">
                                                   <div class="modula-item effect-pufrobo tiled tile-v tg-loaded" data-width="3" data-height="4" style="width: 273.75px; height: 369px; position: absolute; left: 0px; top: 0px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1767" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img fetchpriority="high" decoding="async" class="pic wp-image-1767 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mão com unhas verde limão segurando Smoov Classic" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][0]["path"]; ?>" title="franqueados-img-01-min" width="793" height="1024" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][0]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][0]["path"]; ?>" data-caption="" data-source="modula" style="background: #fff; inset: 0px auto auto -6.00439px; width: 100%; height: 369px; margin: 0px;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 369px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-h tg-loaded tile-v" data-width="6" data-height="5" style="width: 562.5px; height: 465px; position: absolute; left: 288.75px; top: 0px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1768" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1768 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Brindando com Smoov Pink no parque" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" title="franqueados-img-02-min" width="1000" height="997" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" data-caption="" data-source="modula" style="background: #fff; inset: -47.9062px auto auto 0px; width: 562.5px; height: auto; margin: 0px;">
                                                         <div class="figc no-description" style="width: 562.5px; height: 465px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-v tg-loaded" data-width="3" data-height="8" style="width: 273.75px; height: 753px; position: absolute; left: 866.25px; top: 0px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1769" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1769 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Smoov Tropical Fresh" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][5]["path"]; ?>" title="franqueados-img-03-min" width="864" height="1024" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][5]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][5]["path"]; ?>" data-caption="" data-source="modula" style="background: #fff; width: auto; inset: 0px auto auto -180.797px; height: 753px; margin: 0px;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 753px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-h tg-loaded tile-v" data-width="3" data-height="3" style="width: 273.75px; height: 273px; position: absolute; left: 0px; top: 384px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1770" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1770 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mão segurando canudo em copo de Smoov Detox" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][2]["path"]; ?>" title="franqueados-img-04-min" width="760" height="1024" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][2]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][2]["path"]; ?>" data-caption="" data-source="modula" style="background: #fff; inset: -47.9211px auto auto 0px; width: 273.75px; height: auto; margin: 0px;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 273px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-v tg-loaded" data-width="3" data-height="5" style="width: 273.75px; height: 465px; position: absolute; left: 288.75px; top: 480px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1772" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1772 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mulher sentada na grama de um parque ao lado de Smoov pink" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][1]["path"]; ?>" title="franqueados-img-06-min" width="1000" height="993" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][1]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][1]["path"]; ?>" data-caption="" data-source="modula" style="background: #fff; inset: 0px auto auto -97.264px; width: auto; height: 465px; margin: 0px; max-width: 999em;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 465px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-h tg-loaded tile-v" data-width="3" data-height="3" style="width: 273.75px; height: 273px; position: absolute; left: 577.5px; top: 480px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1773" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1773 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mão masculina segurando Smoov High Intensity Energy" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][3]["path"]; ?>" title="franqueados-img-07-min" width="1000" height="914" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][3]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][3]["path"]; ?>" data-caption="" data-source="modula" style="inset: 0px auto auto -12.4685px; width: auto; height: 273px; margin: 0px; max-width: 999em;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 273px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-h tg-loaded tile-v" data-width="3" data-height="3" style="width: 273.75px; height: 273px; position: absolute; left: 0px; top: 672px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1771" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1771 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mulher oferecendo Smoov Classic e Smoov.co" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][4]["path"]; ?>" title="franqueados-img-05-min" width="958" height="1024" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][4]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][4]["path"]; ?>" data-caption="" data-source="modula" style="inset: -9.8048px auto auto 0px; width: 273.75px; height: auto; margin: 0px; max-width: 999em;">
                                                         <div class="figc no-description" style="width: 273.75px; height: 273px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modula-item effect-pufrobo tiled tile-h tg-loaded tile-v" data-width="6" data-height="2" style="width: 562.5px; height: 177px; position: absolute; left: 577.5px; top: 768px;">
                                                      <div class="modula-item-overlay"></div>
                                                      <div class="modula-item-content">
                                                         <a data-image-id="1774" tabindex="0" rel="jtg-1766" data-caption="" aria-label="Open image in lightbox" role="button" class="tile-inner modula-item-link"></a> <img decoding="async" class="pic wp-image-1774 ls-is-cached lazyloaded" data-valign="middle" data-halign="center" alt="Mão feminina colocando granulado sobre Smoov High Intensity Energy" data-full="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" title="franqueados-img-08-min" width="1000" height="770" src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" data-src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["images"][6]["path"]; ?>" data-caption="" data-source="modula" style="inset: -128.062px auto auto 0px; width: 562.5px; height: auto; margin: 0px; max-width: 999em;">
                                                         <div class="figc no-description" style="width: 562.5px; height: 177px;">
                                                            <div class="figc-inner"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <script type="application/ld+json"> {
                                                   "@context": "http://schema.org",
                                                   "@type"   : "ImageGallery",
                                                   "id"      : "https://rajinout.co.in/about-us/",
                                                   "url"     : "https://rajinout.co.in/about-us/"
                                                   } 
                                                </script>
                                             </div>
                                          </div>
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
      <script type="text/javascript" id="divi-custom-script-js-extra"> /* <![CDATA[ */
         var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
         var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"};
         var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
         var et_pb_custom = {"ajaxurl":"https:\/\/smoovco.com\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"622c47e1e5","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"2df338a0ae","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"3206","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":"","tinymce_uri":"https:\/\/smoovco.com\/wp-content\/themes\/Divi\/includes\/builder\/frontend-builder\/assets\/vendors","accent_color":"#e2dd00","waypoints_options":[]};
         var et_pb_box_shadow_elements = [];
         /* ]]> */ 
      </script>
      <script defer src="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-js-40ed90391d332b179b2939fefb417805.js"></script>
      <?php include "../partials/home/scripts.html"; ?>
   </body>
</html>