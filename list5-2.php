<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>列表页面</title>
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
    
<!-- end: Header -->
<div class="container-fluid mimin-wrapper"> 
  <!-- start:Left Menu -->
  

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
    <div class="col-md-12 padding-0 form-element">
      <div class="col-md-12">
       <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>查询条件</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <select class="form-control">
                                    <option>option one</option>
                                    <option>option two</option>
                                    <option>option three</option>
                                    <option>option four</option>
                                  </select>
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <select class="form-control">
                                    <option>option one</option>
                                    <option>option two</option>
                                    <option>option three</option>
                                    <option>option four</option>
                                  </select>
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label text-right">名称</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-sm-2">
                    <input class="submit btn btn-danger" type="submit" value="提交">
                  </div>
                </div>
            </div>
          </div>
        <div class="panel">
          <div class="panel-heading">
            <h3>列表名称</h3>
          </div>
          <div class="panel-body">
            <div class="responsive-table">
              <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0"  style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc"style="width: 60px;">Name</th>
                          <th class="sorting" style="width: 60px;">Position</th>
                          <th class="sorting" style="width: 60px;">Office</th>
                          <th class="sorting" style="width: 60px;">Age</th>
                          <th class="sorting"  style="width: 60px;">Start date</th>
                          <th class="sorting"  style="width: 61px;">Salary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td class="sorting_1">Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end: content --> 
</div>
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