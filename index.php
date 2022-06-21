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

    <title>Pizza Delivery | Pizza Delivery</title>

    <!-- Output CSS -->
    <link rel="stylesheet" href="dist/css/style.css" />
    <!-- Customs JS  -->
    <script src="src/js/index.js" defer></script>
  </head>
  <body>
    <header class="mb-7">
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

          <div>
            <a
              href="sign-up.html"
              class="btn bg-white hover:bg-slate-800 hover:text-white transition-colors duration-700 text-black border border-slate-800 inline-block mr-0.5"
              >Sign up
            </a>
            <a
              href="login.html"
              class="btn bg-white hover:bg-slate-800 hover:text-white transition-colors duration-700 text-black border border-slate-800 inline-block ml-0.5"
              >Login
            </a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="container mx-auto px-8">
        <div
          class="h-[78vh] sm:h-[70vh] bg-slate-200 rounded p-5 py-8 sm:py-24 w-full"
        >
          <div class="border border-b-slate-300">
            <h1 class="text-6xl font-normal">Pizza Delivery</h1>
            <p class="py-8">
              Welcome to pizza delivery service. This the pizza when you may
              choose the most delicious pizza like you from wide variety of
              options!
            </p>
          </div>

          <div>
            <p class="pt-6 pb-4 font-medium">
              We're performing delivery free of charge in case if you order is
              higher then 20$
            </p>
            <a href="#" class="btn flex items-center justify-center"
              >Sign In and Order</a
            >
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
