@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
        </div>
        <div class="card-body">
            <form action="/users" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Name: </label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">NISN: </label>
                    <input type="text" name="nisn" class="form-control">
                    @error('nisn')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Email: </label>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Kelas: </label>
                    <select name="class" id="" class="form-select">
                        <option value="10 RPL 1">10 RPL 1</option>
                        <option value="10 RPL 2">10 RPL 2</option>
                        <option value="11 RPL 1">11 RPL 1</option>
                        <option value="11 RPL 2">11 RPL 2</option>
                        <option value="12 RPL 1">12 RPL 1</option>
                        <option value="12 RPL 2">12 RPL 2</option>
                        <option value="10 TKJ 1">10 TKJ 1</option>
                        <option value="11 TKJ 1">11 TKJ 1</option>
                        <option value="12 TKJ 1">12 TKJ 1</option>
                        <option value="10 OTKP 1">10 OTKP 1</option>
                        <option value="11 OTKP 1">11 OTKP 1</option>
                        <option value="12 OTKP 1">12 OTKP 1</option>
                    </select>
                    @error('class')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Password: </label>
                    <input type="text" name="password" class="form-control">
                    @error('password')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
