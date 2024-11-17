<div class="mt-4">
  
  @if($blogs) 
    <ul class="flex flex-col gap-1">
      @foreach( $blogs as $blog )
        <x-card :blog="$blog"/>
      @endforeach
      <div class="mt-2">
        {{ $blogs->links() }}
      </div>
    </ul>
  @else 
    <h1 class="text-1xl mt-5 font-medium">
      Oops! No blogs available.
    </h1>
    <a href="#" class="text-sm text-blue-700">Create a new blog here</a>
  @endif
</div>