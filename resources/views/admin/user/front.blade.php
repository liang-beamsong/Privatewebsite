@extends('layout.admin')

@section('title', '后台首页')

@section('link')
<link rel="stylesheet" href="admins/assets/plugins/dataTables/css/dataTables.css">
<style>
  table{
    text-align: center;
  }
</style>
@endsection

@section('content')

<section id="main-content">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">管理员列表</h3></div>
        <div class="panel-body">
          <div role="grid" id="example_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
              <div class="col-xs-6">
                <div class="dataTables_length" id="example_length">
                  <label>
                    <select name="example_length" aria-controls="example" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                      </select>
                    </label>
                </div>
              </div>
              <div class="col-xs-6">
                <div id="example_filter" class="dataTables_filter">
                  <label>搜索:
                    <input type="search" class="form-control input-sm" aria-controls="example"></label></div>
              </div>
            </div>
            <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" aria-describedby="example_info" style="width: 100%;">
              <thead>
                <tr role="row">
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column ascending" style="width: 156px;text-align: center;">用户名称</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;text-align: center;">等级</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">性别</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px;text-align: center;">状态</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;text-align: center;">操作</th></tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td class="sorting_1">admin</td>
                  <td>超级管理员</td>
                  <td>男</td>
                  <td>正常</td>
                  <td>删除 | 冻结 | 修改权限</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">admin</td>
                  <td>普通管理员</td>
                  <td>男</td>
                  <td>正常</td>
                  <td>删除 | 冻结 | 修改权限</td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-6">
                <div class="dataTables_info" id="example_info" role="alert" aria-live="polite" aria-relevant="all">总共2位管理员</div></div>
              <div class="col-xs-6">
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" aria-controls="example" tabindex="0" id="example_previous">
                      <a href="#">上一页</a></li>
                    <li class="paginate_button active" aria-controls="example" tabindex="0">
                      <a href="#">1</a></li>
                    <li class="paginate_button " aria-controls="example" tabindex="0">
                      <a href="#">2</a></li>
                    <li class="paginate_button " aria-controls="example" tabindex="0">
                      <a href="#">3</a></li>
                    <li class="paginate_button " aria-controls="example" tabindex="0">
                      <a href="#">4</a></li>
                    <li class="paginate_button " aria-controls="example" tabindex="0">
                      <a href="#">5</a></li>
                    <li class="paginate_button " aria-controls="example" tabindex="0">
                      <a href="#">6</a></li>
                    <li class="paginate_button next" aria-controls="example" tabindex="0" id="example_next">
                      <a href="#">下一页</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection