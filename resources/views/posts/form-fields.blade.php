<label for=""> 
    {{ __('Title')}}
            <input type="text" name="title" value="{{ old('title',$post->title)}}">
            @error('title')
            <br>
            <small style="color:red">{{$message}}</small>
            @enderror
        </label>
        <br>
        <label for="">{{ __('Body')}}
    <textarea name="body"  cols="30" rows="10">{{ old('body',$post->body)}}</textarea></label>
    @error('body')
       
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror

  