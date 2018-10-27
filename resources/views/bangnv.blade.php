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
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{route('nhanvien.add')}}"
    method="Post">
        {{csrf_field()}} 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleInputEmail1">ten nhan vien</label>
            <input type="text" class="form-control" placeholder="ten" name="ten">
            <br>
            <label for="exampleInputEmail1">email</label>
            <input type="text" class="form-control" placeholder="email" name="email">
        </div>
        <div class="form-group">
            <label for="gender">Sex</label>
            <select name="gender" class="form-control">
                <option value="0">nam</option>
                <option value="1">nu</option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>
