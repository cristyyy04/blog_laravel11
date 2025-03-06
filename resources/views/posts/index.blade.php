<x-layout meta-title="Nuestro blog" meta-description="blogg">
  
 
   <div class="mx-auto mt-4 max-w-6xl">
      <h1 
      class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
Blog
   </h1>
   </div>
   <a href="{{ route('posts.create') }}"> Create new post</a> 
 
   @foreach ($posts as $post)

  <h2>  <a href="{{ route('posts.show',$post) }}"> {{  $post->title }}</a> 
</h2> &nbsp;
<a href="{{route('posts.edit',$post)}}">Edit</a>
<form method="POST" action="{{ route('posts.destroy',$post) }}">
   @csrf @method('DELETE')
<button>Eliminar</button>
</form>
   @endforeach
</x-layout>