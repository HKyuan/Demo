<nav class="navbar navbar-expand-lg navbar-light bg-custom justify-content-around">
  <ul class="nav justify-content-center">
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="#" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        首頁
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('login')}}">會員註冊及登入</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">行動版</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('news')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        最新消息
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">最新快訊</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">系統更新</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('systems')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        系統介紹
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">功能介紹</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">註冊須知</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">操作教學</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('materials')}}" id="navbarDropdown"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        工藝材質
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('upload')}}">金工材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">木藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">陶藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">竹藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">漆藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">石藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">纖維材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">其他材質</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('creates')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        工藝創作
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">金工創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">木藝創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">陶藝創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">竹藝創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">漆藝創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">石藝創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">纖維創作</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">複合創作</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="#{{route('creators')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        創作者
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">金工創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">木藝創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">陶藝創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">竹藝創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">漆藝創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">石藝創作者</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">纖維創作者</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('personal')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        個人專區
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">基本資料</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">個人工藝材質</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">個人作品集紀錄</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">個人工藝創作上鍊紀錄</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">個人數位合約紀錄</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('relations')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        相關連結
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">文化部</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">工藝中心</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">其他</a>
      </div>
    </li>
    <li class="dropdown btn btn-lg">
      <a class="btn btn-lg btn-custom font-weight-bold" href="{{route('contacts')}}" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        聯絡我們
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">聯絡資訊</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">回應表單</a>
      </div>
    </li>
  </ul>
</nav>