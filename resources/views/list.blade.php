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
  <button type="submit" class="btn btn-default" action="('MyController@create')">add</button>
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
                <a href='nhanvien/<?php echo $nhanvien['id'];?>/edit'> Edit</a>
                <a href='nhanvien/<?php echo $nhanvien['id'];?>/delete'> Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>
    </table>
</div>
</body>
</html>
