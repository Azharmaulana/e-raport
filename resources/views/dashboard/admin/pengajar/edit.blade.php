@extends('layouts.main')

@section('main')
@if($errors->any())
	<div class="alert alert-danger">
		<strong>Ups</strong> Ada yang salah!
		<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<h5>Update Data Pengajar</h5>
<form action="{{ route('pengajars.update', $pengajar->id) }}" method="post">
    @csrf
	@method('PUT')

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="name">Nama</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nama" required value="{{ $pengajar->name }}">
		</div>
		<div class="form-group col-md-6">
			<label for="phone">No HP</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="xxxxxxxxxxxxxx" required value="{{ $pengajar->phone }}">

		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="nuptk">NUPTK</label>
			<input type="text" class="form-control" id="nuptk" name="nuptk" placeholder="xxxxxxxxxxx" required value="{{ $pengajar->nuptk }}">
		</div>
		<div class="form-group col-md-4">
			<label for="gelar_depan">Gelar Depan</label>
			<input type="text" class="form-control" id="gelar_depan" name="gelar_depan" placeholder="..." value="{{ $pengajar->gelar_depan }}">
		</div>
		<div class="form-group col-md-4">
			<label for="gelar_belakang">Gelar Belakang</label>
			<input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" placeholder="..." value="{{ $pengajar->gelar_belakang }}">
		</div>
		<div class="form-group col-md-4">
			{{-- <label for="gender">Jenis Kelamin</label>
			<select name="gender" id="gender" class="form-control">
                    <option value="{{ $pengajar->gender }}">Laki-laki</option>
                    <option value="{{ $pengajar->gender }}">Perempuan</option>
            </select> --}}
			<label for="gender">Jenis Kelamin</label>
			<input type="text" class="form-control" id="gender" name="gender" placeholder="..." value="{{ $pengajar->gender }}">
		</div>
        <div class="form-group col-md-4">
			<label for="tempat_lahir">Tempat Lahir</label>
			<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="..." required value="{{ $pengajar->tempat_lahir }}">
		</div>
        <div class="form-group col-md-4">
			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="..." required value="{{ $pengajar->tanggal_lahir }}">
		</div>
        <div class="form-group col-md-4">
			<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="..." required value="{{ $pengajar->jabatan }}">
		</div>
        <div class="form-group col-md-8">
			<label for="alamat">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" placeholder="..." required value="{{ $pengajar->alamat }}">
		</div>
        <div class="form-group col-md-4">
			<label for="agama">Agama</label>
			<input type="text" class="form-control" id="agama" name="agama" placeholder="..." required value="{{ $pengajar->agama }}">
		</div>
        <div class="form-group col-md-4">
			<label for="status">Status</label>
			<input type="text" class="form-control" id="status" name="status" placeholder="..." required value="{{ $pengajar->status }}">
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection