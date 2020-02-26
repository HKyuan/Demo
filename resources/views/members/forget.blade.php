@extends('index')

@section('wrap')



<div class="container">
  <form>

    <div class="form-group row ml-auto justify-content-center mt-4">
      <label for="Email" class="col-sm-2 col-4 col-form-label">電子郵件</label>
      <div class="col-sm-3 col-6">
        <input type="text" class="form-control" placeholder="例如:example@gmail.com" />
      </div>
    </div>

    <div class="form-group text-center">
      <button type="submit" class="btn btn-md btn-success mt-3 ">
        送出
      </button>
      <a href="{{route('index')}}" class="btn btn-md btn-info mt-3 ">返回</a>
    </div>



  </form>
</div>

@endsection