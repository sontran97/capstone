<!DOCTYPE html>
<html>
<head>
    {{csrf_field()}} //
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('MyController@update') }}"
          method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ old('id', $getnhanvienById['id'])}}">
        <div class="form-group">
            <label for="exampleInputEmail1">tennv</label>
            <input type="text" class="form-control"
                   value="{{ old('ten', $getnhanvienById['ten'])}}" name="ten">
            <label for="exampleInputEmail1">email</label>
             <input type="text" class="form-control"
                          value="{{ old('email', $getnhanvienById['email'])}}" name="email">
        </div>
        <div class="form-group">
            <label for="gender">gender</label>
            <select name="gender" class="form-control">
                <option value="0" <?php if($getnhanvienById['gender'] == 0) echo "selected='selected'" ?>>
                    nam
                </option>
                <option value="1"<?php if($getnhanvienById['gender'] == 1) echo "selected='selected'" ?>>
                    nu
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>
