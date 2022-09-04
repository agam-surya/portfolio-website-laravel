@extends('/layouts/admin-layout')
@section('main-content')

<section class="content">
<div class="col-lg-8">
  <form method="post" action="/skills" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" required autofocus>
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror

    <div class="mb-3">
      <label for="percent" class="form-label">percent value</label>
      <input type="number" class="form-control  @error('percent') is-invalid @enderror" id="percent" name="percent" required value="{{old('percent')}}">
      @error('github')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</section>
@endsection