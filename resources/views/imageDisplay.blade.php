<div>
    <h1>List of all Images</h1>
    <button><a href="/imageupload">Image Upload</a>
    </button>
    <br>
    <br>
    @foreach($imgData as $img)
    <img style="width:400px; margin:10px;" src="{{url('storage/public/'.$img->path)}}" alt="">
    @endforeach
    <br>
    <br>
    
</div>
