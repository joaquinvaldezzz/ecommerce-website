<header>
  <div class="bg-indigo-600 px-8 py-2">
    <p class="text-center text-sm text-white">Get free delivery on orders over $100</p>
  </div>

  <nav
    class="mx-8 flex items-center border-b border-slate-300 py-6 2xl:mx-auto 2xl:max-w-screen-2xl"
  >
    <button class="md:hidden">
      <svg
        class="h-6 w-6 text-slate-500"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <div class="ml-4">
      <a class="text-sm" href="/ecommerce-website/">eCommerce Website</a>
    </div>

    <div class="ml-auto flex items-center">
      <?php session_start(); ?>
      <?php if (!isset($_SESSION['first_name'])): ?>
        <div class="hidden md:flex md:items-center">
          <a class="text-sm font-medium" href="/ecommerce-website/sign-in.php">Sign in</a>
          <span class="select-none text-sm text-slate-300 md:mx-6 lg:mx-8">|</span>
          <a class="text-sm font-medium" href="/ecommerce-website/sign-up.php">Create an account</a>
        </div>
      <?php else: ?>
        <div class="hidden md:flex md:items-center">
          <p class="text-sm font-medium">Hello, <?php echo $_SESSION['first_name']; ?>!</p>
          <span class="select-none text-sm text-slate-300 md:mx-6 lg:mx-8">|</span>
          <a class="text-sm font-medium" href="/ecommerce-website/sign-out.php">Sign out</a>
        </div>

        <div class="flex items-center md:ml-6 lg:ml-8">
          <a class="flex items-center" href="/ecommerce-website/shopping-cart.php">
            <svg class="h-5 w-5 text-slate-500" fill="none" viewBox="0 0 20 20">
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13.333 9.167V5.833a3.333 3.333 0 0 0-6.666 0v3.334h6.666ZM4.167 7.5h11.666l.834 10H3.333l.834-10Z"
              />
            </svg>
            <div class="ml-2 text-sm font-medium">
              <?php
              require 'database.php';

              $fetch_query = mysqli_query(
                $mysqli,
                'SELECT COUNT(item_id) as total FROM shopping_cart'
              );
              $fetched_result = mysqli_fetch_array($fetch_query);

              if (mysqli_num_rows($fetch_query) > 0) {
                echo $fetched_result['total'];
              } else {
                echo '0';
              }
              ?>
            </div>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</header>
