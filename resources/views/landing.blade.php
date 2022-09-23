<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
   </head>
<body>
  <div class="main-navbar bg-theme-black h-screen lg:h-auto text-gray-100 w-full fixed lg:static left-0 top-0 py-6 lg:py-0">
    <div class="container mx-auto px-1 lg:px-0">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between space-x-2">
        <div class="logo text-2xl font-black cursor-pointer w-full text-center lg:text-left">
          <span class=" crossbutton inline-block lg:hidden rotate-45 text-6xl font-thin absolute left-5 top-5 ">+</span>
          <span class="text-4xl lg:text-2xl">Panton</span>
        </div>
        <!--top navbar menu-->
        <nav class="navbar mt-3 lg:mt-0">
          <ul class="flex flex-col lg:flex-row lg:items-center">
            <li>
              <a href="#" class=" text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                Home
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                shop
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                Learn
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                Consult
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                Liecence
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-1 lg:p-3 hover:bg-black">
                <span>
                Setting
                </span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!--top navbar rightside-->
        <div class="flex items-center cursor-pointer ">
          <div class="flex items-center  whitespace-nowrap  space-x-4 ">
            <span class="hidden">Hello</span>
            <span class=" hover:bg-slate-400 transition-all duration-200">Yasir arfatse</span>
            <img src="/images/yasir.png" class="block rounded-full w-16 md:w-8" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
      <!--main container -->
  <div class=" hidden main-container mt-5">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="pageTitle text-3xl font-medium mb-5">
        <h1>Product</h1>
      </div>
      <!-- product -->
      <div class="product grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
       <!-- product -->
      <div class="productinfo border rounded">
        <div class="productimage h-48 bg-yellow-300"></div>
        <div class="productinfo p-3 space-y-px">
          <div class="p-heighlight text-red-200 font-semibold">New</div>
          <div class="p-title font-semibold text-lg text-theme-black">Book</div>
          <div class="p-descripion font-normal text-sm text-gray-700"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus quas quae sit</div>
          <div class="flex items-start">
            <div class="price font-semibold text-sm text-gray-600 ">AED</div>
            <div class="currency font-bold text-3xl text-theme-black">56</div>            
          </div>
        </div>
      </div>
       <!-- product -->
      </div>
    </div>
  </div>
</body>
</html>