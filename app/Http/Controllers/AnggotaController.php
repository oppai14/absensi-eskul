<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaModel as anggota;
use App\Models\kelas as kelas;
use App\Models\Vanggota;

class AnggotaController extends Controller
{
    //index
    public function index(){
        $anggota = Vanggota::all();
        return view('anggota.index', ['datas' => $anggota]);
    }

    //halaman tambah
    public function create()
    {
        $kelas = kelas::all();
        return view('anggota.create',  ['datas' => $kelas]);
    }

    //kitim data tambah
    public function store(Request $request)
{
    // Validasi bahwa request memiliki file dengan nama 'foto' dan itu adalah file gambar
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan kebutuhan Anda
    ]);

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $nama_file = time() . '_' . $foto->getClientOriginalName();
        $lokasi = public_path('uploads');
        $foto->move($lokasi, $nama_file);
        echo "Foto berhasil diunggah.";
        $request['foto'] = $nama_file; // Pindahkan ini ke dalam blok if
        // var_dump($request['foto']);die();
    } else {
        echo "Gagal mengunggah foto.";
        return redirect()->back()->with('error', 'Gagal mengunggah foto.');
    }

    $nilai = [
        'nis'       => $request->nis,
        'nama'      => $request->nama,
        'jk'        => $request->jk,
        'foto'      => $nama_file,
        'id_kelas'  => $request->kelas,
        'no_telp'   => $request->no_telp,
    ];

    anggota::create($nilai);

    return redirect()->route('anggota.index')->with('success', 'Absen berhasil disimpan');
}


    // halaman edit
    public function edit($id){
        $anggota = anggota::findOrFail($id);
        $kelas = kelas::all();
        return view('anggota.edit', ['data' => $anggota, 'kelas' => $kelas]);


    }

    //kirim data edit
    public function update(Request $request, anggota $data)
    {
        // Mengambil nilai dari request
        $nilai = [
            'nis'       => $request->nis,
            'nama'      => $request->nama,
            'jk'        => $request->jk,
            'foto'      => $request->foto,
            'id_kelas'     => $request->kelas,
            'no_telp'   => $request->no_telp,
        ];
    
        // Memperbarui data dengan menggunakan kondisi where id = $request->id
        $data->where('id', $request->id)->update($nilai);
    
        // Redirect setelah pembaruan
        return redirect()->route('anggota.index')->with('success', 'Update Berhasil');
    }

    //hapus data
    public function destroy($id)
    {
        anggota::findOrFail($id)->delete();
        return redirect()->route('anggota.index')->with('success', 'Absen berhasil dihapus');
    }
    // public function index(){
        
    // }
}
