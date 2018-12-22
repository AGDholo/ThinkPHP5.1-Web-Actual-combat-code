<header>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand"
           href="#">ThinkPHP 入门教程</a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link"
                 href="{{ url('welcome/index/home') }}">主页
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                 href="{{ url('welcome/index/help') }}">帮助</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                 href="{{ url('welcome/index/about') }}">关于</a>
            </li>
          </ul>
          @if(session('user'))
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
              {{ session('user.name') }}
            </button>
            <div class="dropdown-menu"
                 aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item"
                 href="{{ url('user/auth/read', ['id' => session('user.id')]) }}">个人主页</a>
              <a class="dropdown-item">
                <form action="{{ url('user/session/delete', ['id' => session('user.id')]) }}"
                      method="POST">

                  @php echo token() @endphp

                  <button class="btn btn-block"
                          type="submit"
                          name="button">退出</button>
                </form>
              </a>
            </div>
          </div>
          @else
          <a class="btn btn-outline-success my-2 my-sm-0"
             href="{{ url('user/auth/create') }}">注册</a>
          <a class="btn btn-outline-success my-2 my-sm-0"
             href="{{ url('user/session/create') }}">登录</a>
          @endif
        </div>
      </div>
    </nav>
  </div>
</header>