   @extends('home.father')
   @section('body')
    <title>后台管理系统</title>
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">商品列表</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action=" {{ route('search') }} " method="get" class="form-search">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 商品名称：<input class="input-medium" name="username" type="text"></p>
                </div>
            </div>
            <button type="submit" class="btn" name="search">查找</button>
            <a class="btn btn-primary" href=" {{ route('add') }} ">新增</a>
        </form>
    </div>
    <div class="well">
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
            <tr>
                <th>编号</th>
                <th>商品名称</th>
                <th>商品价格</th>
                <th>商品数量</th>
                <th>商品logo</th>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($res as $ke=>$v)
            <tr class="success">
                <td>{{$v->id}}</td>
                <td><a href="javascript:void(0);">{{$v->goods_name}}</a></td>
                <td>{{$v->goods_price}}</td>
                <td>{{$v->goods_number}}</td>
                <td><img src="{{$v->goods_logo}}"></td>
                <td>{{date("Y-m-d H:i:s",$v->create_time)}}</td>
                <td>
                    <a href="{{ url('admin/edit',[$v->id]) }}"> 编辑 </a>
                    <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='{{url('admin/del',[$v->id])}}'"> 删除 </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <!-- pagination -->
        <div class="pagination">
            <ul>
                {{ $res->links() }}
            </ul>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
    @endsection
