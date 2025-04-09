<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Submission</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
      /* Base styles */
      body {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #2e3a45;
        background-color: #fff;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
      }

      /* Container */
      .email-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #f7f4e8;
        color: #2e3a45;
        border-radius: 8px;
        overflow: hidden;
      }

      /* Header */
      .header {
        background-color: #2e3a45;
        color: #ffffff;
        padding: 24px;
        text-align: center;
      }

      .header .logo {
        height: 100px;
        width: auto;
        background: rgba(255, 255, 255, 1);
        border-radius: 8px;
      }

      .header h1 {
        margin: 0;
        font-size: 24px;
        font-weight: 900;
      }

      /* Content */
      .content {
        padding: 24px;
      }

      .message-box {
        background-color: #fff;
        border-radius: 6px;
        padding: 20px;
        margin: 16px 0;
        border-left: 4px solid #e2dd00;
      }

      .content-item {
        margin-bottom: 12px;
      }

      .content-label {
        font-weight: 800;
        color: #555555;
      }

      .content-value {
        margin-top: 4px;
      }

      /* Button */
      .button-container {
        margin: 24px 0;
        text-align: center;
      }

      .button {
        display: inline-block;
        background-color: #e2dd00;
        color: #2e3a45;
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 900;
      }

      /* Footer */
      .footer {
        background-color: #2e3a45;
        padding: 16px 24px;
        text-align: center;
        font-size: 14px;
        color: #fff;
      }

      .footer p {
        margin: 8px 0;
      }

      .social-links {
        margin: 16px 0;
      }

      .social-link {
        display: inline-block;
        margin: 0 8px;
      }

      /* Responsive */
      @media screen and (max-width: 600px) {
        .email-container {
          width: 100% !important;
        }

        .header,
        .content,
        .footer {
          padding: 16px !important;
        }

        .message-box {
          padding: 12px !important;
        }
      }
    </style>
  </head>
  <body>
    <div class="email-container">
      <div class="header">
        <img
          class="logo"
          src="https://cms.rajinout.co.in/storage/uploads/2025/03/27/rio-logo_uid_67e5c303f3728.png"
          alt="Logo"
          style="margin-bottom: 16px"
        />
        <h1>New Contact Form Submission</h1>
      </div>

      <div class="content">
        <p>Hi Admin,</p>
        <p>You have received a new message from your website&apos;s contact form.</p>

        <div class="content-item">
          <div class="content-label">From&colon;</div>
          <div class="content-value"><?php echo $name; ?></div>
        </div>

        <div class="content-item">
          <div class="content-label">Email&colon;</div>
          <div class="content-value"><?php echo $email; ?></div>
        </div>

        <div class="content-item">
          <div class="content-label">Phone:&colon;</div>
          <div class="content-value"><?php echo $phone; ?></div>
        </div>

        <div class="content-item">
          <div class="content-label">Message&colon;</div>
          <div class="message-box">
            <p><?php echo $message; ?></p>
          </div>
        </div>

        <div class="content-item">
          <div class="content-label">Submitted on&colon;</div>
          <div class="content-value"><?php echo date('l, F j, Y'); ?></div>
        </div>

        <div class="button-container">
          <a href="https://cms.rajinout.co.in" class="button">View in Dashboard</a>
        </div>

        <small style="color: #777">
          This is an automated notification. Please do not reply directly to
          this email.
        </small>
      </div>

      <div class="footer">
        <p>&copy; 2025 Raj-in-out. All rights reserved.</p>
        <p>
          <a
            href="https://rajinout.co.in/"
            style="color: #999; text-decoration: underline"
            >Manage email preferences</a
          >
        </p>
      </div>
    </div>
  </body>
</html>
