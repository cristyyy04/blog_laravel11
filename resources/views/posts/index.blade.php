<x-layout meta-title="Nuestro blog">
  
 
   <a href="{{ route('posts.create') }}"> Create new post</a> 
   <h1> Blog</h1>
   @foreach ($posts as $post)

  <h2>  <a href="{{ route('posts.show',$post) }}"> {{  $post->title }}</a> 
</h2> &nbsp;
<a href="{{route('posts.edit',$post)}}">Edit</a>
   @endforeach
</x-layout>