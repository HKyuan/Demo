@extends('index')
@section('wrap')

<div class="container">
  <form>

    <div class="form-group row ml-auto justify-content-center mt-4">
      <label for="photo" class="col-sm-2 col-4 col-form-label">照片</label>
      <div class="col-sm-3 col-6">
        <img src="https://fakeimg.pl/200x200/#999" alt="">
        <input type="file" class="form-control mt-3" />
        <span><i class="fas fa-check-double mt-3"></i>Firefox,Chrome,Safari,IE 11</span>
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="name" class="col-sm-2 col-4 col-form-label">材質名稱</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:樹脂" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="category" class="col-sm-2 col-4 col-form-label">類別</label>
      <div class="col-sm-3 col-6">
        <select class="form-control w-100">
          <option value="" default>金工材質</option>
        </select>
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="introduction" class="col-sm-2 col-4 col-form-label">簡介</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:主要在高分子化學和材料科學" />
      </div>
    </div>

    <div class="form-group row ml-auto justify-content-center">
      <label for="desc" class="col-sm-2 col-4 col-form-label">說明</label>
      <div class="col-sm-3 col-8">
        <textarea class="form-control" name="" id="" cols="30" rows="10"
          placeholder="例如:樹脂是植物或合成來源的固體或高粘度物質..."></textarea>
      </div>
    </div>

    <div class="form-group text-center">
      <button type="submit" class="btn btn-md btn-success mt-3 ">
        上傳
      </button>
      <a href="{{route('index')}}" class="btn btn-md btn-info mt-3 ">返回</a>
    </div>
  </form>
</div>

@endsection