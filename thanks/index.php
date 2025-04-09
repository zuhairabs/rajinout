<?php
   include "../api.php";
   $pathname = "/content/item/home?populate=1";
   $data = fetchData($pathname);
   $data["seo"]["title"] = "Thanks" . ' | ' . $data["seo"]["title"];

   $title = "Thank you for your interest";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Capture form values
      $name = htmlspecialchars(trim($_POST['name']));
      $email = htmlspecialchars(trim($_POST['email']));
      $phone = htmlspecialchars(trim($_POST['email']));
      $message = htmlspecialchars(trim($_POST['message']));
  
      $to = "rajinout@yopmail.com";
      $subject = "New Form Submission";
  
      function getEmailTemplate($data) {
         extract($data);
         ob_start();
         include '../templates/submission.php';
         return ob_get_clean();
     }

     $templateData = [
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'message' => $message
     ];

      // HTML email template
      $email_template = getEmailTemplate($templateData);
  
      // Set content-type for HTML email
      $headers  = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: <$email>" . "\r\n";

      $submitPathname = '/content/item/formSubmission';
      $payload = [
         'data' => $templateData
      ];
      $submission = sendData($submitPathname, $payload);
      // Send email
      // if (mail($to, $subject, $email_template, $headers)) {
      //     $title = "Thank you for your interest";
      // } else {
      //     $title = "Sorry, there was an error sending your message. Please try again later.";
      // }
  } else {
      $title = "Could not receive your message. Please try again";
  }
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
                              <div style="text-align: center; margin: 200px 0 110px 0" id="contato" class="">
                                 <h1 style="font-size: 40px; "><?php echo $title; ?></h1>
                                 <p style="font-weight: 400;">We will connect with you shortly.</p>
                                 <div class="et_pb_button_module_wrapper et_pb_button_3_wrapper et_pb_button_alignment_center et_pb_module">
                                    <style>
                                       .custom-thanks-button::after {
                                       position: absolute;
                                       right: 2px;
                                       top: 10%;
                                       transform: translateY(-8%);
                                       }
                                       .custom-thanks-button {
                                       background: #e2dd01 !important;
                                       font-size: 16px !important;
                                       color: #2e3a45 !important;
                                       text-transform: uppercase !important;
                                       border-radius: 50px !important;
                                       margin: 1rem auto !important;
                                       padding: 15px 0 !important;
                                       font-weight: 400 !important;
                                       display: flex;
                                       align-items: center;
                                       justify-content: center;
                                       width: max-content;
                                       }
                                    </style>
                                    <a
                                       class="custom-thanks-button et_pb_button et_pb_button_3 botao gopher et_pb_bg_layout_light"
                                       href="/" target="_blank"
                                       >Go to Home</a>
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
      <?php include "../partials/home/scripts.html"; ?> 
   </body>
</html>