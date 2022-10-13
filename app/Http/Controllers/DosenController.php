<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DosenStoreRequest;

use App\Models\Dosen;
use App\Models\Departemen;

use Session;
use Log;

class DosenController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        Log::info('Membuka halaman dosen pada waktu : '.date('Y-m-d H:i:s'));
        // $data['dosen'] = Dosen::all();
        $data['dosen'] = Dosen::with('departemen')->get();
        return view('dosen.index', $data);
    }

    public function create()
    {
        $data['departemens'] = Departemen::pluck('nama_departemen','id');
        return view('dosen.create', $data);
    }

    // public function store(request $request)
    public function store(DosenStoreRequest $request)
    {
        Log::debug((array) $request->all());
        Dosen::create($request->all());

        Session::flash('pesan', 'Data berhasil disimpan');

        return redirect('dosen');
    }

    public function edit($id)
    {
        $data['departemens'] = Departemen::pluck('nama_departemen','id');
        $data['dosen'] = Dosen::find($id);
        return view('dosen.edit', $data);
    }

    public function update($id, Request $request)
    {
        Log::debug((array) $request->all());
        $dosen = Dosen::find($id);
        $dosen->update($request->all());

        Session::flash('pesan', 'Data berhasil diubah');

        return redirect('dosen');
    }

    public function destroy($id, Request $request)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        Session::flash('pesan', 'Data berhasil dihapus');

        return redirect('dosen');
    }
}
