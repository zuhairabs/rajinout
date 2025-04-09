<?php
// Get the current page URI and strip the project folder part (if any)
$request_uri = $_SERVER["REQUEST_URI"];

// Check if the request URI contains a subdirectory (like /projectname)
$base_url = str_replace("rajinout", "", $request_uri); // Replace 'projectname' with your folder name, or use a dynamic approach

// Now, get the actual current page name
$current_page = basename($base_url);

// Special case: if we're on the home page, set $current_page to an empty string
if ($current_page == "") {
    $current_page = "/"; // Consider home page as '/'
}
$pathname = "/content/item/header?populate=2";
$header = fetchData($pathname);
$menu1 = array_slice($header["menu"], 0, 3);
$contact = $header["menu"][3];
$enquiry = $header["menu"][4];
?>

<header class="et-l et-l--header">
  <div class="et_builder_inner_content et_pb_gutters3">
    <div
      id="menu-principal"
      class="et_pb_section et_pb_section_0_tb_header et_pb_with_background et_section_regular et_pb_section--fixed et_pb_section--with-menu"
    >
      <div class="et_pb_row et_pb_row_0_tb_header et_pb_row--with-menu">
        <div
          class="et_pb_column et_pb_column_4_4 et_pb_column_0_tb_header wrapper et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column--with-menu"
        >
          <div
            class="et_pb_module et_pb_menu et_pb_menu_0_tb_header menu-links et_pb_bg_layout_light et_pb_text_align_left et_dropdown_animation_fade et_pb_menu--without-logo et_pb_menu--style-left_aligned"
          >
            <div class="et_pb_menu_inner_container clearfix">
              <div class="et_pb_menu__wrap">
                <div class="et_pb_menu__menu">
                  <nav class="et-menu-nav">
                    <ul id="menu-menu-principal-ingles" class="et-menu nav">
                      <?php foreach ($menu1 as $item): ?>
                        <?php
                        $has_children = !empty($item["children"]);
                        $is_active =
                            $item["link"] === $current_page
                                ? "current_page_item"
                                : "";
                        ?>
                        <li
                          class="<?php echo $has_children
                              ? "menu-item-has-children"
                              : ""; ?> <?php echo $is_active; ?> et_pb_menu_page_id-home menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3170 menu-item-3217"
                        >
                          <a href="<?php echo $item[
                              "link"
                          ]; ?>" aria-current="page"><?php echo $item[
    "title"
]; ?></a>
<?php if ($has_children): ?>
  <ul class="sub-menu">
  <?php foreach ($item["children"] as $child): ?>
                          <li
                            class="et_pb_menu_page_id-3223 menu-item menu-item-type-custom menu-item-object-custom menu-item-3223"
                          >
                            <a href="/product/<?php echo strtolower(str_replace(' ', '-', $child["name"])); ?>">
                              <?php echo $child["name"]; ?></a>
                          </li>
                          <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        </li>
                      <?php endforeach; ?>
                      <li
                        class="<?php echo $is_active; ?> direita contato et_pb_menu_page_id-3191 menu-item menu-item-type-post_type menu-item-object-page menu-item-3218"
                      >
                        <a href="<?php echo $contact["link"]; ?>"><?php echo $contact["title"]; ?></a>
                      </li>
                      <li
                        class="direita franqueado et_pb_menu_page_id-3206 menu-item menu-item-type-post_type menu-item-object-page menu-item-3219"
                      >
                        <a href="<?php echo $enquiry["link"]; ?>"><?php echo $enquiry["title"]; ?></a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="et_mobile_nav_menu">
                  <div class="mobile_nav closed">
                    <span class="mobile_menu_bar"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            id="logo-principal"
            class="et_pb_module et_pb_code et_pb_code_1_tb_header et_clickable"
          >
            <a href="/" class="et_pb_code_inner">
              <?xml version="1.0" encoding="utf-8"?>
              <svg
                version="1.1"
                class="logo"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                style="max-width: 250px"
                viewBox="0 0 300 155"
                style="enable-background: new 0 0 300 155"
                xml:space="preserve"
              >
                <circle class="st0" cx="150" cy="5" r="150" />
                <g class="svg-image-container">
                  <image
                    href="https://cms.rajinout.co.in/storage/uploads<?php echo $header["logo"]["path"]; ?>"
                    x="100"
                    y="0"
                    preserveAspectRatio="xMidYMid meet"
                    class="svg-image-logo"
                  />
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
