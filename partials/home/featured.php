<?php
$productsPathname = "/content/items/products?filter[isFeatured]=true";
$products = fetchData($productsPathname);
?>

<div
  id="lojas"
  class="et_pb_section et_pb_section_7 home et_pb_with_background et_section_regular"
>
  <div class="et_pb_row et_pb_row_11">
    <div
      class="et_pb_column et_pb_column_4_4 et_pb_column_15 et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_13 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h2><?php echo $data["featuredTitle"]; ?></h2>
        </div>
      </div>
      <div
        id="carrossel-lojas"
        class="et_pb_module dica_divi_carousel dica_divi_carousel_0"
      >
        <div class="et_pb_module_inner">
          <div
            class="dica-container desktop_bottom tablet_bottom mobile_bottom"
            data-props='{"desktop":"3","tablet":"2","mobile":"1","speed":"500","arrow":"on","dots":"on","autoplay":"off","autoSpeed":"1000","loop":"off","item_spacing":"30","center_mode":"off","slider_effec":"1","cover_rotate":"50","pause_onhover":"off","multislide":"off","cfshadow":"on","order":"0","lazyload":"off","lazybefore":"off","scroller_effect":"off","autowidth":"off","item_spacing_tablet":"30","item_spacing_phone":"30","scroller_speed":"4000","hashNavigation":"off","simulatetouch":"off","allowtouchmove":"off","slide_row":"1","slide_row_tablet":"1","slide_row_phone":"1","keyboard":"off","mousewheel":"off","autoplay_viewport":""}'
          >
            <div class="swiper-container">
              <div class="swiper-wrapper">
              <?php foreach ($products as $key => $product): ?>
                <div
                  class="et_pb_module dica_divi_carouselitem dica_divi_carouselitem_<?php echo $key; ?>"
                >
                  <div class="et_pb_module_inner">
                    <div
                      class="dica-item image_top"
                      data-hash="dica_divi_carouselitem_0"
                    >
                      <div class="dica-image-container">
                        <span class="image">
                          <img
                            decoding="async"
                            src="https://cms.rajinout.co.in/storage/uploads<?php echo $product["image"]["path"]; ?>"
                            alt="<?php echo $product["name"]; ?>"
                            class="dica-item-image"
                            width="600"
                            height="413"
                          />
                        </span>
                        <div class="image-shadow"></div>
                      </div>
                      <div class="dica-item-content">
                        <h4 class="item-title"><?php echo $product["name"]; ?></h4>
                        <div
                          class="content"
                          data-settings='{"status":"false","responsive":"off","limit":"","limit_tablet":"","limit_phone":"","text_more":"","text_less":""}'
                        >
                          <?php 
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
                                $description = substr($cleanDescription, 0, 130);
                                // Add ellipsis if description was truncated
                                if (strlen($cleanDescription) > 130) {
                                    $description .= "...";
                                }
                              }
                          ?>
                          <p>
                            <?php echo $description; ?>
                          </p>
                        </div>
                        <div class="et_pb_button_wrapper">
                          <a class="et_pb_button" href="/product/<?php echo $product["slug"]; ?>" target="_blank"
                            >View Product</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                <!-- <div
                  class="et_pb_module dica_divi_carouselitem dica_divi_carouselitem_1"
                >
                  <div class="et_pb_module_inner">
                    <div
                      class="dica-item image_top"
                      data-hash="dica_divi_carouselitem_1"
                    >
                      <div class="dica-image-container">
                        <span class="image"
                          ><img
                            decoding="async"
                            src="./assets/products-arts/ginger-garlic-paste.png"
                            alt="Loja JK Iguatemi"
                            class="dica-item-image"
                            width="600"
                            height="413"
                        /></span>
                        <div class="image-shadow"></div>
                      </div>
                      <div class="dica-item-content">
                        <h4 class="item-title">Ginger Garlic Paste</h4>
                        <div
                          class="content"
                          data-settings='{"status":"false","responsive":"off","limit":"","limit_tablet":"","limit_phone":"","text_more":"","text_less":""}'
                        >
                          <p>
                            Enhance your cooking with the perfect balance of
                            ginger and garlic in Wellness Ginger Garlic Paste.
                            Ideal for Indian and Asian cuisines, this
                            ready-to-use paste...
                          </p>
                        </div>
                        <div class="et_pb_button_wrapper">
                          <a class="et_pb_button" href="#!" target="_blank"
                            >View Product</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="et_pb_module dica_divi_carouselitem dica_divi_carouselitem_2"
                >
                  <div class="et_pb_module_inner">
                    <div
                      class="dica-item image_top"
                      data-hash="dica_divi_carouselitem_2"
                    >
                      <div class="dica-image-container">
                        <span class="image"
                          ><img
                            decoding="async"
                            src="./assets/products-arts/chocolate-peanut-butter.png"
                            alt="Loja Itaim Bibi"
                            class="dica-item-image"
                            width="600"
                            height="413"
                        /></span>
                        <div class="image-shadow"></div>
                      </div>
                      <div class="dica-item-content">
                        <h4 class="item-title">Chocolate Peanut Butter</h4>
                        <div
                          class="content"
                          data-settings='{"status":"false","responsive":"off","limit":"","limit_tablet":"","limit_phone":"","text_more":"","text_less":""}'
                        >
                          <p>
                            Indulge in the creamy richness of Wellness Chocolate
                            Peanut Butter—a delightful fusion of premium peanuts
                            and smooth chocolate. Packed with protein and
                            healthy fats,...
                          </p>
                        </div>
                        <div class="et_pb_button_wrapper">
                          <a class="et_pb_button" href="#!" target="_blank"
                            >View Product</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="et_pb_module dica_divi_carouselitem dica_divi_carouselitem_3"
                >
                  <div class="et_pb_module_inner">
                    <div
                      class="dica-item image_top"
                      data-hash="dica_divi_carouselitem_3"
                    >
                      <div class="dica-image-container">
                        <span class="image"
                          ><img
                            decoding="async"
                            src="./assets/products-arts/ghee.png"
                            alt="Loja FAAP"
                            class="dica-item-image"
                            width="600"
                            height="413"
                        /></span>
                        <div class="image-shadow"></div>
                      </div>
                      <div class="dica-item-content">
                        <h4 class="item-title">Premium A2 Ghee</h4>
                        <div
                          class="content"
                          data-settings='{"status":"false","responsive":"off","limit":"","limit_tablet":"","limit_phone":"","text_more":"","text_less":""}'
                        >
                          <p>
                            Discover the superior quality of Wellness Premium A2
                            Ghee, made from the milk of indigenous A2 cows using
                            the traditional bilona method...
                          </p>
                        </div>
                        <div class="et_pb_button_wrapper">
                          <a class="et_pb_button" href="#!" target="_blank"
                            >View Product</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="swiper-buttton-container">
              <div
                class="swiper-button-prev dica-prev-btn-0"
                data-icon="4"
              ></div>
              <div
                class="swiper-button-next dica-next-btn-0"
                data-icon="5"
              ></div>
            </div>
            <div class="swiper-pagination dica-paination-0"></div>
          </div>
        </div>
      </div>
      <div
        class="et_pb_button_module_wrapper et_pb_button_3_wrapper et_pb_button_alignment_center et_pb_module"
      >
        <a
          class="et_pb_button et_pb_button_3 botao gopher et_pb_bg_layout_light"
          href="<?php echo $data["featuredBtnLink"]; ?>"
          ><?php echo $data["featuredBtnText"]; ?></a
        >
      </div>
    </div>
  </div>
</div>