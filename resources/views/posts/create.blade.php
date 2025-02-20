<x-layout meta-title="Create new post">
   
   <form method="POST" action="{{ route('posts.store') }}">
    @csrf
    @include('posts.form-fields')
    <input type="submit" value="{{ __('Send') }}">
   </form>
   <a href="{{route('posts.index')}}">{{ __('Back') }}</a>
    </x-layout>