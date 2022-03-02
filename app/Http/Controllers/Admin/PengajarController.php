<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengajar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Pagination\Paginator;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajars = Pengajar::latest()->paginate(8);

        return view('dashboard.admin.pengajar.index', compact('pengajars',[
            "title" => "Data Pengajar"
        ]))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.pengajar.create',[
            "title" => "Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'nuptk' => 'required|numeric',
            'gelar_depan' => 'required',
            'gelar_belakang' => 'required',
            'gender' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);

        Pengajar::create($request->all());

        return redirect('pengajars',[
            "title" => "Tambah Data"
        ])->with('success', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        return view('dashboard.admin.pengajar.show', compact('pengajar',[
            "title" => "Detail Data"
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajar $pengajar)
    {
        return view('dashboard.admin.pengajar.edit', compact('pengajar', [
            "title" => "Updata Data"
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'nuptk' => 'required|numeric',
            'gelar_depan' => 'required',
            'gelar_belakang' => 'required',
            'gender' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);
        $pengajar->update($request->all());

        return redirect('pengajars')
        ->with('success', 'Data berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        $pengajar->delete();
        
        return redirect('pengajars')
        ->with('success', 'Data berhasil dihapus');
    }
}
