@extends('layouts.main')

@section('main')
  <div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">
                <h4>Data Pengajar</h4>
              </div>
              <div class="col-md-6">
                <a href="{{ route('pengajars.create') }}" class="pull-right">
                  <i class="icon-copy fa fa-plus" aria-hidden="true"> Tambah Data</i>
                </a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-responsive table-bordered table-striped">
              <thead>
                <tr class="">
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>NUPTK</th>
                  <th>Gelar Depan</th>
                  <th>Gelar Belakang</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Status</th>
                  <th style="width: 280px">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengajars as $pengajar )
                <tr>
                  <td>{{ $pengajar->name }}</td>
                  <td>{{ $pengajar->phone }}</td>
                  <td>{{ $pengajar->nuptk }}</td>
                  <td>{{ $pengajar->gelar_depan }}</td>
                  <td>{{ $pengajar->gelar_belakang }}</td>
                  <td>{{ $pengajar->gender }}</td>
                  <td>{{ $pengajar->tempat_lahir }}</td>
                  <td>{{ $pengajar->tanggal_lahir }}</td>
                  <td>{{ $pengajar->jabatan }}</td>
                  <td>{{ $pengajar->alamat }}</td>
                  <td>{{ $pengajar->agama }}</td>
                  <td>{{ $pengajar->status }}</td>
                  <td>
                    <form action="{{ route('pengajars.destroy', $pengajar->id) }}" method="POST">

                      <a href="{{ route('pengajars.show', $pengajar->id) }}" title="Show">
                        <i class="icon-copy fa fa-eye fa-xm" aria-hidden="true"></i>
                      </a>

                      <a href="{{ route('pengajars.edit', $pengajar->id) }}">
                        <i class="icon-copy fa fa-edit fa-xm" aria-hidden="true"></i>
                      </a>

                      @csrf
                      @method('DELETE')

                      <button type="submit" title="Delete" style="border: 0px background-color:transparent;">
                        <i class="icon-copy fa fa-trash fa-xm" aria-hidden="true"></i>
                      </button>
                    </form> 
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="d-felx justify-content-center">
              {{ $pengajars->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection