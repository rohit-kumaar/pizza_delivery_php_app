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

    <title>Sign Up | Pizza Delivery</title>

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
        <div class="bg-slate-200 p-5">
          <div class="mt-10 sm:mt-0 mb-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Personal Information
                  </h3>
                  <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                  </p>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" enctype="multipart/form-data">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label
                            for="first-name"
                            class="block text-sm font-medium text-gray-700"
                            >First name
                            <span class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="first-name"
                            id="first-name"
                            autocomplete="given-name"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label
                            for="last-name"
                            class="block text-sm font-medium text-gray-700"
                            >Last name<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="last-name"
                            id="last-name"
                            autocomplete="family-name"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label
                            for="email-address"
                            class="block text-sm font-medium text-gray-700"
                            >Email address<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="email-address"
                            id="email-address"
                            autocomplete="email"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                            >Password<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="password"
                            name="password"
                            id="password"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label
                            for="country"
                            class="block text-sm font-medium text-gray-700"
                            >Country</label
                          >
                          <select
                            id="country"
                            name="country"
                            autocomplete="country-name"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          >
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="col-span-6">
                          <label
                            for="street-address"
                            class="block text-sm font-medium text-gray-700"
                            >Street address<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="street-address"
                            id="street-address"
                            autocomplete="street-address"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label
                            for="city"
                            class="block text-sm font-medium text-gray-700"
                            >City<span class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="city"
                            id="city"
                            autocomplete="address-level2"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label
                            for="region"
                            class="block text-sm font-medium text-gray-700"
                            >State / Province<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="region"
                            id="region"
                            autocomplete="address-level1"
                            class="sign-up-input"
                          />
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label
                            for="postal-code"
                            class="block text-sm font-medium text-gray-700"
                            >ZIP / Postal code<span
                              class="text-red-700 font-bold text-lg"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            name="postal-code"
                            id="postal-code"
                            autocomplete="postal-code"
                            class="sign-up-input"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button
                        type="submit"
                        name="submit-personal-info"
                        class="btn"
                      >
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-400"></div>
            </div>
          </div>

          <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Profile
                  </h3>
                  <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly so be careful
                    what you share.
                  </p>
                </div>
              </div>

              <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" enctype="multipart/form-data">
                  <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                      <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Photo
                        </label>
                        <div class="mt-1 flex items-center">
                          <span
                            class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100"
                          >
                            <svg
                              class="h-full w-full text-gray-300"
                              fill="currentColor"
                              viewBox="0 0 24 24"
                            >
                              <path
                                d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                              />
                            </svg>
                          </span>
                          <button
                            type="button"
                            class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                          >
                            Change
                          </button>
                        </div>
                      </div>

                      <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Cover photo
                        </label>
                        <div
                          class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                        >
                          <div class="space-y-1 text-center">
                            <svg
                              class="mx-auto h-12 w-12 text-gray-400"
                              stroke="currentColor"
                              fill="none"
                              viewBox="0 0 48 48"
                              aria-hidden="true"
                            >
                              <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                              <label
                                for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                              >
                                <span>Upload a file</span>
                                <input
                                  id="file-upload"
                                  name="file-upload"
                                  type="file"
                                  class="sr-only"
                                />
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                              PNG, JPG, GIF up to 10MB
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="btn">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
