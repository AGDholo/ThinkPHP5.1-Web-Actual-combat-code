<header>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">ThinkPHP 入门教程</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('welcome/index/home') }}">主页
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('welcome/index/help') }}">帮助</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('welcome/index/about') }}">关于</a>
            </li>
          </ul>
          <a class="btn btn-outline-success my-2 my-sm-0" href="#">注册</a>
        </div>
      </div>
    </nav>
  </div>
</header>