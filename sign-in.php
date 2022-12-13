<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
    <script src="/ecommerce-website/dist/goBack.js"></script>
  </head>

  <body class="bg-white text-slate-900 antialiased">
    <main class="flex min-h-screen items-center">
      <div class="flex-1" role="grid">
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
              Sign in to your account
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

              <div>
                <button
                  class="block w-full rounded-lg bg-indigo-600 px-3 py-2 text-white"
                  name="log-in"
                  type="submit"
                >
                  Log in
                </button>
              </div>
            </form>

            <p class="mt-4">
              <?php
              require 'database.php';

              if (isset($_POST['log-in'])) {
                $email_address = $_POST['email-address'];
                $password = md5($_POST['password']);

                $login_query = mysqli_query(
                  $mysqli,
                  "SELECT * FROM `user_accounts` WHERE `email_address` = '$email_address' AND `password` = '$password'"
                );

                $result = mysqli_fetch_array($login_query);

                if ($result) {
                  echo 'Login successfully.';
                } else {
                  echo 'Username and password did not match.';
                }
              }
              ?>
            </p>
          </div>

          <div
            class="min-h-[320px] bg-sign-in bg-cover bg-center bg-no-repeat md:min-h-screen"
            role="gridcell"
          >
            <span class="sr-only">Sign in Banner</span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
