<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
    <script src="/ecommerce-website/dist/goBack.js"></script>
  </head>

  <body class="bg-white text-slate-900 antialiased">
    <main>
      <div role="grid">
        <div class="grid grid-cols-1 md:grid-cols-2 md:items-center md:gap-8" role="row">
          <div class="p-8 md:pr-0 lg:mx-auto lg:w-full lg:max-w-sm lg:pl-0" role="gridcell">
            <button class="flex items-center" id="go-back">
              <svg
                class="h-6 w-6 text-slate-500"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m15 19-7-7 7-7" />
              </svg>
              <span class="ml-1 text-sm text-slate-500">Back</span>
            </button>

            <h1 class="mt-8 text-2xl font-extrabold tracking-tight lg:text-3xl">
              Create an account
            </h1>

            <form class="mt-6 space-y-6" method="post">
              <label class="block">
                <p class="text-sm font-semibold">Email address</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  id="email-address"
                  name="email-address"
                  type="email"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">Password</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  id="password"
                  name="password"
                  type="password"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">Confirm Password</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  id="confirm-password"
                  name="confirm-password"
                  type="password"
                />
              </label>

              <div>
                <button
                  class="block w-full rounded-lg bg-indigo-600 px-3 py-2 text-white"
                  name="sign-up"
                  type="submit"
                >
                  Sign up
                </button>
              </div>
            </form>
            <?php
            require 'includes/database.php';

            if (isset($_POST['sign-up'])) {
              $email = $_POST['email-address'];
              $password = $_POST['password'];
              $confirm_password = $_POST['confirm-password'];
              $date_created = date('Y-m-d H:i:s');

              // Check if all fields are filled in
              if (empty($email) || empty($password) || empty($confirm_password)) {
                echo '<p class="mt-4">Please fill in all fields.</p>';
              }
              // Checks if passwords match
              elseif ($password != $confirm_password) {
                echo '<p class="mt-4">Passwords do not match.</p>';
              }
              // Checks if password is at least 8 characters
              elseif (strlen($password) < 8) {
                echo '<p class="mt-4">Password must be at least 8 characters.</p>';
              }
              // Proceeds to create account
              else {
                // INSERT query
                $insert_query =
                  "INSERT INTO `user_accounts` (`email_address`, `password`, `date_created`) VALUES ('$email', '" .
                  md5($password) .
                  "', '$date_created')";

                // SELECT query
                $email_query = mysqli_query(
                  $mysqli,
                  "SELECT * FROM `user_accounts` WHERE `email_address` = '$email'"
                );

                // Fetches result
                $email_result = mysqli_fetch_array($email_query);

                // Checks if email address already exists
                if ($email_result['email_address'] === $email) {
                  echo '<p class="mt-4">Email address already exists.</p>';
                }
                // Otherwise, create an account
                else {
                  echo '<p class="mt-4">Account created successfully.</p>';
                  mysqli_query($mysqli, $insert_query);
                }
              }
            }
            ?>
          </div>

          <div
            class="min-h-[320px] bg-create-an-account bg-cover bg-center bg-no-repeat md:min-h-screen"
            role="gridcell"
          >
            <span class="sr-only">Sign up Banner</span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
