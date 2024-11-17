<li class="bg-gray-100 flex p-2 items-center gap-3">
   <div class="w-[40px] rounded-lg bg-gray-300 text-gray-700 font-bold text-2xl text-center p-4">
     {{ $blog->title[0] }}
    </div>
   <div class="flex flex-col gap-1">
      <h1 class="text-md text-gray-500">{{ $blog->title }}</h1>
      <div class="text-xs text-gray-600 font-bold">
         <i class="bi bi-person-circle mr-1"></i> {{ $blog->author->name }}
      </div>
   </div>
</li>