@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Register Page')

@section('content')
    <!-- begin register -->
    <div class="register register-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image"
                style="background-image: url('https://man1kotapadang.sch.id/wp-content/uploads/2023/08/WhatsApp-Image-2023-08-21-at-09.59.46-3.jpeg'); background-size: cover;">
            </div>
            <div class="news-caption">
                <h4 class="caption-title"><b>Spektra</b>App</h4>
                <p>
                    Sistem Pendaftaran Ekstrakulikuler Bagi Siswa MAN 1 Kota Padang. Daftarkan diri anda dan mulailah
                    mengembangkan skill melalui Ekstrakulikuler yang ada !
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin register-header -->
            <h1 class="register-header">
                Registrasi Akun
                {{-- <small>Create your Color Admin Account. It’s free and always will be.</small> --}}
            </h1>
            <!-- end register-header -->
            <!-- begin register-content -->
            <div class="register-content">
                <form action="index.html" method="GET" class="margin-bottom-0">
                    <label class="control-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <div class="row row-space-10">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Jhon Dae" required />
                        </div>
                       
                    </div>
                    <label class="control-label mt-2">Email <span class="text-danger">*</span></label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="jhondae@gmail.com" required />
                        </div>
                    </div>

                    <label class="control-label">Password <span class="text-danger">*</span></label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" required />
                        </div>
                    </div>
                    {{-- <div class="checkbox checkbox-css m-b-30">
                        <div class="checkbox checkbox-css m-b-30">
                            <input type="checkbox" id="agreement_checkbox" value="">
                            <label for="agreement_checkbox">
                                By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have
                                read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie
                                    Use</a>.
                            </label>
                        </div>
                    </div> --}}
                    <div class="register-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>
                    </div>
                    <div class="m-t-30 m-b-30 p-b-30">
                        Sudah Memiliki Akun? Klik <a href="{{url('login')}}">disini</a> untuk login.
                    </div>
                    <hr />
                    <p class="text-center mb-0">
                        &copy; Kelompok 2 Spektra APP
                    </p>
                </form>
            </div>
            <!-- end register-content -->
        </div>
        <!-- end right-content -->
    </div>
    <!-- end register -->
@endsection
