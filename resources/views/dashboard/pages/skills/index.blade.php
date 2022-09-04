@extends('/layouts/admin-layout')
@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          @if(Session::Has('success'))
          <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="card-header">
            <h3 class="card-title">
              <a href="/skills/create" type="button" class="btn btn-primary btn-sm">
                <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data
              </a>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>Nama</th>
                  <th width="50%">Nilai</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($skills as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>

                  <td>{{ $data->name }}</td>
                  <td>{{$data->percent}}</td>
                  <td>
                    <form action="/skills/{{$data->id}}" method="post">
                      @csrf
                      @method('delete')
                      <a href="/skills/{{$data->id}}/edit" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i>Edit
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