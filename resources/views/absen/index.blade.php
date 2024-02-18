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
            <h1 class="m-0">absen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">absensi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
           
            <div class="card-tools">
                <a href="{{ route('absen.create') }}" class="btn btn-primary">Tambah absen   <i class="fas fa-plus-square"></i></a>
              </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="isi">
                    <?php  $no=1; ?>
                    @foreach ($absenList as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama  }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td><a href="{{ route('absen.edit', $data->id) }}" class="btn btn-warning m-1 "><i class="bi bi-pencil-square">Edit</i></a>
                                <form action="{{ route('absen.destroy', $data->id) }}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash">Hapus</i></button>
                                </form>
                            {{-- <td>{{ $data->keterangan }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
            <div class="card-body">            

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
    var nama = '';
    var tbody = $('#isi');
    $(document).ready(function () {
        dataTable();
    
    
        // Fungsi debounce
    function debounce(func, delay) {
    let timeoutId;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(timeoutId);
        timeoutId = setTimeout(function() {
            func.apply(context, args);
        }, delay);
    };
    }
    
    // Handler untuk event input
    const handleInput = debounce(function() {
    nama = $('#nama').val();
    tbody.empty();
    dataTable();
    }, 500); // Mengatur waktu penundaan (dalam milidetik)
    
    // Menggunakan event 'input' dengan fungsi debounce
    $('#nama').on('input', handleInput);
    
        // $('#nama').on('input', function() {
        //     nama = $(this).val();
        //     tbody.empty()
        //     dataTable();
        // });
    
        
        // Menggunakan Ajax untuk mengambil data absensi
        
    });
    
    function dataTable(){
        $.ajax({
            url: 'absen/dataTable',
            type: 'GET',
            dataType: 'json',
            // data:{
            //     nama: nama
            // },
            success: function (data) {
                // Memasukkan data ke dalam tabel
                $.each(data.data, function (index, item) {
                    console.log(JSON.stringify(item));
                    // $('#isi').append('<tr><td>' + item.id + '</td><td>' + item.nama + '</td><td>' + item.kelas + '</td></tr>');
                });
    
                // Inisialisasi DataTable setelah data dimasukkan
                $('#absensiTable').DataTable();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
    </script>
</body>
</html>