<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a href="{{ url('/') }}" class="navbar-brand">
            LaraBBS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" id="navbarDropdown" role="botton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-circle img-responsive" width="30px" height="30px">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="#" class="dropdown-item">个人中心</a>
                            <a href="#" class="dropdown-item">编辑资料</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item" id="logout">
                                <form action="{{ route('logout') }}" method="post">
{{--                                    {{ method_field('DELETE') }}--}}
                                    <button type="submit" class="btn btn-danger btn-block" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>