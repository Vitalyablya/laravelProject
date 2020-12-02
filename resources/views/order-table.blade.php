<!doctype html>
<html lang="ru">

    <head>
        
        <meta charset="utf-8" />
        <title>Таблица заказов</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="public/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('inc.header')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body  pt-0">
                                        <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-bold p-3 active" href="#">Все заказы</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="table-responsive" style="overflow: hidden;">
                                        <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"  style="margin-top: 13px;">
                                            <label>Show
                                                <select style="width: auto;display: inline-block;" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                </select> entries</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter" style="float: right;">
                                            <label>Search:
                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                            </label>
                                            </div>
                                        </div>
                                        </div>
                                            <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck">
                                                                <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Номер</th>
                                                        <th>Дата</th>
                                                        <th>Площадка</th>
                                                        <th>Стоимость</th>
                                                        <th>Статус</th>
                                                        <th style="width: 120px;">Действия</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                                                <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1572</a> </td>
                                                        <td>
                                                            04 Apr, 2020
                                                        </td>
                                                        <td>Walter Brown</td>
                                                        
                                                        <td>
                                                            $172
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                 
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck2">
                                                                <label class="custom-control-label" for="ordercheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1571</a> </td>
                                                        <td>
                                                            03 Apr, 2020
                                                        </td>
                                                        <td>Jimmy Barker</td>
                                                        
                                                        <td>
                                                            $165
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                        </td>
                                                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck3">
                                                                <label class="custom-control-label" for="ordercheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1570</a> </td>
                                                        <td>
                                                            03 Apr, 2020
                                                        </td>
                                                        <td>Donald Bailey</td>
                                                        
                                                        <td>
                                                            $146
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                      
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck4">
                                                                <label class="custom-control-label" for="ordercheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1569</a> </td>
                                                        <td>
                                                            02 Apr, 2020
                                                        </td>
                                                        <td>Paul Jones</td>
                                                        
                                                        <td>
                                                            $183
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck5">
                                                                <label class="custom-control-label" for="ordercheck5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1568</a> </td>
                                                        <td>
                                                            01 Apr, 2020
                                                        </td>
                                                        <td>Jefferson Allen</td>
                                                        
                                                        <td>
                                                            $160
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-danger font-size-12">Chargeback</div>
                                                        </td>
                                                     
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck6">
                                                                <label class="custom-control-label" for="ordercheck6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1567</a> </td>
                                                        <td>
                                                            31 Mar, 2020
                                                        </td>
                                                        <td>Jeffrey Waltz</td>
                                                        
                                                        <td>
                                                            $105
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                        </td>
                                                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck7">
                                                                <label class="custom-control-label" for="ordercheck7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1566</a> </td>
                                                        <td>
                                                            30 Mar, 2020
                                                        </td>
                                                        <td>Jewel Buckley</td>
                                                        
                                                        <td>
                                                            $112
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                       
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck8">
                                                                <label class="custom-control-label" for="ordercheck8">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1565</a> </td>
                                                        <td>
                                                            29 Mar, 2020
                                                        </td>
                                                        <td>Jamison Clark</td>
                                                        
                                                        <td>
                                                            $123
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                       
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck9">
                                                                <label class="custom-control-label" for="ordercheck9">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1564</a> </td>
                                                        <td>
                                                            28 Mar, 2020
                                                        </td>
                                                        <td>Eddy Torres</td>
                                                        
                                                        <td>
                                                            $141
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                     
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck10">
                                                                <label class="custom-control-label" for="ordercheck10">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ1563</a> </td>
                                                        <td>
                                                            28 Mar, 2020
                                                        </td>
                                                        <td>Frank Dean</td>
                                                        
                                                        <td>
                                                            $164
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                        </td>
                                                      
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck11">
                                                                <label class="custom-control-label" for="ordercheck11">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="ecommerce-product-detail.html" class="text-dark font-weight-bold">#NZ15632</a> </td>
                                                        <td>
                                                            27 Mar, 2020
                                                        </td>
                                                        <td>James Hamilton</td>
                                                        
                                                        <td>
                                                            $154
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                                        </td>
                                                  

                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite" style="margin-left: 20px">Showing 1 to 10 of 11 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination pagination-rounded" style="float:right">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                @include('inc.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="public/assets/libs/jquery/jquery.min.js"></script>
        <script src="public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
