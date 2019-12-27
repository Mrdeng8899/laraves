<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 引入Input 接收参数的
use Input;
// 引入Db类
use DB;

class IndexController extends Controller
{
    // 首页的渲染页面
    public function index(){
        return view('home.index');
//        phpinfo();
    }
    // 商品列表页的页面渲染
    public function list(){
        $res=DB::table('tpshop_goods')->paginate(5);
        return view('home.list',['res'=>$res]);
    }
    // 商品页的删除操作
    public function del(int $id){
        $db=DB::table('tpshop_goods');
        $res=$db->get();
        $data=$db->where('id','=',$id)->first();
        if($data){
           // 查询到了数据返回返回页面 删除数据
            $db->where('id','=',$id)->delete();
        };
        return redirect(route('list'));
//        dd($data);
    }

    // 商品的商品展示页面
    public function edit(int $id=0){
        // 接收参数
        $db=DB::table('tpshop_goods');
        $res=$db->get();
        $data=$db->where('id',$id)->first();
//        dump($data);
        //查询到了数据
        if($data){
            return view('home.edit',compact('data'));
        }
        return false;
    }
    // 更新数据的页面
    public function update(Request $request,int $id){
//        dd($id);
        $db=DB::table('tpshop_goods');
        $input = $request->all();
//        dump($input);die;
        $data=$db->where('id',$id)->update([
            'goods_name'=>$input['goods_name'],
            'goods_price'=>$input['goods_price'],
            'goods_number'=>$input['goods_number'],
        ]);
        return redirect(route('list'));
    }
    // 数据的新增页面展示
    public function add(){
        return view('home.add');
    }

    // 数据的新增添加到数据表
    public function save(Request $request){
        $db=DB::table('tpshop_goods');
        // 接收参数
        $res=$request->Input();
        // 参数检测
        if(empty($res['goods_price'])){
            return false;
        }
        if(empty($res['goods_number'])){
            return false;
        }
        // 添加数据 到数据表
        $db->insertGetId([
           'goods_name'=>$res['goods_name'],
           'goods_price'=>$res['goods_price'],
           'goods_introduce'=>$res['goods_introduce'],
        ]);
        return redirect('admin/list');
    }

    public function search(){

    }
}
