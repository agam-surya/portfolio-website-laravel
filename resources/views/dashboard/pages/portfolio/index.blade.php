@extends('/layouts/admin-layout')
@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          @if(Session::Has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
          @endif
          <div class="card-header">
            <h3 class="card-title">
              <a href="/portfolio/create" type="button" class="btn btn-primary btn-sm">
                <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data partner
              </a>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>Gambar</th>
                  <th width="50%">Judul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($portfolio as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>

                  <td><img src="{{asset('storage/'.$data->image)}}" width="80px" class="img-thumbnail"></td>
                  <td>{{ $data->name }}</td>
                  <td>
                    <form action="/portfolio/{{$data->id}}" method="post">
                      @csrf
                      @method('delete')
                      <a href="/portfolio/{{$data->id}}/edit" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i>Edit
                      </a>

                      <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i>Hapus</button>
                    </form>
                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection