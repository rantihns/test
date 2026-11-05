<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.8-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js')}}"></script>
    <style>
    .body{
        background-color: #f8f9fa;
    }
    .admin-sidebar{
        width: 250px;
        height: 100vh;
        background-color: #212529;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 100;
        padding: 20px 0;
        color: #fff;
    }
    .admin-sidebar .nav-link {
        color: #fff;
        padding: 10px 20px;
        font-weight: 500;
    }
    .admin-sidebar .nav-link:hover {
        background-color: #343a40;
        color: #fff;
    }
    .admin-content{
        margin-left: 250px;
        padding: 30px;
    }
    @media (max-width: 768px) {
        .admin-sidebar {
            width: 100%;
            position: relative;
            height: auto;
        }
        .admin-content {
            margin-left: 0;
        }
    }
</style>
</head>
<body>
    <div class="admin-sidebar shadow">
        <h4 class="text-center fw-bold text-white pb-3 border-bottom border-secondary">Admin Panel</h4>
        <ul class="nav flex-column mt-3">
            <li class="nav-item mb-1">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item mb-1">
                <a href="{{ url('/admin/project') }}" class="nav-link">Project</a>
            </li>
        </ul>
    </div>
    <div class="admin-content">
        <div class="d-flex justify-content-between align-items-center pb-3 border-bottom bg-white p-3 rounded shadow-sm">
            <h3 class="fw-bold mb-0">@yield('title')</h3>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted fw-semibold">Halo, {{ Auth::guard('admin')->user()->name ?? 'Administrator' }}</span>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>