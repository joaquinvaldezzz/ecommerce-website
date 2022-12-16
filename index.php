<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eCommerce Website</title>
    <link rel="stylesheet" href="/ecommerce-website/dist/main.css" />
    <link rel="icon" href="/ecommerce-website/public/favicon.svg" />
  </head>

  <body class="min-h-screen bg-white text-slate-900 antialiased">
    <?php include 'includes/header.php'; ?>

    <main>
      <section class="overflow-hidden pt-8 sm:pt-12 md:pt-16 lg:pt-0">
        <div class="container">
          <div role="grid">
            <div class="grid lg:grid-cols-2 lg:items-center lg:gap-8" role="row">
              <div class="md:max-w-xl lg:max-w-none" role="gridcell">
                <h1 class="text-4xl font-extrabold tracking-tight lg:text-5xl xl:text-6xl">
                  Summer styles <br />
                  are finally here.
                </h1>
                <p class="mt-4 text-slate-500 md:text-lg xl:text-xl">
                  Our new summer collection will protect you from the harsh elements of a planet
                  that doesn't give a damn if you survive or die this year.
                </p>
                <div class="mt-4">
                  <a
                    class="inline-block rounded-lg bg-indigo-600 px-8 py-4 text-white focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2"
                    href="#collection"
                  >
                    Shop Collection
                  </a>
                </div>
              </div>

              <div
                class="-mt-14 -mr-64 sm:-mr-32 md:mr-0 lg:-mt-16 lg:-mr-20 2xl:mr-0"
                role="gridcell"
              >
                <div role="grid">
                  <div class="grid grid-cols-3 items-center gap-4 lg:gap-8" role="row">
                    <div class="grid gap-4 lg:gap-8" role="gridcell">
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/01.jpg"
                        alt=""
                      />
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/02.jpg"
                        alt=""
                      />
                    </div>

                    <div class="grid gap-4 lg:gap-8" role="gridcell">
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/03.jpg"
                        alt=""
                      />
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/04.jpg"
                        alt=""
                      />
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/05.jpg"
                        alt=""
                      />
                    </div>

                    <div class="grid gap-4 lg:gap-8" role="gridcell">
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/06.jpg"
                        alt=""
                      />
                      <img
                        class="rounded-lg"
                        src="/ecommerce-website/public/images/banner/07.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="my-8 sm:my-12 md:my-16 lg:my-16" id="collection">
        <div class="px-8 2xl:mx-auto 2xl:max-w-screen-2xl">
          <h2 class="text-2xl font-extrabold tracking-tight md:text-3xl">Trending shirts</h2>
          <div class="mt-8 grid gap-8" role="grid">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4" role="row">
              <div role="gridcell">
                <a href="#">
                  <img
                    class="rounded-lg"
                    src="/ecommerce-website/public/images/trending-products/tee-deep-forest.jpg"
                    alt="Deep Forest Tee"
                  />
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3>Men's Essential Tee</h3>
                      <div class="text-sm text-slate-500">Deep Forest</div>
                    </div>
                    <div class="font-bold">$29.00</div>
                  </div>
                </a>
              </div>

              <div role="gridcell">
                <a href="#">
                  <img
                    class="rounded-lg"
                    src="/ecommerce-website/public/images/trending-products/tee-canyon.jpg"
                    alt="Canyon Tee"
                  />
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3>Men's Essential Tee</h3>
                      <div class="text-sm text-slate-500">Canyon</div>
                    </div>
                    <div class="font-bold">$29.00</div>
                  </div>
                </a>
              </div>

              <div role="gridcell">
                <a href="/ecommerce-website/t-shirts/black-tee.php">
                  <img
                    class="rounded-lg"
                    src="/ecommerce-website/public/images/trending-products/tee-black.jpg"
                    alt="Black Tee"
                  />
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3>Men's Essential Tee</h3>
                      <div class="text-sm text-slate-500">Black</div>
                    </div>
                    <div class="font-bold">$29.00</div>
                  </div>
                </a>
              </div>

              <div role="gridcell">
                <a href="#">
                  <img
                    class="rounded-lg"
                    src="/ecommerce-website/public/images/trending-products/tee-sienna.jpg"
                    alt="Seinna Tee"
                  />
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3>Men's Essential Tee</h3>
                      <div class="text-sm text-slate-500">Sienna</div>
                    </div>
                    <div class="font-bold">$29.00</div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <p class="mt-8 text-sm text-slate-500">
            Images from <a class="font-bold" href="https://ugmonk.com" target="_blank">Ugmonk</a>
          </p>
        </div>
      </section>
    </main>
  </body>
</html>
