@extends('layouts.second')
@section('title', 'Account')
@section('content')

    <div class="container contents">

        @if (session('error'))

            <div class="alert alert-danger">{{ session('error') }}</div>
            
            
        @endif
        <div class="card">
            <div class="card-header">
                <div class="card-actions float-right">
                    <div class="dropdown show"> <a href="#" data-toggle="dropdown" data-display="static"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg> </a>
                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item"
                                href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Public info</h5>
            </div>
            <div class="card-body">
                <form action="/profile" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Nama Lengkap:</label>
                                <input type="text" name="name" class="form-control" value="{{ $profile->name }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">NISN:</label>
                                <input type="text" name="nisn" class="form-control" value="{{ $profile->nisn }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Kelas:</label>
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
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Email:</label>
                                <input type="text" name="email" class="form-control" value="{{ $profile->email }}">
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="text-center"> <img alt="Andrew Jones"
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle img-responsive mt-2" width="128" height="128">
                                {{-- <div class="mt-2"> <span class="btn btn-outline-primary"><box-icon name='upload'></box-icon></span></div>
                                <small>For best results, use an image at least 128px by 128px in .jpg format</small> --}}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
