<?php
$pathname = "/content/item/footer";
$footer = fetchData($pathname);
?>

<footer class="et-l et-l--footer">
  <div class="et_builder_inner_content et_pb_gutters3">
    <div
      class="et_pb_section et_pb_section_0_tb_footer et_pb_with_background et_section_regular"
    ></div>
    <div
      class="et_pb_section et_pb_section_1_tb_footer et_pb_with_background et_section_regular"
    >
      <div class="et_pb_row et_pb_row_0_tb_footer">
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_0_tb_footer et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_text et_pb_text_0_tb_footer et_pb_text_align_left et_pb_bg_layout_light"
          >
            <div class="et_pb_text_inner">
              Designed by
              <a
                style="
                  color: #2b2b2b;
                  text-decoration: underline;
                  font-family: gopher, sans-serif;
                "
                href="https://lyhtechpark.com"
                target="_blank"
                rel="noopener"
                title="Zuhair Abbas"
                ><span>LYH Tech Park</span></a
              >
            </div>
            <div style="opacity: 0" class="et_pb_text_inner">
              Designed & developed by
              <a
                style="
                  color: #2b2b2b;
                  text-decoration: underline;
                  font-family: gopher, sans-serif;
                "
                href="https://lyhtechpark.com"
                target="_blank"
                rel="noopener"
                title="Zuhair Abbas"
                ><span>Zuhair Abbas</span></a
              >
            </div>
          </div>
        </div>
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_1_tb_footer et_pb_css_mix_blend_mode_passthrough et-last-child footer-logo-container"
        >
          <div class="et_pb_module et_pb_image et_pb_image_0_tb_footer">
            <span class="et_pb_image_wrap"
              ><img
                decoding="async"
                src="https://cms.rajinout.co.in/storage/uploads<?php echo $footer["logo"]["path"]; ?>"
                alt=""
                title="Logo: Rajinout"
                class="wp-image-1012 footer-logo"
            /></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
