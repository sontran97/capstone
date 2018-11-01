<?php

namespace App\Http\Controllers;
use App\nhanvien;
use view;
use Illuminate\Http\Request;
class MyController extends Controller
{


    // public function GetData($id)
    // {
    //   echo "assafafsf".$id;
    // }
    // public function postForm(Request $request)
    // {
    //   echo $request->uname.'<br>';
    //
    //   echo $request->psw;
    // }
    // public function postAdd(requestnv $nhanvienre){
    // //
    // }
    public function index()
   {
     $nhanviens = nhanvien::all();
      return view("list", compact('nhanviens'));
   }
    //
    public function create()
    {
      //goi trang view
      return view("bangnv");
    }
    public function store( Request $request)
    {
      $request-> validate([
        'ten'=> 'required|string|min:6',
        'email'=> 'required|email|max:255|unique:nhanvien'
      ],
      [
        'ten.required' =>'ten khong duoc bo trong',
        'ten.string' =>'ten phai la chu',
        'ten.min' =>'ten phai lon hon 6 ki tu',
        'email.required' =>'email khong duoc bo trong',
        'email.email' =>'email sai dinh dang',
        'email.unique' =>'email da duoc su dung'
      ]
    );

      //
      $allRequest = $request->all();
      $ten = $allRequest['ten'];
      $email = $allRequest['email'];
      $gender = $allRequest['gender'];

      $dataInsertToDatabase = array(
        'ten' => $ten,
        'email' => $email,
        'gender'=>$gender,
      );
      $objnhanvien = new nhanvien();
      $objnhanvien->insert($dataInsertToDatabase);
      return redirect()->action('MyController@index');
    }
    public function edit($id)
    {
        $nhanvien = nhanvien::find($id);
        return view('edit',compact('nhanvien'));
    }

    public function update(Request $request)
    {

      $allRequest = $request->all();
        $ten   = $allRequest['ten'];
        $email   = $allRequest['email'];
        $gender        = $allRequest['gender'];
        $id     = $allRequest['id'];


        $nhanvien       = new  Nhanvien();
        $nhanvien    = $nhanvien->find($id);
        //
        $request-> validate([
        'ten'=> 'required|string|min:6',
        'email'=> 'required|email|max:255|unique:nhanvien,email,'.$nhanvien->id
      ],
      [
        'ten.required' =>'ten khong duoc bo trong',
        'ten.string' =>'ten phai la chu',
        'ten.min' =>'ten phai lon hon 6 ki tu',
        'email.required' =>'email khong duoc bo trong',
        'email.email' =>'email sai dinh dang',
        'email.unique' =>'email da duoc su dung'
      ]
    );
        //
        $nhanvien->ten = $ten;
        $nhanvien->email = $email;
        $nhanvien->gender      = $gender;
        $nhanvien->save();

        return redirect()->route('nhanvien.index');
    }

    public function destroy($id)
    { +
        nhanvien::find($id)->delete();
        return redirect()->route('nhanvien.index');
    }
    // public function postAdd( Request $request){
    //   $this -> Validate($request,
    //   ["ten" => "require"],
    //   ["ten.require 3"=> "please iput to ten"]
    // );
    // }
}
