<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'LiveWire 2' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .sidebar a {
            color: #f8f9fa;
            font-weight: 500;
            text-transform: uppercase;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #ff7e5f;
            color: #ffffff;
            border-radius: 5px;
        }

        .sidebar a.active {
            background-color: #007bff;
            color: #ffffff;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Navbar Styles */
        .navbar-custom {
            background: linear-gradient(135deg, #007bff, #1a73e8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .form-control {
            border-radius: 20px;
            width: 200px;
            transition: width 0.3s ease;
        }

        .navbar-custom .form-control:focus {
            width: 250px;
        }

        .navbar-custom .btn-outline-light {
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-custom .btn-outline-light:hover {
            background-color: #ffd700;
            color: #343a40;
        }

        .navbar-custom .nav-link {
            color: white;
            margin-right: 15px;
        }

        .navbar-custom .nav-link:hover {
            color: #ffd700;
        }

        .navbar-custom .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Dropdown Styles */
        .dropdown-menu {
            border-radius: 8px;
            background-color: #343a40;
            color: white;
            border: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .dropdown-menu a {
            color: white;
            transition: background-color 0.3s ease;
        }

        .dropdown-menu a:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @if(!request()->is('/'))
    <div class="sidebar">
        <a wire:navigate href="/ChatApp" class="{{ request()->is('ChatApp') ? 'active' : '' }}">Chat Bot</a>
    </div>
    @endif

    <!-- Main Content -->
    <div class="main-content">
        @if(!request()->is('/'))
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <!-- Search Bar -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                <!-- Profile Dropdown -->
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span> Settings </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Forget Password</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <!-- Profile Image and Name -->
                    <a class="nav-link d-flex align-items-center" href="#">

                        <img src="http://localhost/Jayesh/LiveWire_2/public/peakpx.jpg" alt="Profile" class="profile-img">
                        <span>{{ auth()->user()->name }}</span>
                    </a>
                </div>
            </div>
        </nav>
        @endif

        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
