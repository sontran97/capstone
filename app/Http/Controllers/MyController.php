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

    public function update(Request $request,$id)
    {
       $nhanvien = nhanvien::find($id);


        $nhanvien->ten        = $request->ten;
        $nhanvien->email      =  $request->email;
        $nhanvien->gender     = $request->gender;
        $nhanvien->save();

        return redirect()->route('nhanvien.index');
    }

    public function destroy($id)
    {
        nhanvien::find($id)->delete();
        return redirect()->route('nhanvien.index');
    }
}
