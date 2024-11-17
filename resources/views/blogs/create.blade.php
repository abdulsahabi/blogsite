<x-layout >
  <h2>Create new post</h2>
  <form method="post" action="/blog/create">
     @csrf
     <label>Title</label><br>
     <input type="text" name="title"><br/><br/>
     <button type="submit">Create</button>
  </form>
</x-layout>