<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('Partials.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              {{-- <h1 class="m-0">Starter Page</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('anggota.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Anggota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">

                <h4>Tambah Anggota</h4>

            </div>
          <div class="card-body">
           <form action="{{ route('anggota.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="nis">Nis</label>
                  <input type="text" name="nis" class="form-control mb-3" placeholder="nama" autocomplete="off" autofocus required>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control mb-3" placeholder="nama" autocomplete="off" autofocus required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Jenis Kelamin</label>
                    <select name="keterangan" id="" class="form-control">
                      <option value="L">Laki - Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>  
                <div class="form-group">
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" id="" class="form-control">
                        @foreach($datas as $data){
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>

                        }
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    {{-- <form action="upload.php" method="post" enctype="multipart/form-data"> --}}
                      <input type="file" name="foto" accept="image/*">
                      {{-- <input type="submit" value="Upload Foto"> --}}

                  </div>
                  <div class="form-group">
                    <label for="nama">No telephone</label>
                      <input type="text" name="no_telp" class="form-control mb-3" placeholder="No Telephone" autocomplete="off" autofocus required>
                  </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
        </div>
       
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Partials.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Partials.script')

</body>
</html>
