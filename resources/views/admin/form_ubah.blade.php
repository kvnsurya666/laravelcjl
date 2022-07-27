@extends('admin.layouts.app')

@section('konten')
<div class="container d-flex justify-content-center">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Admin</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('users.index') }}">Kembali</a>
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" value="{{$user->nama}}" required>
                    E-mail <input type="text" name="email" value="{{$user->email}}" required>
                    Username <input type="text" name="username" value="{{$user->username}}" required>
                    Password <input type="text" name="password" value="{{$user->password}}" required>
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form> 
            
        </div>
    </div>
</div>
@endsection