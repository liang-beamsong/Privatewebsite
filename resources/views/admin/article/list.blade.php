@extends('layout.admin')

@section('title', '文章列表')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章列表</h3>
            <div class="actions pull-right">
            </div>
        </div>
        <div class="panel-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>文章名称</th>
                        <th>文章分类</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <!-- active  success info warning danger-->
                    <tr class="active">
                        <td>1</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>修改 | 删除</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection