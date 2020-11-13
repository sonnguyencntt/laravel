<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class Mycontroller extends Controller
{
    public function XinChao()
    {
        echo "Chao Cac Ban!!!!!!!";
    }
    public function KhoaHoc($ten)
    {
        echo "Khoa hoc : " .$ten;
        return redirect()->route('MyRoute');
    }
    public function getUrl(Request $request)
    {
        return $request->path();
    }
    public function postForm(Request $request)
    {
       echo $request->HoTen;
        // if($request->has('HoTen'))
        // echo "co tham so";
        // else
        // echo "khong co";
    }
    public function setCookie()
    {
        
        $response = new Response();
        $response->withCookie('..;aloalolocal1c','Check-cookie');
       return $response;

    }
    public function getCookie(request $request)
    {
        return $request->cookie('KhosaHaasdadsdoc');
    }
}
