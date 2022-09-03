@extends('/layouts/admin-layout')
@section('main-content')

<section class="content">
<div class="col-lg-8">
  <form method="post" action="/portfolio/{{$portfolio->id}}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $portfolio->name)}}" required autofocus>
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror

    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" name="type" required value="{{old('type', $portfolio->type)}}">
      @error('type')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>


    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <img class="img-preview img-fluid mb-3 col-sm-6">
      <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
      @error('image')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      @error('description')
      <div class="text-danger"></div>
      {{$message}}
      @enderror
      <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
      <input id="description" type="hidden" name="description" required value="{{old('description', $portfolio->description)}}">
      <trix-editor input="description"></trix-editor>
    </div>

    <div class="mb-3">
      <label for="github" class="form-label">github</label>
      <input type="text" class="form-control  @error('github') is-invalid @enderror" id="github" name="github" required value="{{old('github', $portfolio->github)}}">
      @error('github')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>
</section>
<script>
  const title = document.querySelector('#title');

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection