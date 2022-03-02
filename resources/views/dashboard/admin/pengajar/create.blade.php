@extends('layouts.main')

@section('main')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif
<div class="">
    <a href="{{ url('pengajars') }}">
        <i class="icon-copy fa fa-mail-reply-all" aria-hidden="true"> Kembali</i>
    </a>
</div>

<h5>Tambah Data Pengajar</h5>
<form action="{{ route('pengajars.index') }}" method="POST">
    @csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="name">Nama</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
		</div>
		<div class="form-group col-md-6">
			<label for="phone">No HP</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="xxxxxxxxxxxxxx" required>

		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="nuptk">NUPTK</label>
			<input type="text" class="form-control" id="nuptk" name="nuptk" placeholder="xxxxxxxxxxx" required>
		</div>
		<div class="form-group col-md-4">
			<label for="gelar_depan">Gelar Depan</label>
			<input type="text" class="form-control" id="gelar_depan" name="gelar_depan" placeholder="...">
		</div>
		<div class="form-group col-md-4">
			<label for="gelar_belakang">Gelar Belakang</label>
			<input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" placeholder="...">
		</div>
		<div class="form-group col-md-4">
			{{-- <label for="gender">Jenis Kelamin</label>
			<select name="gender" id="gender" class="form-control">
                    <option value="{{ $model->gender }}">Laki-laki</option>
                    <option value="{{ $model->gender }}">Perempuan</option>
            </select> --}}
			<label for="gender">Jenis Kelamin</label>
			<input type="text" class="form-control" id="gender" name="gender" placeholder="...">
		</div>
        <div class="form-group col-md-4">
			<label for="tempat_lahir">Tempat Lahir</label>
			<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="..." required>
		</div>
        <div class="form-group col-md-4">
			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="..." required>
		</div>
        <div class="form-group col-md-4">
			<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="..." required>
		</div>
        <div class="form-group col-md-8">
			<label for="alamat">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" placeholder="..." required>
		</div>
        <div class="form-group col-md-4">
			<label for="agama">Agama</label>
			<input type="text" class="form-control" id="agama" name="agama" placeholder="..." required>
		</div>
        <div class="form-group col-md-4">
			<label for="status">Status</label>
			<input type="text" class="form-control" id="status" name="status" placeholder="..." required>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection