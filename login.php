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

    <title>Login | Pizza Delivery</title>

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
              class="btn hover:bg-slate-800 hover:text-white transition-colors duration-700 bg-white text-black border border-slate-800 inline-block mr-0.5"
              >Sign up
            </a>
          </div>
        </div>
      </div>
    </header>

    <form class="container mx-auto px-8">
      <h1 class="text-4xl font-medium mb-4">Login</h1>
      <div>
        <input
          id="email-address"
          name="email"
          type="email"
          autocomplete="email"
          required
          class="login-input p-3"
          placeholder="Email address"
        />
      </div>
      <div class="mt-4 mb-7">
        <input
          id="password"
          name="password"
          type="password"
          autocomplete="current-password"
          required
          class="login-input p-3"
          placeholder="Password"
        />
      </div>
      <a href="menu-list.html" class="btn inline-block">Login</a>
    </form>
  </body>
</html>
