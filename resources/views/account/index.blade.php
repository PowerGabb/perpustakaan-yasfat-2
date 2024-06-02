@extends('layouts.second')
@section('title', 'Account')
@section('content')

    <div class="container contents">
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
                <form>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Nama Lengkap:</label>
                                <input type="text" name="name" class="form-control" value="{{ $profile->name }}" readonly>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">NISN:</label>
                                <input type="text" name="name" class="form-control" value="{{ $profile->nisn }}" readonly>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Kelas:</label>
                                <input type="text" name="name" class="form-control" value="{{ $profile->class }}" readonly>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Email:</label>
                                <input type="text" name="name" class="form-control" value="{{ $profile->email }}" readonly>
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
                    
                </form>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/profile/edit" class="btn btn-primary mt-3">Edit Profile</a>
                    <button type="submit" class="btn btn-danger mt-3">Logout</button>
                </form>
                
            </div>
        </div>

        
    </div>
@endsection
