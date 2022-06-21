<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Rohit Kumar" />
    <meta name="description" content="Your Project Description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon Start  -->
    <link rel="icon" href="src/icons/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="src/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="src/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="src/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="src/icons/site.webmanifest" />
    <!-- Favicon End  -->

    <title>Shopping Cart | Pizza Delivery</title>

    <!-- Output CSS -->
    <link rel="stylesheet" href="dist/css/style.css" />
    <!-- Customs JS  -->

    <!-- Box icon start -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Box icon end  -->

    <script src="src/js/index.js" defer></script>
  </head>

  <body>
    <header class="z-0 fixed top-0 w-full">
      <div class="container mx-auto px-8">
        <div
          class="bg-slate-100 flex items-center justify-between h-[15vh] px-4"
        >
          <a href="index.html">
            <img
              class="w-16 cursor-pointer"
              loading="lazy"
              src="src/images/logo.PNG"
              alt="pizza delivery logo"
              title="Our Brand"
            />
          </a>

          <nav>
            <ul
              class="hamburger-menu active sm:translate-x-0 bg-slate-200/40 backdrop-blur-xl sm:bg-transparent fixed top-0 right-0 bottom-0 left-20 sm:static sm:left-0 p-12 sm:p-0 flex flex-col sm:flex-row sm:items-center sm:justify-center gap-6 z-10 transition-transform duration-700 sm:transition-none"
            >
              <li>
                <a href="#" class="text-slate-500 font-medium">Menu</a>
              </li>
              <li>
                <a href="#" class="text-slate-500 font-medium">
                  Cart
                  <span class="btn py-0 px-1.5 text-xs font-medium">
                    6
                  </span></a
                >
              </li>
              <li>
                <a href="#" class="text-slate-500 font-medium">Profile</a>
              </li>
              <li>
                <a
                  href="index.html"
                  class="btn bg-white hover:bg-slate-800 hover:text-white transition-colors duration-700 text-black border border-slate-800 inline-block mr-0.5"
                  >Logout
                </a>
              </li>
            </ul>

            <div class="sm:hidden">
              <i class="hamburger bx bx-menu text-4xl relative z-20"></i>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <main class="-z-10 mt-32">
      <div class="container mx-auto px-8">
        <h1 class="text-4xl font-medium mb-4 border-b-2 pb-4">Shopping Cart</h1>

        <div class="border-b-2 pb-4 grid md:grid-cols-5 gap-2 md:gap-0">
          <img class="w-1/6" src="src/images/pizza.jpg" alt="pizza" />
          <h2 class="font-bold text-xl">Cheeseburger</h2>
          <span class="font-bold flex items-center">$18.3</span>
          <input
            id="text"
            name="text"
            type="text"
            autocomplete="text"
            required
            class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm -z-10"
            placeholder="Enter Quantity"
          />
          <div class="flex sm:justify-end">
            <button class="btn justify-end">Delete</button>
          </div>
        </div>

        <div class="py-4 grid md:grid-cols-5 gap-2 md:gap-0">
          <h2 class="text-2xl font-medium">Total</h2>
          <div></div>
          <span class="text-2xl font-bold">$18.3</span>
          <div></div>
          <div class="flex sm:justify-end">
            <a href="order-paid.html" class="btn justify-end">Checkout</a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
