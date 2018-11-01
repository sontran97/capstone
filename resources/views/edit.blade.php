<!DOCTYPE html>
<html>
<head>
   //
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{route('nhanvien.update') }}"
          method="Post" >
            {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $nhanvien->id}}">
        <div class="form-group">
            <label for="exampleInputEmail1">tennv</label>
            <input type="text" class="form-control"
                   value="{{$nhanvien->ten}}" name="ten">
            <label for="exampleInputEmail1">email</label>
             <input type="text" class="form-control"
                          value="{{$nhanvien->email}}" name="email">
        </div>
        <div class="form-group">
            <label for="gender">gender</label>
            <select name="gender" class="form-control">
                <option value="0" {{$nhanvien->gender == 0 ? "selected":""}}  >
                    nam
                </option>
                <option value="1"  {{$nhanvien->gender == 1 ? "selected":""}} >
                    nu
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>
