<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('index')}}">臺灣工藝研究發展中心</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control" type="search" placeholder="Google 搜尋" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          搜尋
        </button>
      </form>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}"><i class="fas fa-user mr-2"></i>登入</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="{{route('register')}}"><i class="fas fa-edit mr-2"></i>註冊</a>
      </li>
      <div class="dropdown mr-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          選擇語言
        </button>
        <div class="dropdown-menu" style="min-width: 100%;" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href="#">中文</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">ENGLISH</a>
        </div>
      </div>
    </ul>
  </div>
</nav>