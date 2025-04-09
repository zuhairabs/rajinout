<?php
$categoryPathname = "/content/items/categories?filter[isHighlighted]=true&populate=1";
$categories = fetchData($categoryPathname);
?>

<div
  id="sabores-mobile"
  class="et_pb_section et_pb_section_4 animate-scroll mobile et_pb_with_background et_section_regular"
>
  <div class="et_pb_row et_pb_row_5">
    <div
      class="et_pb_column et_pb_column_4_4 et_pb_column_6 et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_5 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h2><?php echo $data["categoryTitle"]; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div
  id="sabores"
  class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular"
>
  <div class="et_pb_row et_pb_row_6">
    <div
      class="et_pb_column et_pb_column_4_4 et_pb_column_7 et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_6 et_pb_text_align_center et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <p>
            <?php echo $data["categoryDescription"]; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div
    id="smoothies-frutados"
    class="et_pb_row et_pb_row_7 sabor et_pb_equal_columns et_pb_gutters1"
  >
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_8 titulo et_pb_css_mix_blend_mode_passthrough"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_7 header et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h3><?php echo $categories[0]["name"]; ?></h3>
        </div>
      </div>
      <div
        class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_module"
      >
        <a
          class="et_pb_button et_pb_button_0 botao et_pb_bg_layout_light"
          href="/products"
          data-icon="&#x24;"
          ><?php echo $data["categoryBtnText"]; ?></a
        >
      </div>
      <div
        class="et_pb_module et_pb_text et_pb_text_8 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <p>
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-3.png"
              alt="Strawberry"
              class="fruta morango3 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-2.png"
              alt="Strawberry"
              class="fruta morango2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-morango-1.png"
              alt="Strawberry"
              class="fruta morango1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-3.png"
              alt="Blueberry"
              class="fruta mirtilo3 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-2.png"
              alt="Blueberry"
              class="fruta mirtilo2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-mirtilo-1.png"
              alt="Blueberry"
              class="fruta mirtilo1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-maracuja.png"
              alt="Passion fruit"
              class="fruta maracuja lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-manga.png"
              alt="Mango"
              class="fruta manga lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-banana-2.png"
              alt="Banana"
              class="fruta banana2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-banana-1.png"
              alt="Banana"
              class="fruta banana1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-amora-1.png"
              alt="Blackberry"
              class="fruta amora1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/frutado-amora-2.png"
              alt="Blackberry"
              class="fruta amora2 lazyload"
            />
          </p>
        </div>
      </div>
    </div>
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_9 shakes et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div class="et_pb_module et_pb_image et_pb_image_3 shake primeiro">
        <span class="et_pb_image_wrap"
          ><img
            fetchpriority="high"
            decoding="async"
            width="611"
            height="686"
            src="https://cms.rajinout.co.in/storage/uploads<?php echo $categories[0]["products"][3]["image"]["path"]; ?>"
            alt="<?php echo $categories[0]["name"]; ?>"
            title="<?php echo $categories[0]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 611px, 100vw"
            class="wp-image-691"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_4 shake segundo">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/white-onion.png"
            alt="<?php echo $categories[0]["name"]; ?>"
            title="<?php echo $categories[0]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-692"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_5 shake terceiro">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/white-onion.png"
            alt="<?php echo $categories[0]["name"]; ?>"
            title="<?php echo $categories[0]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-693"
        /></span>
      </div>
    </div>
  </div>
  <div
    id="smoothies-proteinados"
    class="et_pb_row et_pb_row_8 sabor et_pb_equal_columns et_pb_gutters1"
  >
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_10 shakes et_pb_css_mix_blend_mode_passthrough"
    >
      <div class="et_pb_module et_pb_image et_pb_image_6 shake primeiro">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="611"
            height="686"
            src="https://cms.rajinout.co.in/storage/uploads<?php echo $categories[1]["products"][0]["image"]["path"]; ?>"
            alt="<?php echo $categories[1]["name"]; ?>"
            title="<?php echo $categories[1]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 611px, 100vw"
            class="wp-image-694"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_7 shake segundo">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/peanut.png"
            alt="<?php echo $categories[1]["name"]; ?>"
            title="<?php echo $categories[1]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-695"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_8 shake terceiro">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/peanut.png"
            alt="<?php echo $categories[1]["name"]; ?>"
            title="<?php echo $categories[1]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-696"
        /></span>
      </div>
    </div>
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_11 titulo et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_9 header et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h3><?php echo $categories[1]["name"]; ?></h3>
        </div>
      </div>
      <div
        class="et_pb_button_module_wrapper et_pb_button_1_wrapper et_pb_button_alignment_right et_pb_module"
      >
        <a
          class="et_pb_button et_pb_button_1 botao et_pb_bg_layout_light"
          href="/products"
          data-icon="&#x24;"
          >See Options</a
        >
      </div>
      <div
        class="et_pb_module et_pb_text et_pb_text_10 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <p>
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/proteinado-leite.png"
              alt="Milk"
              class="ingrediente leite lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/proteinado-proteina.png"
              alt="Protein"
              class="ingrediente proteina lazyload"
            />
          </p>
        </div>
      </div>
    </div>
  </div>
  <div
    id="healthy-shakes"
    class="et_pb_row et_pb_row_9 sabor et_pb_equal_columns et_pb_gutters1"
  >
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_12 titulo et_pb_css_mix_blend_mode_passthrough"
    >
      <div
        class="et_pb_module et_pb_text et_pb_text_11 header et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <h3><?php echo $categories[2]["name"]; ?></h3>
        </div>
      </div>
      <div
        class="et_pb_button_module_wrapper et_pb_button_2_wrapper et_pb_module"
      >
        <a
          class="et_pb_button et_pb_button_2 botao et_pb_bg_layout_light"
          href="/products"
          data-icon="&#x24;"
          >See Options</a
        >
      </div>
      <div
        class="et_pb_module et_pb_text et_pb_text_12 et_pb_text_align_left et_pb_bg_layout_light"
      >
        <div class="et_pb_text_inner">
          <p>
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-beijinho.png"
              alt="Beijinho"
              class="ingrediente beijinho1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-beijinho.png"
              alt="Beijinho"
              class="ingrediente beijinho2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-brigadeiro1.png"
              alt="Brigadeiro"
              class="ingrediente brigadeiro1 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-brigadeiro.png"
              alt="Brigadeiro"
              class="ingrediente brigadeiro2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-castanha3.png"
              alt="Nut"
              class="ingrediente castanha3 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-castanha2.png"
              alt="Nut"
              class="ingrediente castanha2 lazyload"
            />
            <img
              decoding="async"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
              data-src="https://smoovco.com/wp-content/uploads/2023/11/healthy-castanha1.png"
              alt="Nut"
              class="ingrediente castanha1 lazyload"
            />
          </p>
        </div>
      </div>
    </div>
    <div
      class="et_pb_column et_pb_column_1_2 et_pb_column_13 shakes et_pb_css_mix_blend_mode_passthrough et-last-child"
    >
      <div class="et_pb_module et_pb_image et_pb_image_9 shake primeiro">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="611"
            height="686"
            src="https://cms.rajinout.co.in/storage/uploads<?php echo $categories[2]["products"][0]["image"]["path"]; ?>"
            alt="<?php echo $categories[2]["name"]; ?>"
            title="<?php echo $categories[2]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 611px, 100vw"
            class="wp-image-697"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_10 shake segundo">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/ghee-spoon.png"
            alt="<?php echo $categories[2]["name"]; ?>"
            title="<?php echo $categories[2]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-698"
        /></span>
      </div>
      <div class="et_pb_module et_pb_image et_pb_image_11 shake terceiro">
        <span class="et_pb_image_wrap"
          ><img
            decoding="async"
            width="535"
            height="598"
            src="./assets/products-arts/ghee-spoon.png"
            alt="<?php echo $categories[2]["name"]; ?>"
            title="<?php echo $categories[2]["name"]; ?>"
            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 535px, 100vw"
            class="wp-image-699"
        /></span>
      </div>
    </div>
  </div>
</div>
