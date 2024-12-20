<div>
    <h1>Upload Image</h1>
    <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Attach images</h3>
        <input type="file" name="file">
        <br><br>
        <button type="submit">Upload</button>
    </form>
</div>
