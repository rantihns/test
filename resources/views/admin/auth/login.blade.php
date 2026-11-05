<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.8-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            background: url("{{ asset('gif/admin.gif') }}") no-repeat center center fixed;
            background-size: cover;
        }
        .login-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <div class="login-overlay d-flex justify-content-center align-items-center">
        <div class="card shadow" style="width: 400px;">
            <div class="card-header bg-warning text-dark text-center py-3">
                <h4 class="mb-0">Admin Login</h4>
            </div>
            <div class="card-body py-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('admin.login.process') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 py-2 fw-bold">Login</button>
                </form>
                <div class="text-center mt-4 pt-2 text-muted border-top">
                    <small>Demo Login : admin@example.com / password</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>