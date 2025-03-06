<x-layout :meta-title="$post->title" meta-description="blogg">
    <form method="POST" action="{{ route('posts.update',$post) }}">
        @csrf @method('PATCH')
      @include('posts.form-fields')
      <input type="submit" value="{{ __('Send') }}">
       </form>
    <a href="{{route('posts.index')}}">{{ __('Back') }}</a>
    </x-layout>