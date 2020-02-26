@extends('index')

@section('wrap')


<div class="container">
  <form>

    <div class="form-group row ml-auto justify-content-center mt-4">
      <label for="photo" class="col-sm-2 col-4 col-form-label">照片</label>
      <div class="col-sm-3 col-6">
        <img src="https://fakeimg.pl/200x200/#999" alt="">
        <input type="file" class="mt-3" />
        <span><i class="fas fa-check-double mt-3"></i>Firefox,Chrome,Safari,IE 11</span>
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="name" class="col-sm-2 col-4 col-form-label">姓名</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如：王小明" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="Email" class="col-sm-2 col-4 col-form-label">帳號</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="建議中英文組合" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="id" class="col-sm-2 col-4 col-form-label">身份證字號</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:A123456789" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="Email" class="col-sm-2 col-4 col-form-label">密碼</label>
      <div class="col-sm-3 col-6">
        <input type="password" class="form-control" placeholder="請輸入6-8含英文符號" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="Email" class="col-sm-2 col-4 col-form-label">再次輸入密碼</label>
      <div class="col-sm-3 col-6">
        <input type="password" class="form-control" placeholder="請輸入6-8含英文符號" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="phone" class="col-sm-2 col-4 col-form-label">聯絡電話</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:09xx-xxxxxx" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center mt-4">
      <label for="Email" class="col-sm-2 col-4 col-form-label">電子郵件</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:example@gmail.com" />
      </div>
    </div>

    <div class="form-group text-center">
      <button type="submit" class="btn btn-md btn-success mt-3 ">
        註冊
      </button>
      <a href="{{route('index')}}" class="btn btn-md btn-info mt-3 ">返回</a>
    </div>
  </form>
</div>

@endsection