<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
  </head>

  <body>
    <?php include 'includes/header.php'; ?>

    <main>
      <section class="p-8 sm:pb-12 md:pb-16">
        <h1 class="text-2xl font-extrabold tracking-tight lg:text-3xl">Shopping Cart</h1>
        <div class="mt-8 md:mx-auto md:max-w-lg lg:mx-0 lg:max-w-none" role="grid">
          <div class="grid gap-8 lg:grid-cols-2 xl:grid-cols-3" role="row">
            <div class="xl:col-span-2" role="gridcell">
              <div class="space-y-8 divide-y divide-slate-300">
                <div class="flex">
                  <div class="w-32 lg:w-40 xl:w-64">
                    <img
                      class="rounded-lg"
                      src="/ecommerce-website/public/images/trending-products/tee-deep-forest.jpg"
                      alt="Deep Forest Tee"
                    />
                  </div>

                  <div class="ml-4 flex flex-1 flex-col">
                    <div class="flex justify-between">
                      <div>
                        <h2 class="font-semibold">Men's Essential Tee</h2>
                        <div class="mt-1 flex items-center space-x-2">
                          <span class="text-sm text-slate-500">Deep Forest</span>
                          <span class="select-none text-sm text-slate-300">|</span>
                          <span class="text-sm text-slate-500">Large</span>
                        </div>
                        <div class="mt-1 text-sm font-bold">$29.00</div>
                      </div>

                      <div class="hidden sm:relative sm:flex sm:h-min">
                        <select
                          class="relative z-10 cursor-pointer appearance-none rounded-lg border bg-transparent py-2 pl-4 pr-8 text-sm focus:outline-none"
                          id="quantity"
                        >
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>

                        <svg
                          class="h-4 w-4 text-slate-500 sm:absolute sm:top-1/2 sm:right-2 sm:-translate-y-1/2"
                          fill="none"
                          viewBox="0 0 17 16"
                        >
                          <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13.167 6 8.5 10.667 3.833 6"
                          />
                        </svg>
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

                <div class="flex pt-8">
                  <div class="w-32 lg:w-40 xl:w-64">
                    <img
                      class="rounded-lg"
                      src="/ecommerce-website/public/images/trending-products/tee-black.jpg"
                      alt="Black Tee"
                    />
                  </div>

                  <div class="ml-4 flex flex-1 flex-col">
                    <div class="flex justify-between">
                      <div>
                        <h2 class="font-semibold">Men's Essential Tee</h2>
                        <div class="mt-1 flex items-center space-x-2">
                          <span class="text-sm text-slate-500">Black</span>
                          <span class="select-none text-sm text-slate-300">|</span>
                          <span class="text-sm text-slate-500">Large</span>
                        </div>
                        <div class="mt-1 text-sm font-bold">$29.00</div>
                      </div>

                      <div class="hidden sm:relative sm:flex sm:h-min">
                        <select
                          class="relative z-10 cursor-pointer appearance-none rounded-lg border bg-transparent py-2 pl-4 pr-8 text-sm focus:outline-none"
                          id="quantity"
                        >
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>

                        <svg
                          class="h-4 w-4 text-slate-500 sm:absolute sm:top-1/2 sm:right-2 sm:-translate-y-1/2"
                          fill="none"
                          viewBox="0 0 17 16"
                        >
                          <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13.167 6 8.5 10.667 3.833 6"
                          />
                        </svg>
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
