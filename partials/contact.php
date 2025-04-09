<?php
$pathname = "/content/item/contact";
$contact = fetchData($pathname);
?>

<div
  id="contato"
  class="et_pb_section et_pb_section_9 et_pb_with_background et_section_regular"
>
  <div class="et_pb_row et_pb_row_13 et_pb_equal_columns et_pb_gutters1">
    <div
      class="et_pb_with_border et_pb_column_1_2 et_pb_column et_pb_column_17 et_pb_css_mix_blend_mode_passthrough"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_15 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h2><?php echo $contact["title"]; ?></h2>
        </div>
      </div>
      <div
        class="et_pb_module et_pb_blurb et_pb_blurb_0 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
      >
        <div class="et_pb_blurb_content">
          <div class="et_pb_main_blurb_image">
            <span class="et_pb_image_wrap et_pb_only_image_mode_wrap"
              ><img
                decoding="async"
                src="/beta/assets/icon-phone.svg"
                alt="Phone Number"
                class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-996"
            /></span>
          </div>
          <?php
            $contactNumbers = explode(',', $contact["mobile"]); // Split by comma into an array
          ?>
          <div class="et_pb_blurb_container">
            <?php foreach ($contactNumbers as $number): ?>
              <div class="et_pb_blurb_description">
                <p><a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div
        class="et_pb_module et_pb_blurb et_pb_blurb_1 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
      >
        <div class="et_pb_blurb_content">
          <div class="et_pb_main_blurb_image">
            <span class="et_pb_image_wrap et_pb_only_image_mode_wrap"
              ><img
                decoding="async"
                src="/beta/assets/icon-mail.svg"
                alt="E-mail"
                class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-995"
            /></span>
          </div>
          <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
              <a href="mailto:<?php echo $contact["email"]; ?>"><?php echo $contact["email"]; ?></a>
            </div>
          </div>
        </div>
      </div>
      <ul
        class="et_pb_module et_pb_social_media_follow et_pb_social_media_follow_0 redes-sociais clearfix et_pb_bg_layout_light"
      >
        <li
          class="et_pb_social_media_follow_network_0 et_pb_section_video_on_hover et_pb_social_icon et_pb_social_network_link et-social-linkedin"
        >
          <a
            href="<?php echo $contact["socialLinks"]["linkedin"]; ?>"
            class="icon et_pb_with_border"
            title="Follow on Linkedin"
            target="_blank"
            ><span
              class="et_pb_social_media_follow_network_name"
              aria-hidden="true"
              >Follow</span
            ></a
          >
        </li>
        <li
          class="et_pb_social_media_follow_network_1 et_pb_section_video_on_hover et_pb_social_icon et_pb_social_network_link et-social-whatsapp et-pb-social-fa-icon"
        >
          <a
            href="<?php echo $contact["socialLinks"]["whatsapp"]; ?>"
            class="icon et_pb_with_border"
            title="Follow on WhatsApp"
            target="_blank"
            ><span
              class="et_pb_social_media_follow_network_name"
              aria-hidden="true"
              >Follow</span
            ></a
          >
        </li>
        <li
          class="et_pb_social_media_follow_network_2 et_pb_section_video_on_hover et_pb_social_icon et_pb_social_network_link et-social-facebook et-pb-social-fa-icon"
        >
          <a
            href="<?php echo $contact["socialLinks"]["facebook"]; ?>"
            class="icon et_pb_with_border"
            title="Follow on Facebook"
            target="_blank"
            ><span
              class="et_pb_social_media_follow_network_name"
              aria-hidden="true"
              >Follow</span
            ></a
          >
        </li>
      </ul>
    </div>
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_18 et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_16 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h2><?php echo $contact["formTitle"]; ?></h2>
        </div>
      </div>
      <div class="et_pb_module et_pb_code et_pb_code_4 form-contato">
        <div class="et_pb_code_inner">
          <div
            class="frm_forms with_frm_style frm_style_formidable-style"
            id="frm_form_3_container"
          >
            <form
              enctype="multipart/form-data"
              method="post"
              class="frm-show-form frm_pro_form"
              action="/beta/thanks/"
              >
              <!-- id="form_contato-ingles" -->
              <div class="frm_form_fields">
                <fieldset>
                  <legend class="frm_screen_reader">Contact Us</legend>
                  <div class="frm_fields_container">
                    <div
                      id="frm_field_19_container"
                      class="frm_form_field form-field frm_required_field frm_none_container frm6 frm_first"
                    >
                      <label
                        for="name"
                        id="field_qh4icy3_label"
                        class="frm_primary_label"
                        >Name
                        <span class="frm_required" aria-hidden="true">*</span>
                      </label>
                      <input
                        type="text"
                        id="name"
                        name="name"
                        value=""
                        placeholder="Name"
                        data-reqmsg="Name cannot be empty"
                        aria-required="true"
                        data-invmsg="Name is invalid"
                        aria-invalid="false"
                      />
                    </div>
                    <div
                      id="frm_field_20_container"
                      class="frm_form_field form-field frm_required_field frm_none_container frm6"
                    >
                      <label
                        for="phone"
                        id="field_k84el3_label"
                        class="frm_primary_label"
                        >Phone Number
                        <span class="frm_required" aria-hidden="true">*</span>
                      </label>
                      <input
                        type="number"
                        id="phone"
                        name="phone"
                        value=""
                        placeholder="Phone Number"
                        data-reqmsg="Phone Number cannot be empty"
                        aria-required="true"
                        data-invmsg="Invalid phone number"
                        aria-invalid="false"
                        min="1"
                        max="99999999999999999999"
                        step="1"
                      />
                    </div>
                    <div
                      id="frm_field_21_container"
                      class="frm_form_field form-field frm_required_field frm_none_container"
                    >
                      <label
                        for="email"
                        id="field_29yf4d3_label"
                        class="frm_primary_label"
                        >Email
                        <span class="frm_required" aria-hidden="true">*</span>
                      </label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        value=""
                        placeholder="Email"
                        data-reqmsg="Email cannot be empty"
                        aria-required="true"
                        data-invmsg="Enter a valid Email"
                        aria-invalid="false"
                      />
                    </div>
                    <div
                      id="frm_field_22_container"
                      class="frm_form_field form-field frm_required_field frm_none_container"
                    >
                      <label
                        for="message"
                        id="field_9jv0r1_label"
                        class="frm_primary_label"
                        >Message
                        <span class="frm_required" aria-hidden="true">*</span>
                      </label>
                      <textarea
                        name="message"
                        id="message"
                        rows="5"
                        placeholder="Message"
                        data-reqmsg="Message cannot be empty"
                        aria-required="true"
                        data-invmsg="Message is invalid"
                        aria-invalid="false"
                      ></textarea>
                    </div>
                    <div class="frm_submit">
                      <button
                        class="frm_button_submit frm_final_submit"
                        type="submit"
                        formnovalidate="formnovalidate"
                      >
                        <?php echo $contact["formBtn"]; ?>
                      </button>
                    </div>
                  </div>
                </fieldset>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
