<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="dist/main.css" />
    <link rel="icon" href="public/favicon.svg" />
    <script src="dist/goBack.js"></script>
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
            require 'database.php';

            if (isset($_POST['sign-up'])) {
              $email = $_POST['email-address'];
              $password = $_POST['password'];
              $confirm_password = $_POST['confirm-password'];
              $date_created = date('Y-m-d H:i:s');

              if ($password != $confirm_password) {
                echo '<p class="mt-4">Passwords do not match.</p>';
              } else {
                $query =
                  "INSERT INTO `user_accounts` (`email_address`, `password`, `date_created`) VALUES ('$email', '" .
                  md5($password) .
                  "', '$date_created')";
                $result = mysqli_query($mysqli, $query);
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

