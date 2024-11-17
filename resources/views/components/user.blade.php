@php
   $name = $attributes->get('author')["name"];
   $age = $attributes->get('author')["age"];
@endphp

<div>
  <h3>Author: {{ $name }} </h3>
  <h3>Age: {{ $age }} </h3>
  <a href="/{{ $attributes->get('id') }}">View detail</a>
</div>