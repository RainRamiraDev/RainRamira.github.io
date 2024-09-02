<!-- <?php

<?php
  // Replace this with your real receiving email address
  $receiving_email_address = 'r.sannarain@gmail.com';

  // Validate that the POST data exists and is not empty
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Simple validation to check if the fields are not empty
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
      
      // Sanitize email and validate
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Set email headers
        $headers = "From: $name <$email>" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        
        // Combine the message into a well-structured email
        $full_message = "You have received a new message from your website contact form.\n\n";
        $full_message .= "Name: $name\n";
        $full_message .= "Email: $email\n";
        $full_message .= "Subject: $subject\n";
        $full_message .= "Message:\n$message\n";

        // Send the email using PHP's mail function
        $success = mail($receiving_email_address, $subject, $full_message, $headers);
        
        if ($success) {
          echo 'Your message has been sent successfully!';
        } else {
          echo 'There was a problem sending your message. Please try again later.';
        }

      } else {
        echo 'Invalid email address.';
      }
    } else {
      echo 'Please fill in all fields.';
    }
  } else {
    echo 'Invalid request method.';
  }
?>











//-------------------------------------------------------------------------------
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
// //?> -->
