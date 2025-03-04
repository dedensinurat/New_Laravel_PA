<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login &mdash; {{ $pengaturan->name ?? config('app.name') }}</title>
    @include('includes.style')

    <style>
        /* Reset margin & padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden; /* Mencegah white space berlebih */
        }

        /* Container utama dengan background */
        .login-container {
            height: 100vh;
            background: url('{{ asset("assets/img/bg/bg-removebg-preview.png") }}') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Overlay transparan */
        .login-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(134, 136, 137, 0.4);
            backdrop-filter: blur(6px);
        }

        /* Card login */
        .login-card {
            position: relative;
            z-index: 2;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        /* Logo */
        .login-brand img {
            max-width: 280px;
            height: auto;
        }

        /* Footer */
        .simple-footer {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="login-container">
            <!-- Form Login -->
            <div class="login-card">
                <!-- Logo -->
                <div class="login-brand">
                    <img src="{{ URL::asset($pengaturan->logo) ?? 'https://via.placeholder.com/300' }}" alt="logo">
                </div>                                
                <h4 class="mb-4" style="font-weight: bold;">Martuhan - Marroha - Marbisuk</h4>

                @yield('content')

                <div class="simple-footer mt-4">
                    Copyright &copy; Kelompok 05 {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
    @include('includes.script')
</body>
</html>
