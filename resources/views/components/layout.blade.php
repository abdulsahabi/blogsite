<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel app</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body class="bg-gradient-to-r from-stone-50 to-blue-100">
   <header class="h-[80px] w-screen p-4 fixed bg-transparent flex items-center justify-between inset-0 backdrop-blur-sm border-b z-10">
     <h2 class="text-2xl text-blue-600 font-serif font-bold">
       <a href="/">BlogSite</a>
     </h2>
     
     <div class="flex space-x-1">
       @guest
       <a href="#" class="text-sm bg-blue-600 text-gray-50 rounded-md py-1 px-2">Register</a>
       <a href="#" class="text-sm bg-blue-600 text-gray-50 rounded-md py-1 px-2"
       >Login</a>
       @else
       <x-avatar />
       @endguest
     </div>
   </header>
   
   
    <main class="max-w-700 mx-auto p-5 mt-[80px]">
      {{ $slot }}
    </main>
    
    <script>
          alert('Javascript connected...')
    </script>
  </body>
</html>