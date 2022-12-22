<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
    <script src="/ecommerce-website/dist/goBack.js"></script>
  </head>

  <body class="bg-white text-slate-900 antialiased">
    <main class="flex min-h-screen items-center">
      <div class="flex-1" role="grid">
        <div class="grid grid-cols-1 md:grid-cols-2 md:items-center md:gap-8" role="row">
          <div class="p-8 md:pr-0 lg:mx-auto lg:w-full lg:max-w-lg" role="gridcell">
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
              Contact us
            </h1>

            <form class="mt-6 space-y-6" method="post">
              <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
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
              </div>

              <label class="block">
                <p class="text-sm font-semibold">Email address</p>
                <input
                  class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  name="email-address"
                  type="email"
                />
              </label>

              <label class="block">
                <p class="text-sm font-semibold">Message</p>
                <textarea
                  class="mt-2 block h-48 w-full rounded-lg border border-slate-300 px-3 py-2 focus:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2"
                  name="message"
                  type="text"
                ></textarea>
              </label>

              <div>
                <button
                  class="block w-full rounded-lg bg-indigo-600 px-3 py-2 text-white"
                  name="log-in"
                  type="submit"
                >
                  Let's talk
                </button>
              </div>
            </form>

            <p class="mt-4">
              <?php
              require 'includes/database.php';
              date_default_timezone_set('Asia/Manila');
              ?>

              <?php if (isset($_POST['log-in'])): ?>
                <?php
                $first_name = $_POST['first-name'];
                $last_name = $_POST['last-name'];
                $email_address = $_POST['email-address'];
                $message = $_POST['message'];
                $date_sent = date('Y-m-d H:i:s');
                ?>

                <?php if (empty($first_name) || empty($email_address) || empty($message)): ?>
                  <div class="mt-4 rounded-lg border border-red-300 bg-red-100 p-4 text-sm text-red-500">
                    <p>Please fill in all fields.</p>
                  </div>
                <?php else: ?>
                  <?php
                  $query = "INSERT INTO contact_us (contact_first_name, contact_last_name, contact_email, contact_message, date_sent) VALUES ('$first_name', '$last_name', '$email_address', '$message', '$date_sent')";
                  $result = mysqli_query($mysqli, $query);
                  ?>
                  <?php if ($result): ?>
                    <div class="mt-4 rounded-lg border border-green-300 bg-green-100 p-4 text-sm text-green-500">
                      <p>Message sent!</p>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endif; ?>

            </p>
          </div>

          <div
            class="min-h-[320px] bg-sign-in bg-cover bg-center bg-no-repeat md:min-h-screen"
            role="gridcell"
          ></div>
        </div>
      </div>
    </main>
  </body>
</html>
