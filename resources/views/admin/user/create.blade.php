@extends('admin/template/default')

@section('title','Tambah User')

@section('content')

<div class="col-md-6 mt-3">
    <!-- general form elements -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.user.index') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Penulis" value="{{ old('name') }}">
                    @error('name')
                    <span class="in-block text-red">{{ $message }}</span>
                    @enderror()
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection