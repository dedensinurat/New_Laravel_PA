<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{ $pengaturan->name ?? config('app.name') }}</title>
    @include('includes.style')
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container d-flex align-items-center justify-content-center" 
            style="min-height: 100vh; background-color: #EFEAFE; padding: 20px; margin: 40px auto;">
                       <div class="row w-100">
                    <!-- Form Login -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="card p-5 shadow-lg" style="border-radius: 15px; width: 100%; max-width: 550px; background: white;">
                            <div class="card-body text-center">
                                <!-- Logo -->
                                <div class="login-brand">
                                    <img src="{{ URL::asset($pengaturan->logo) ?? 'https://via.placeholder.com/300' }}" alt="logo" width="250" class="shadow-light">
                                </div>
                                {{-- 
                                <h2 class="text-primary" style="font-weight: bold; line-height: 1;">Vokasi<span style="color: #1faca5;">Tera</span></h2>
                                <p class="text-muted">Del Institute of Technology</p> --}}
                                <h5 class="mb-4" style="font-weight: bold;">Martuhan - Marroha - Marbisuk</h5>

                                @yield('content')

                                <div class="simple-footer mt-4">
                                    Copyright &copy; Pixel Overture {{ date('Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ilustrasi -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/bg/bg-removebg-preview.png') }}" alt="Illustration" class="img-fluid" style="max-width: 100% ; height: auto;">
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('includes.script')
</body>
</html>
