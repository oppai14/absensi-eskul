
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
              <li class="breadcrumb-item"><a href="{{ route('absen.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Absen </li>
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

                <h3>Edit absen</h3>

            </div>
          <div class="card-body">
            <form action="{{ route('absen.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="hidden" name="id_anggota" id="id_anggota" value="{{ $data->id_anggota }}">
                <input type="hidden" id="test" value="{{ $data->keterangan }}">

                
                {{-- <div class="form-group">
                    <input type="text" name="sasaran" class="form-control mb-3" value="{{ $kinerja->sasaran->sasaran }}" required>
                </div> --}}
                <div class="form-group">
                  <label for="nsms">Nama</label>
                  <select  id="anggota" class="form-control"  disabled>
                  {{-- @foreach($anggota as  $data)
                  <option value="{{ $data->id_anggota }}">{{ $data->nama }}</option>
                  @endforeach --}}
                </select>         
                
              </div>
              
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                  <select name="keterangan" id="ket" class="form-control" value="{{ $data->keterangan }}">
                    <option value="hadir">Hadir</option>
                    <option value="sakit">Sakit</option>
                    <option value="izin">Izin</option>
                    <option value="alpa">Alfa</option>
                  </select>
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
<script>
  var anggota = $('#id_anggota').val();
  var pilihan = `<option value="`+ anggota + `">{{ $data->nama }}</option>`;
  // console.log($('#test').val());
  console.log(anggota);
    $('#ket').val( $('#test').val()) .change();
    // $('#ket').change();
    $('#anggota').val( $('#id_anggota').val() ).change();
    $('#anggota').append(pilihan);
</script>
</body>
</html> 

