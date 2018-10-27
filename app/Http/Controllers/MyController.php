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
        $objnhanvien = new nhanvien();
        $getnhanvienById = $objnhanvien->find($id)->toArray();
        return view("edit")->with('getnhanvienById', $getnhanvienById);
    }

    public function update(Request $request)
    {
        $allRequest = $request->all();
        $ten        = $allRequest['ten'];
        $email      = $allRequest['email'];
        $gender     = $allRequest['gender'];
        $idnhanvien = $allRequest['id'];

        $objnhanvien               = new nhanvien();
        $getnhanvienById           = $objnhanvien->find($idnhanvien);
        $getnhanvienById->ten      = $ten;
        $getnhanvienById->email    = $email;
        $getnhanvienById->gender   = $gender;
        $getnhanvienById->save();

        return redirect()->action('MyController@index');
    }

    public function destroy($id)
    {
        nhanvien::find($id)->delete();
        return redirect()->action('MyController@index');
    }
}
