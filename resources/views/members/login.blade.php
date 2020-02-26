@extends('index')

@section('wrap')



<div class="container">
  <form>

    <div class="form-group row ml-auto justify-content-center mt-4">
      <label for="Email" class="col-sm-2 col-4 col-form-label">帳號</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="請輸入帳號" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="Email" class="col-sm-2 col-4 col-form-label">密碼</label>
      <div class="col-sm-3 col-6">
        <input type="password" class="form-control" placeholder="請輸入密碼" />
      </div>
    </div>


    <div class="form-group text-center">
      <button type="submit" class="btn btn-md btn-success mt-3 ">
        登入
      </button>
      <a href="{{route('register')}}" class="btn btn-md btn-info mt-3 "> 註冊</a>
      <a href="{{route('forget')}}" class="d-inline-block align-bottom">忘記密碼</a>
    </div>

    <div class="form-group text-center">
      <a href="#" class="btn btn-md"><i class="fab fa-facebook-square fa-3x "></i></a>
      <a href="#" class="btn btn-md"><i class="fab fa-google fa-3x"></i></a>
      <a href="#" class="btn btn-md"><i class="fab fa-instagram-square fa-3x"></i></a>
    </div>

  </form>
</div>

@endsection