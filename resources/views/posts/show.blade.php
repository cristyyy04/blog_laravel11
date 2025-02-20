<x-layout :meta-title="$post->title">
<h1>{{$post->title}}</h1>
<h1>{{$post->body}}</h1>
<a href="{{route('posts.index')}}">{{ __('Back') }}</a>

</x-layout>