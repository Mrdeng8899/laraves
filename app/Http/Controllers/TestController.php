<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 引入接收参数
use Input;
// 引入DB文件
use DB;
class TestController extends Controller
{
    //
//    public function test(){
//        phpinfo();
//    }
//    public function add(){

//      // 定义关联操作的表
//        $in=DB::table('java_admin');
////        $res=$in->insert([
////                 'username'=>'user',
////                 'call'=>'18688337799',
////                 'email'=>'1843149186@qq.com',
////                 'role'=>'超级管理员',
////        ]);
////        dd($res);
////        $res=$in->insertGetId([
////            'username'=>'user',
////            'call'=>'18688337799',
////            'email'=>'1843149186@qq.com',
////            'role'=>'超级管理员',
////        ]);
////        dump($res);
//    }

//    // 修改操作
//    public function update(){
//        $db=DB::table('java_admin');
//        $res=$db->where('id','1')->update([
//            'username'=>'admins',
//        ]);
//        dd($res);
//    }
//    // 查询数据
//    public function select(){
//        $db=DB::table('java_admin');
//        $res=$db->get();
//        // get查询的数据是一个对象
//        foreach ($res as $k=>$v){
////            dd($res);
//            echo "当前的id的,{$v->id},名字是{$v->username},电话是{$v->call},邮箱是{$v->email},角色是{$v->role}".'</br>';
//        }
//
//        // 查询id>3的数据
////        $data=$db->where('id','>','2')->get();
////        dd($data);
////        dump($res);
//
//        // 使用并且的方式查询
////        $data=$db->where('id','=','2')->where('status','=','1')->get();
////        dd($data);
//        // 使用或者的关系
////        $data=$db->where('id','>','8')->OrWhere('status','=','0')->get();
////        dump($data);die;
//            // 取出单行数据  取出一条数据  first()s
////        $data=$db->where('id','=','1')->first();
//        // 取出具体的某个值 value()
////        $data=$db->where('id','=','1')->value("username");
//        // 查询具体指定的一些字段的值 和上面的value对比就是上面值得一个 下 这个取出多个
////        $data=DB::table("java_admin")->select('username','call')->get();
//        // 排序 使用函数 orderBy();
////        $data=$db->orderBy('id','desc')->get();
//        // 分页查询
////        $data=$db->limit(9)->offset(3)->get();
////        dump($data);
//    }
//
//    // 删除数据
//    public function del(){
//        // 指定需要操作的数据标配  delete 直接删除数据表的数据
//        $db=DB::table('java_admin');
////        $res=$db->where('id','<','7')->delete();
////        dd($res);
//
//        //执行任意的insert update delete语句  statement()
////        $ds=DB::statement("");
//        // select(); 执行任意的select语句 不影响记录的语句使用 select 语法
//        $res=DB::select("select * from java_admin");
//        dd($res);
//    }
//    public function test3(){
//        $data=date('Y-m-d H:i:s',time());
//        // 试图显示  展示视图 页面上展示{{$dat  a}}
////        return view('home/test3',['data'=>$data]);
//        // 或者使用PHP自带的一个函数
//        // 传递一个时间戳
//        $time=time();
//
//        return view('home/test3',compact('data','time'));
//        //模板中直接使用函数语法{{函数名(参数1,参数2,参数2....)}}
//    }
//    // 循环测试
//    public function test4(){
//        $db=DB::table('java_admin');
//        $data=$db->get();
//        return view('home.test',compact('data'));
//    }
//
//    //  模板的继承
//    public function test5(){
//        return view('home.test4');
//    }
//


}
