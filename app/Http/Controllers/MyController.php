<?php

namespace App\Http\Controllers;
use App\nhanvien;
use App\khoa;
use view;
use Illuminate\Http\Request;
class MyController extends Controller
{



    public function index()
   {
     
     $nhanviens = nhanvien::all();
      return view("list", compact('nhanviens'));
   }
    //
    public function create()
    {
      //goi trang view
      $idkhoa = Khoa::all();
      return view("bangnv",compact('idkhoa'));
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


      $idkhoa = Khoa::all();
      //
      $allRequest = $request->all();
      $ten = $allRequest['ten'];
      $email = $allRequest['email'];
      $gender = $allRequest['gender'];
      $idkhoa = $allRequest['id_khoa'];

      $dataInsertToDatabase = array(
        'ten' => $ten,
        'email' => $email,
        'gender'=>$gender,
        'id_khoa'=>$idkhoa,
      );
      $objnhanvien = new nhanvien();
      $objnhanvien->insert($dataInsertToDatabase);
      return redirect()->action('MyController@index');
    }
    public function edit($id)
    {
        $idkhoa = Khoa::all();
        $nhanvien = nhanvien::find($id);
        return view('edit',compact('nhanvien','idkhoa'));
    }

    public function update(Request $request)
    {
      $idkhoa = Khoa::all();
      $allRequest = $request->all();
        $ten   = $allRequest['ten'];
        $email   = $allRequest['email'];
        $gender        = $allRequest['gender'];
        $idkhoa        = $allRequest['id_khoa'];
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
        $nhanvien->id_khoa      = $idkhoa;
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
