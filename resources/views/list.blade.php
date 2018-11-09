@extends('layouts.master')
@section('content')
{{csrf_field()}}
<a href="{{route('nhanvien.add')}}"><button type="button" class="btn btn-default">Thêm nhân viên</button></a>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
  <table class="table table-hover">
   <tr>
       <td>Id</td>
       <td>ten</td>
       <td>email</td>
       <td>gender</td>
       <td>Khoa</td>
       <td>Action</td>
   </tr>
   <?php foreach($nhanviens as $nhanvien):  ?>
      <tr>
          <td> <?php echo $nhanvien['id']; ?> </td>
          <td> <?php echo $nhanvien['ten']; ?></td>
          <td> {{$nhanvien->email}}</td>
          <td> {{$nhanvien->gender == 1 ? "Nam":"Nu"}} </td>
          <td> {{$nhanvien->khoa->ten}}</td>
          <td>
              <a href='{{route('nhanvien.edit', $nhanvien['id'])}}'> Edit</a>
              <a href='{{route('nhanvien.delete', $nhanvien['id'])}}'> Delete</a>
          </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
@endsection
