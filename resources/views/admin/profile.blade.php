@extends('admin.layouts.master')
@section('title', 'Profil')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <x-admin.breadcrumb/>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="card-title m-t-10">
                            {{ auth()->user()->name }}
                        </h4>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body">
                    <small class="text-muted">
                        E-mail
                    </small>
                    <h6>
                        {{ auth()->user()->email }}
                    </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-header">
                    İstifadəçi məlumatları
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-md-12">
                                Ad
                            </label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Ad" name="name" required autofocus id="name"
                                       autocomplete="name" value="{{ auth()->user()->name }}"
                                       class="form-control form-control-line"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12">
                                E-mail
                            </label>
                            <div class="col-md-12">
                                <input type="email" placeholder="E-mail" name="email"
                                       class="form-control form-control-line"
                                       value="{{ auth()->user()->email }}" id="email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary text-white">
                                    Saxla
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Şifrəni dəyişdir
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.changepass') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="update_password_current_password" class="col-md-12">
                                Şifrə
                            </label>
                            <div class="col-md-12">
                                <input type="password" id="update_password_current_password" name="current_password"
                                       class="form-control form-control-line @error('current_password') is-invalid @enderror"
                                       required autocomplete="current-password" placeholder="Şifrə"/>
                                @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="update_password_password" class="col-md-12">
                                Yeni Şifrə
                            </label>
                            <div class="col-md-12">
                                <input type="password" id="update_password_password" name="password"
                                       class="form-control form-control-line @error('password') is-invalid @enderror"
                                       autocomplete="new-password" placeholder="Yeni Şifrə" required/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="update_password_password_confirmation" class="col-md-12">
                                Şifrəni təsdiqlə
                            </label>
                            <div class="col-md-12">
                                <input type="password" id="update_password_password_confirmation" required
                                       class="form-control form-control-line @error('password_confirmation') is-invalid @enderror"
                                       name="password_confirmation" autocomplete="new-password"
                                       placeholder="Şifrəni təsdiqlə"/>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary text-white">
                                    Şifrəni dəyiş
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-danger w-100" href="{{ route('admin.profile.delete') }}">
                        Hesabımı sil
                    </a>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
@endsection
