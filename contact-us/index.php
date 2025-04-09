<?php
   include "../api.php";
   $pathname = "/content/item/contactPage?populate=2";
   $data = fetchData($pathname);
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include '../partials/meta.php';?>
      <?php include '../partials/home/head-styles.html';?>
      <?php include '../partials/contact/head-styles.html';?>
   </head>
   <body class="home page-template-default page page-id-3170 custom-background et-tb-has-template et-tb-has-header et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db loftloader-lite-enabled modula-best-grid-gallery">
      <?php include "../partials/loader.html"; ?>
      <div id="page-container">
         <div id="et-boc" class="et-boc">
            <?php include "../partials/header.php"; ?>
            <div id="et-main-area">
               <div id="main-content">
                  <article id="post-3170" class="post-3170 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div class="et-l et-l--post">
                           <div class="et_builder_inner_content et_pb_gutters3">
                              <div class="map-section et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">
                                 <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                       <div style="width: 100%;" class="et_pb_module et_pb_code et_pb_code_0">
                                          <div style="width: 100%;" class="et_pb_code_inner">
                                             <div id="wpgmza_map" class="wpgmza_map wpgmza-initialized wpgmza-auto-left wpgmza-viewport-small" data-settings="{&quot;id&quot;:&quot;1&quot;,&quot;map_title&quot;:&quot;Nossas Lojas&quot;,&quot;map_width&quot;:&quot;100&quot;,&quot;map_height&quot;:&quot;550&quot;,&quot;map_start_lat&quot;:&quot;-19.318568399894815&quot;,&quot;map_start_lng&quot;:&quot;-44.20099045621354&quot;,&quot;map_start_location&quot;:&quot;45.950464398418106,-109.81550500000003&quot;,&quot;map_start_zoom&quot;:&quot;5&quot;,&quot;default_marker&quot;:&quot;&quot;,&quot;type&quot;:&quot;0&quot;,&quot;alignment&quot;:&quot;4&quot;,&quot;directions_enabled&quot;:&quot;0&quot;,&quot;styling_enabled&quot;:&quot;0&quot;,&quot;styling_json&quot;:&quot;&quot;,&quot;active&quot;:&quot;0&quot;,&quot;kml&quot;:&quot;&quot;,&quot;bicycle&quot;:&quot;0&quot;,&quot;traffic&quot;:&quot;0&quot;,&quot;dbox&quot;:&quot;0&quot;,&quot;dbox_width&quot;:&quot;&quot;,&quot;listmarkers&quot;:&quot;0&quot;,&quot;listmarkers_advanced&quot;:&quot;0&quot;,&quot;filterbycat&quot;:&quot;0&quot;,&quot;ugm_enabled&quot;:&quot;0&quot;,&quot;ugm_category_enabled&quot;:&quot;0&quot;,&quot;fusion&quot;:&quot;&quot;,&quot;map_width_type&quot;:&quot;%&quot;,&quot;map_height_type&quot;:&quot;px&quot;,&quot;mass_marker_support&quot;:&quot;0&quot;,&quot;ugm_access&quot;:&quot;0&quot;,&quot;order_markers_by&quot;:&quot;0&quot;,&quot;order_markers_choice&quot;:&quot;0&quot;,&quot;show_user_location&quot;:&quot;0&quot;,&quot;default_to&quot;:&quot;&quot;,&quot;other_settings&quot;:{&quot;map_type&quot;:1,&quot;sl_stroke_color&quot;:&quot;&quot;,&quot;sl_fill_color&quot;:&quot;&quot;,&quot;sl_stroke_opacity&quot;:&quot;&quot;,&quot;sl_fill_opacity&quot;:&quot;&quot;,&quot;transport_layer&quot;:false,&quot;action&quot;:&quot;wpgmza_save_map&quot;,&quot;redirect_to&quot;:&quot;\/wp-admin\/admin-post.php&quot;,&quot;map_id&quot;:&quot;1&quot;,&quot;http_referer&quot;:&quot;\/smoov\/wp-admin\/admin.php?page=wp-google-maps-menu&amp;amp;action=edit&amp;amp;map_id=1&quot;,&quot;wpgmza_id&quot;:&quot;1&quot;,&quot;wpgmza_start_location&quot;:&quot;-19.318568399894815,-44.20099045621354&quot;,&quot;wpgmza_start_zoom&quot;:&quot;5&quot;,&quot;store_locator_enabled&quot;:false,&quot;store_locator_search_area&quot;:&quot;radial&quot;,&quot;wpgmza_store_locator_radius_style&quot;:&quot;legacy&quot;,&quot;wpgmza_store_locator_default_radius&quot;:&quot;10&quot;,&quot;store_locator_auto_area_max_zoom&quot;:&quot;&quot;,&quot;store_locator_distance&quot;:false,&quot;wpgmza_store_locator_position&quot;:false,&quot;store_locator_show_distance&quot;:false,&quot;store_locator_category&quot;:false,&quot;wpgmza_store_locator_use_their_location&quot;:false,&quot;wpgmza_store_locator_bounce&quot;:false,&quot;wpgmza_sl_animation&quot;:null,&quot;wpgmza_store_locator_hide_before_search&quot;:false,&quot;store_locator_query_string&quot;:&quot;&quot;,&quot;store_locator_location_placeholder&quot;:&quot;&quot;,&quot;store_locator_default_address&quot;:&quot;&quot;,&quot;store_locator_name_search&quot;:false,&quot;store_locator_name_string&quot;:&quot;&quot;,&quot;store_locator_not_found_message&quot;:&quot;&quot;,&quot;wpgmza_map_align&quot;:&quot;1&quot;,&quot;jump_to_nearest_marker_on_initialization&quot;:false,&quot;automatically_pan_to_users_location&quot;:false,&quot;override_users_location_zoom_level&quot;:false,&quot;override_users_location_zoom_levels&quot;:&quot;&quot;,&quot;show_distance_from_location&quot;:false,&quot;map_max_zoom&quot;:&quot;21&quot;,&quot;map_min_zoom&quot;:&quot;0&quot;,&quot;click_open_link&quot;:false,&quot;fit_maps_bounds_to_markers&quot;:false,&quot;fit_maps_bounds_to_markers_after_filtering&quot;:false,&quot;hide_point_of_interest&quot;:false,&quot;wpgmza_zoom_on_marker_click&quot;:false,&quot;wpgmza_zoom_on_marker_click_slider&quot;:&quot;&quot;,&quot;close_infowindow_on_map_click&quot;:false,&quot;disable_lightbox_images&quot;:false,&quot;use_Raw_Jpeg_Coordinates&quot;:false,&quot;disable_polygon_info_windows&quot;:false,&quot;enable_marker_ratings&quot;:false,&quot;only_load_markers_within_viewport&quot;:false,&quot;iw_primary_color&quot;:&quot;#000000&quot;,&quot;iw_accent_color&quot;:&quot;#000000&quot;,&quot;iw_text_color&quot;:&quot;#000000&quot;,&quot;wpgmza_listmarkers_by&quot;:&quot;0&quot;,&quot;wpgmza_marker_listing_position&quot;:false,&quot;zoom_level_on_marker_listing_override&quot;:false,&quot;zoom_level_on_marker_listing_click&quot;:&quot;&quot;,&quot;marker_listing_disable_zoom&quot;:false,&quot;datatable_no_result_message&quot;:&quot;&quot;,&quot;remove_search_box_datables&quot;:false,&quot;dataTable_pagination_style&quot;:null,&quot;datatable_search_string&quot;:&quot;&quot;,&quot;datatable_result_start&quot;:&quot;&quot;,&quot;datatable_result_of&quot;:&quot;&quot;,&quot;datatable_result_to&quot;:&quot;&quot;,&quot;datatable_result_total&quot;:&quot;&quot;,&quot;datatable_result_show&quot;:&quot;&quot;,&quot;datatable_result_entries&quot;:&quot;&quot;,&quot;wpgmza_savemap&quot;:&quot;Save Map \u00bb&quot;,&quot;zoom_level_mobile_override_enabled&quot;:false,&quot;zoom_level_mobile_override&quot;:&quot;&quot;,&quot;enable_marker_labels&quot;:false}}" data-map-id="1" data-maps-engine="open-layers" data-shortcode-attributes="{&quot;id&quot;:&quot;1&quot;}" style="display: block; overflow: auto; width: 100%; height: 550px; float: left; --wpgmza--viewport-container-width: 284px; --wpgmza--viewport-container-height: 550px; --wpgmza--viewport-overlays-max-width: 100%; --wpgmza--viewport-panels-max-width: 100%;">
                                                <div class="ol-viewport ol-touch" style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                                                   <div class="ol-unselectable ol-layers" style="position: absolute; width: 100%; height: 100%; z-index: 0;">
                                                      <div class="ol-layer" style="position: absolute; width: 100%; height: 100%;">
                                                         <iframe style="width: 100%; height: 100%;" src="<?php echo $data["mapLink"]; ?>" style="border:0" allowfullscreen=""></iframe>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="contato" class="">
                                 <?php include "../partials/contact.php"; ?>
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
   <?php include "../partials/home/scripts.html"; ?> 
</body>
</html>