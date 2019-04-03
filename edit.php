<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>xxxxx</title>
<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<!-- plugins -->
<link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
<link href="asset/css/style.css" rel="stylesheet">
<!-- end: Css -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="asset/js/html5shiv.min.js"></script>
      <script src="asset/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard">
<!-- start: Header -->
    <?php include 'head.html';?>
    <?php include 'left.html';?>
  <!-- end: Left Menu --> 
  
  <!-- start: content -->
  <div id="content">
    <div class="panel">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">新增页面</h3>
          <p class="animated fadeInDown"> 业务 <span class="fa-angle-right fa"></span> 新增页面 </p>
        </div>
      </div>
    </div>
    <div class="form-element">
      <div class="col-md-12 padding-0">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>基本表单</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">选择商品类型</button>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-3">
                    <select class="form-control">
                      <option>option one</option>
                      <option>option two</option>
                      <option>option three</option>
                      <option>option four</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">单选</label>
                  <div class="col-sm-11">
                    <div class="col-sm-1 padding-0">
                      <input type="radio" name="option">
                      条件一 </div>
                    <div class="col-sm-1 padding-0">
                      <input type="radio" name="option">
                      条件二 </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">复选</label>
                  <div class="col-sm-11">
                    <div class="col-sm-1 padding-0">
                      <input type="checkbox" name="option">
                      条件一 </div>
                    <div class="col-sm-1 padding-0">
                      <input type="checkbox" name="option">
                      条件二 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4>列表名称</h4>
            </div>
            <div class="panel-body">
              <div class="responsive-table">
                <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0"  style="width: 100%;">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" style="width: 60px;">序号</th>
                            <th class="sorting" >行政区划</th>
                            <th class="sorting" style="width: 160px;">商品类型</th>
                            <th class="sorting" style="width: 160px;">抽检批次数</th>
                            <th class="sorting" style="width: 160px;">操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td><select class="form-control">
                      <option>option one</option>
                      <option>option two</option>
                      <option>option three</option>
                      <option>option four</option>
                    </select></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">添加</button></td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td><select class="form-control">
                      <option>option one</option>
                      <option>option two</option>
                      <option>option three</option>
                      <option>option four</option>
                    </select></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">添加</button></td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td><select class="form-control">
                      <option>option one</option>
                      <option>option two</option>
                      <option>option three</option>
                      <option>option four</option>
                    </select></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">添加</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center" style="margin:20px;">
              <input class="submit btn btn-danger" type="submit" value="提交">
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end: content --> 
  
</div>

<!--弹出复选-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog form-element">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">选择商品类型</h4>
      </div>
      <div class="modal-body form-element-padding">
        <div class="form-group">
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件二 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件二 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件二 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
          <div class="col-sm-3 padding-0">
            <input type="checkbox" name="option">
            条件一 </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">提交更改</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal --> 
</div>
<!--弹出复选 end--> 

<!-- start: Javascript --> 
<script src="asset/js/jquery.min.js"></script> 
<script src="asset/js/jquery.ui.min.js"></script> 
<script src="asset/js/bootstrap.min.js"></script> 
<!-- plugins --> 
<script src="asset/js/plugins/jquery.nicescroll.js"></script> 
<!-- custom --> 
<script src="asset/js/main.js"></script> 
<!-- end: Javascript -->
<script>
$("#left-menu-2").click() ;
</script>
</body>
</html>