<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller{

    public function up(){
        return view('test.upload');
    }

    public function upload(Request $request){
        $file = $request->file('img');
        echo '<pre>';print_r($file);echo'</pre>';echo '<hr>';
        $file_name = $file->getClientOriginalname();
        echo "文件名: ".$file_name;echo '</br>';
        $file_size = $file->getSize();
        echo "文件大小: ".$file_size;echo '<br>';
        $file_ext = $file->getClientOriginalExtension();
        echo "文件扩展名: ".$file_ext;echo '<br>';

        //改名
        $new_file_name = Str::random(8) . '.' . $file_ext;
        echo "新文件名: ". $new_file_name;echo '</br>';

        //保存
        $save_path = 'img';
        $res = $file->storeAs($save_path,$new_file_name);
        var_dump($res);exit;
    }
}