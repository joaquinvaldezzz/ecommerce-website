<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
  </head>

  <body class="bg-white text-slate-900 antialiased">
    <?php include 'includes/header.php'; ?>

    <main>
      <section class="p-8 sm:pb-12 md:pb-16">
        <h1 class="text-2xl font-extrabold tracking-tight lg:text-3xl">Shopping Cart</h1>
        <div class="mt-8 md:mx-auto md:max-w-lg lg:mx-0 lg:max-w-none" role="grid">
          <div class="grid gap-8 lg:grid-cols-2 xl:grid-cols-3" role="row">
            <div class="xl:col-span-2" role="gridcell">
              <?php
              include 'includes/db_controller.php';

              $db_handle = new DBController();
              $cart_items = $db_handle->run_query('SELECT * FROM shopping_cart');
              ?>

              <div class="space-y-8 divide-y divide-slate-300 children:pt-8">
                <?php if (empty($cart_items)): ?>
                  <p>Your cart is empty.</p>
                <?php else: ?>
                  <?php foreach ($cart_items as $key => $value): ?>
                  <div class="flex">
                    <div class="w-32 lg:w-40 xl:w-64">
                      <img
                        class="rounded-lg"
                        src="<?php echo $cart_items[$key]['item_image']; ?>"
                        alt="<?php echo $cart_items[$key]['item_color']; ?> Tee"
                      />
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div class="flex justify-between">
                        <div>
                          <h2 class="font-semibold">
                            <?php echo $cart_items[$key]['item_name']; ?>
                          </h2>
                          <div class="mt-1 flex items-center space-x-2">
                            <span class="text-sm text-slate-500">
                              <?php echo $cart_items[$key]['item_color']; ?>
                            </span>
                            <span class="select-none text-sm text-slate-300">|</span>
                            <span class="text-sm text-slate-500">
                              <span>Quantity: </span>
                              <?php echo $cart_items[$key]['item_quantity']; ?>
                            </span>
                          </div>
                          <div class="mt-1 text-sm font-bold">
                            $<?php echo $cart_items[$key]['item_price']; ?>
                          </div>
                        </div>


                        <button class="h-min">
                          <svg class="h-6 w-6 text-slate-400" fill="none" viewBox="0 0 24 24">
                            <path
                              stroke="currentColor"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="m6 6 12 12M6 18 18 6 6 18Z"
                            />
                          </svg>
                        </button>
                      </div>

                      <div class="mt-auto flex items-center">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 20 20">
                          <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4.167 10.833 7.5 14.167l8.333-8.334"
                          />
                        </svg>
                        <span class="ml-2 text-sm">In stock</span>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>

            <div role="gridcell">
              <div class="rounded-lg bg-slate-100 p-8">
                <h3 class="text-xl font-extrabold lg:text-2xl">Order Summary</h3>
                <div class="mt-6 space-y-4">
                  <div class="flex items-center justify-between">
                    <span class="text-sm text-slate-500">Subtotal</span>
                    <span class="text-sm font-semibold">$87.00</span>
                  </div>

                  <hr class="border-slate-300" />

                  <div class="flex items-center justify-between">
                    <span class="text-sm text-slate-500">Shipping Fee</span>
                    <span class="text-sm font-semibold">$5.00</span>
                  </div>

                  <hr class="border-slate-300" />

                  <div class="flex items-center justify-between">
                    <span class="font-bold">Order Total</span>
                    <span class="font-bold">$92.00</span>
                  </div>
                </div>

                <div class="mt-6">
                  <button class="block w-full rounded-lg bg-indigo-600 px-4 py-2 text-white">
                    Check out
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
