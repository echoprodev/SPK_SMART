<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link text-uppercase" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>&nbsp;{{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <p href="#" class="bg-primary dropdown-item text-center text-uppercase">
                    {{ Auth::user()->name }} <br>
                    {{ Auth::user()->role }}
                </p>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('profile') }}"
                            class="btn btn-sm rounded-pill ml-2 mt-2 mb-2 text-center bg-success">
                            Profile
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-sm rounded-pill text-center mr-2 mt-2 mb-2 float-right bg-danger"
                            href="{{ route('logout') }}" id="logout" onclick="return logout(event);">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- logout -->
<script type="text/javascript">
    function logout(event) {
        event.preventDefault();
        var check = confirm("Apakah anda yakin ingin Logout?");
        if (check) {
            document.getElementById('logout-form').submit();
        }
    }
</script>
