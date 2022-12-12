<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <link rel="stylesheet" href="dist/main.css" />
    <link rel="icon" href="public/favicon.svg" />
  </head>

  <body>
    <p>
      <?php
      require 'database.php';

      if (isset($_POST['sign-up'])) {
        $email = $_POST['email-address'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $date_created = date('m-d-Y H:i:s');

        if ($password != $confirm_password) {
          echo '<p class="mt-4">Passwords do not match.</p>';
        }
        $query = "INSERT INTO `user_accounts` (`email_address`, `password`, `date_created`) VALUES ('$email', '$password', '$date_created')";
        $result = mysqli_query($connect, $query);

        if ($result) {
          echo 'Nice';
        } else {
          echo 'Meh';
        }
      }
      ?>
    </p>
  </body>
</html>


