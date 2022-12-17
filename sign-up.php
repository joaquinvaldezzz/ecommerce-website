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
                  name="email-address"
                  type="email"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">First name</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  name="first-name"
                  type="text"
                />
              </label>

              <label class="block">
                <p class="text-sm">
                  <span class="font-semibold">Last name </span>
                  <span class="text-slate-500">(Optional)</span>
                </p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  name="last-name"
                  type="text"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">Password</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  name="password"
                  type="password"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">Confirm Password</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
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
              $first_name = $_POST['first-name'];
              $last_name = $_POST['last-name'];
              $password = $_POST['password'];
              $confirm_password = $_POST['confirm-password'];
              $date_created = date('Y-m-d H:i:s');
              ?>

            <?php if (
              empty($email) ||
              empty($first_name) ||
              empty($password) ||
              empty($confirm_password)
            ): ?>
              <div class="mt-4 rounded-lg border border-red-300 bg-red-100 p-4 text-sm text-red-500">
                <p>Please fill in all fields.</p>
              </div>
            <?php elseif ($password != $confirm_password): ?>
              <div class="mt-4 rounded-lg border border-red-300 bg-red-100 p-4 text-sm text-red-500">
                <p>Passwords do not match.</p>
              </div>
            <?php elseif (strlen($password) < 8): ?>
              <div class="mt-4 rounded-lg border border-red-300 bg-red-100 p-4 text-sm text-red-500">
                <p>Password must be at least 8 characters.</p>
              </div>
            <?php else:
              $insert_query =
                "INSERT INTO `user_accounts` (`first_name`, `last_name` , `email_address`, `password`, `date_created`) VALUES ('$first_name', '$last_name', '$email', '" .
                md5($password) .
                "', '$date_created')";
              $email_query = mysqli_query(
                $mysqli,
                "SELECT * FROM `user_accounts` WHERE `email_address` = '$email'"
              );

              $email_result = mysqli_fetch_array($email_query);

              if ($email_result['email_address'] === $email) {
                include 'src/alerts/email-already-existing.html';
              } else {
                include 'src/alerts/success-sign-up.html';
                mysqli_query($mysqli, $insert_query);
              }
              ?>
            <?php endif; ?>
            <?php
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
