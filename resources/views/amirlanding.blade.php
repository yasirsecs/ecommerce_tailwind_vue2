<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
    https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap
</head>
<body class="font-main">

    <div class="hidden md:block main-navbar bg-theme-black h-screen md:h-auto text-gray-100 py-6 md:py-0 fixed md:static w-full left-0 top-0">
      <div class="container mx-auto px-5 lg:px-0">
        <div class="select-none flex flex-col md:flex-row justify-between md:items-center">
          <div class="select-none logo font-black text-2xl select-none cursor-pointer w-full text-center md:text-left relative">
            <span id="closeButton" class="inline-block md:hidden select-none rotate-45 absolute left-5 -top-3 font-thin text-6xl">+</span>
            <span class="selecet-none">PANTONE</span>
          </div>
          <div class="navbar order-1 md:order-0">
            <ul class="flex flex-col md:flex-row md:items-center md:space-x-2">
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                </span>
                <span>Home</span>
              </a></li>
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </span>
                <span>Shop</span>
              </a></li>
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                </span>
                <span>Learn</span>
              </a></li>
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                  </svg>
                </span>
                <span>Consult</span>
              </a></li>
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                  </svg>
                </span>
                <span>License</span>
              </a></li>
              <li><a href="#" class="block font-medium text-gray-200 p-3 hover:bg-black hover:bg-opacity-25 transition-all duration-200 flex md:inline-block items-center space-x-2 md:space-x-0">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </span>
                <span>Setting</span>
              </a></li>
            </ul>
          </div>
          <div class="flex md:hidden lg:flex items-center space-x-3 p-[8px] cursor-pointer group order-0 md:order-1 mt-8 md:mt-0">
            <div class="group flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 relative">
              <div class="order-1 md:order-0 flex flex-col md:flex-row md:items-center w-full md:space-x-2 mt-8 md:mt-0 mr-2">
                <span class="block md:hidden font-thin md:px-5 lg:px-0">Hello,</span>
                <span class="block pr-2 whitespace-nowrap">Aamir Rehman</span>
              </div>
              <img src="./images/user.jpeg" class="order-0 md:order-1 w-16 md:w-8 rounded-full block" alt="user image">
              <ul class="hidden lg:group-hover:block z-10 md:group-hover:block whitespace-nowrap links md:absolute md:bg-white md:text-gray-900 md:top-[40px] md:right-0 md:border border-t-0 border-gray-300 rounded-b">
                <li> <a href="$" class="px-8 py-3 block hover:bg-gray-100">Profile</a> </li>
                <li> <a href="$" class="px-8 py-3 block hover:bg-gray-100">Sign Out</a> </li>
              </ul>
            </div>
          </div>
          <div class="order-2">
            <a href="#" class="p-3 block md:hidden hover:bg-black hover:bg-opacity-25 flex md:inline-block items-center space-x-2 md:space-x-0">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
              </span>
              <span>Logout</span>
            </a>
        </div>
        </div>
      </div>
    </div>
  
    <!-- fixed w-full h-screen overflow-y-hidden top-10 left-72 bg-white pl-8 pt-16 rounded-[30px] border -rotate-6 -->
  
    <div id="siteWrapper" class="site-wrapper pt-5 lg:mt-8">
  
      <div class="mobile-navbar-header block md:hidden">
        <div class="container mx-auto px-5 lg:px-0  flex items-center justify-between">
          <button id="burgerButton" class="text-gray-700 bg-gray-100 hover:bg-gray-200 p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
          <span class="selecet-none font-black text-gray-800 text-2xl cursor-pointer">PANTONE</span>
          <button id="searchButton" class="text-gray-700 bg-gray-100 hover:bg-gray-200 p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>
      </div>
      <!-- mobile nav header -->
  
  
    <div class="container mt-5 mx-auto px-5 lg:px-0">
        <div class="page-title text-3xl font-medium mb-5">
          <h1>Products</h1>
        </div>
        <!-- product-title -->
  
        <div class="products grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-64">
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-yellow-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-red-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-green-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-gray-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-blue-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-yellow-500"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-green-200"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-purple-400"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-pink-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-indigo-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-yellow-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-red-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-green-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-gray-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-blue-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-yellow-500"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-green-200"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-purple-400"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-pink-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
          <div class="product border rounded">
            <div class="product-image h-96 bg-indigo-300"></div>
            <!-- product image -->
            <div class="p-info p-3 space-y-px">
              <div class="p-highlight text-red-500 font-semibold">New</div>
              <div class="p-title font-semibold text-lg text-black">Table Lamp</div>
              <p class="p-description font-medium text-sm text-gray-700">
                culpa necessitatibus impedit tium
              </p>
              <div class="p-price flex items-start">
                <div class="block currency text-sm mr-1 font-semibold mt-1 text-gray-600">AED</div>
                <div class="block font-bold text-gray-900 price text-3xl">23</div>
              </div>
              <!-- product info -->
            </div>
            <!-- product-image -->
          </div>
          <!-- product -->
  
  
        </div>
        <!-- products -->
    </div>
    <!-- container -->
    </div>
    <!-- site-wrapper -->
  
   {{--  <script src="js/script.js"></script> --}}
  </body>

  
</html>
