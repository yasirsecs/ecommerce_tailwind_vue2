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
  <div class="main-navbar bg-theme-black h-auto text-gray-100 w-full">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex items-center justify-between space-x-2">
        <div class="logo text-2xl font-black cursor-pointer w-full"><span>Panton</span></div>

        <nav class="navbar  ">
          <ul class="flex items-center">
            <li>
              <a href="#" class=" text-gray-200 w-full p-3 hover:bg-black">
                <span>
                Home
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-3 hover:bg-black">
                <span>
                shop
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-3 hover:bg-black">
                <span>
                Learn
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-3 hover:bg-black">
                <span>
                Consult
                </span>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-200 w-full p-3 hover:bg-black">
                <span>
                Liecence
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="block text-medium text-gray-200 w-full p-3 hover:bg-black">
                <span>
                Setting
                </span>
              </a>
            </li>
           
          </ul>
        </nav>
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
</body>
</html>