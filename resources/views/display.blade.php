<div>
    <h1>My Album</h1>
    @foreach($imageData as $myImages)
    <img style="width:200px, margin:3px" src="{{$myImages->path)}}">
    @endforeach
</div>
