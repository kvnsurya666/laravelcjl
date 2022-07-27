@extends('admin.layouts.app')

@section('konten')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Admin</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required>
                    E-mail <input type="text" name="email" required>
                    Username <input type="text" name="username" required>
                    Password <input type="text" name="password" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>          
        </div>
    </div>
</div>
@endsection