<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle ?? 'Default Title'}}</title>
<meta name="description" content="{{$metaTitle ?? 'Default description'}}">
</head>
<body>
 <x-partials.nav/>
{{ $slot }}
@if (isset($sidebar))
    <div id="sidebar">
<h3>Sidebar</h3>
<div>content</div>
</div>
    
@endif

</body>
</html>