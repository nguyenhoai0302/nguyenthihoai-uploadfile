<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function post(Request $request){
        return back()->withInput(
            $request->only('username')
        );
    }

    public function upload(Request $request)
    {
        $path = 'images';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'nguyenthihoai.' . $extension;

            if ($file->storeAs($path, $fileName)) {
                return "Upload thành công <br> Tên file: $fileName <br> Loại file: $extension";
            } else {
                return "Upload không thành công";
            }
        } else {
            return "Vui lòng chọn tệp cần upload";
        }
    }
}
