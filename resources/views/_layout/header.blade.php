<header>
  <nav class="nav flex-column">
    <ul class="list-group list-group-flush">
      <li class="list-group-item list-group-item-action">
        <a class="nav-link" href="{{ url('welcome/index/home') }}">
          主页
        </a>
      </li>
      <li class="list-group-item list-group-item-action">
        <a class="nav-link" href="{{ url('user/auth/index') }}">
          所有用户
        </a>
      </li>
      @if(session('user'))
      <li class="list-group-item list-group-item-action">
        <a class="nav-link" href="{{ url('user/auth/read', ['id' => session('user.id')]) }}">
          个人资料
        </a>
      </li>
      <li class="list-group-item list-group-item-action">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">更多</a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item">
              <form action="{{ url('user/session/delete', ['id' => session('user.id')]) }}" method="POST">
                @php echo token() @endphp
                <button class="btn btn-block" type="submit" name="button">退出</button>
              </form>
            </a>
          </div>
        </div>
      </li>
      @else
      <li class="list-group-item list-group-item-action">
        <a class="nav-link" href="{{ url('user/auth/create') }}">
          注册
        </a>
      </li>
      <li class="list-group-item list-group-item-action">
        <a class="nav-link" href="{{ url('user/session/create') }}">
          登录
        </a>
      </li>
      @endif
    </ul>
  </nav>
</header>