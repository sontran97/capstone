@extends('layouts.master')
@section('content')
@include('error')
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
            <label for="gender">gender</label>
            <select name="gender" class="form-control">
                <option value="0">nam</option>
                <option value="1">nu</option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
