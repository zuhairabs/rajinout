<div
  id="sobre"
  class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular"
>
  <div class="et_pb_row et_pb_row_3 et_pb_equal_columns et_pb_gutters1">
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_3 et_pb_css_mix_blend_mode_passthrough"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_3 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="about_info_home et_pb_text_inner">
          <h2><?php echo htmlspecialchars($data["aboutTitle"]); ?></h2>
          <div class="et_pb_module et_pb_image et_pb_image_1">
            <span class="et_pb_image_wrap">
              <img
                decoding="async"
                src="https://cms.rajinout.co.in/storage/uploads<?php echo $data["aboutLogo"]["path"]; ?>"
                alt="logo"
                title="Logo"
                class="wp-image-617"
              />
            </span>
          </div>
        </div>
      </div>
    </div>
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_4 et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_4 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <?php echo $data["aboutDescription"]; ?>
          <a
            style="margin-top: 1.5rem; width: 150px"
            class="et_pb_button et_pb_button_0 botao et_pb_bg_layout_light"
            href="<?php echo $data["aboutBtnLink"]; ?>"
            data-icon="$"
            ><?php echo $data["aboutBtnText"]; ?></a
          >
        </div>
      </div>
    </div>
  </div>
</div>
