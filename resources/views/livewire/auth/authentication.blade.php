<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <style>
      body {
        background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
        color: #333;
        font-family: Arial, sans-serif;
      }

      .card.bg-glass {
        background: rgba(255, 255, 255, 0.85);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
        max-width: 500px;
        width: 100%;
        margin: 20px;
      }

      .nav-pills .nav-link.active {
        background-color: #007bff;
        color: #fff;
        border-radius: 20px;
        font-weight: bold;
      }

      .form-control {
        border-radius: 8px;
        padding: 10px 15px;
      }

      .form-outline {
        position: relative;
        margin-bottom: 1.5rem;
      }

      .form-outline label {
        font-size: 0.85rem;
        color: #555;
        padding-left: 10px;
      }

      .form-outline input[type="email"],
      .form-outline input[type="password"],
      .form-outline input[type="text"] {
        font-size: 1rem;
      }

      .form-control:focus {
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
      }

      .btn-primary {
        background: #007bff;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      .btn-link {
        color: #007bff;
        font-size: 1.1rem;
      }

      .btn-link:hover {
        color: #0056b3;
      }

      .social-icons .btn-link {
        font-size: 1.5rem;
        color: #555;
      }
    </style>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card bg-glass">
        <div class="container-fluid p-10">
            <!-- Success/Error messages -->
            @if (session()->has('success'))
            <div id="SuccessMessage" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
        <div id="ErrorMessage" class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

            <!-- Navigation for tabs -->
            <ul class="nav nav-pills nav-justified mb-4" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link @if($activeTab == 'login') active @endif" wire:click="$set('activeTab', 'login')" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">
                        Login
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link @if($activeTab == 'register') active @endif" wire:click="$set('activeTab', 'register')" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">
                        Register
                    </a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Login Tab -->
                <div class="tab-pane fade show @if($activeTab == 'login') active @endif" id="pills-login" role="tabpanel">
                    <form wire:submit="login">
                        <div class="form-outline mb-4">
                            <input type="email"  class="form-control" placeholder="Email" wire:model="email" />
                            @error('email')
                            <ul class="mt-2 text-danger">
                                <li>{{ $message }}</li>
                            </ul>
                        @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="loginPassword" class="form-control" placeholder="Password" wire:model="password" />
                            @error('password')
                            <ul class="mt-2 text-danger">
                                <li>{{ $message }}</li>
                            </ul>
                        @enderror
                        </div>
                        <button type="submit" id="login" class="btn btn-primary btn-block mb-4">Sign In</button>
                        <div class="text-center">
                            <p>Not a member? <a href="#" wire:click="$set('activeTab', 'register')">Register</a></p>
                        </div>
                    </form>
                </div>

                <!-- Register Tab -->
                <div class="tab-pane fade show @if($activeTab == 'register') active @endif" id="pills-register" role="tabpanel">
                    <form wire:submit="register">
                        <div class="form-outline mb-4">
                            <input type="text" id="registerUsername" class="form-control" placeholder="Username" wire:model="username" />
                            @error('username')
                                <ul class="mt-2 text-danger">
                                    <li>{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="form-outline mb-4">
                            <input type="email"  class="form-control" placeholder="Email" wire:model="email" />
                            @error('email')
                                <ul class="mt-2 text-danger">
                                    <li>{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-outline mb-4">
                            <input type="password" id="registerPassword" class="form-control" placeholder="Password" wire:model="password" />
                            @error('password')
                                <ul class="mt-2 text-danger">
                                    <li>{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>

                        <!-- Repeat Password Field -->
                        <div class="form-outline mb-4">
                            <input type="password" id="registerRepeatPassword" class="form-control" placeholder="Repeat Password" wire:model="rpassword" />
                            @error('rpassword')
                                <ul class="mt-2 text-danger">
                                    <li>{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <button type="submit" id="register" class="btn btn-primary btn-block mb-3">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$('#login').click(function (e) {
    setTimeout(function() {
        $('#SuccessMessage').hide()
    },2000);

    setTimeout(function() {
        $('#ErrorMessage').hide()
    },2000);
});

    $('#register').click(function (e) {
        setTimeout(function() {
        $('#SuccessMessage').hide()
    },2000);

    setTimeout(function() {
        $('#ErrorMessage').hide()
    },2000);
    });

</script>
  </div>
