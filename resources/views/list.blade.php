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
  <a href="{{route('nhanvien.add')}}"><button type="button" class="btn btn-default">Add</button></a>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <table class="table table-hover">
     <tr>
         <td>Id</td>
         <td>ten</td>
         <td>email</td>
         <td>gender</td>
         <td>Action</td>
     </tr>
     <?php foreach($nhanviens as $nhanvien):  ?>
        <tr>
            <td> <?php echo $nhanvien['id']; ?> </td>
            <td> <?php echo $nhanvien['ten']; ?></td>
            <td> <?php echo $nhanvien['email']; ?></td>
            <td> <?php if($nhanvien['gender'] == 0 ){ echo "nam"; }else {echo "nu";}  ?> </td>
            <td>
                <a href='{{route('nhanvien.edit', $nhanvien['id'])}}'> Edit</a>
                <a href='{{route('nhanvien.delete', $nhanvien['id'])}}'> Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>
    </table>
</div>
</body>
</html>
