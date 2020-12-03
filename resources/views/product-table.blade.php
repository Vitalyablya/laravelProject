<!doctype html>
<html lang="ru">

    <head>
        
        <meta charset="utf-8" />
        <title>Таблица товаров</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../public/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="../public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="../public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="../public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                                <a class="nav-link font-weight-bold p-3 active" href="#">Все товары</a>
                                            </li>
                                        </ul>
                                        <div class="table-responsive" style="overflow: hidden;">
                                        <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length" style="margin-top: 13px;">
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
                                                        <th>Артикул</th>
                                                        <th>Название товара</th>
                                                        <th>Цена 1</th>
                                                        <th>Цена 2</th>
                                                        <th>Цена 3</th>
                                                        <th>Остаток</th>
                                                        <th style="width: 120px;">Действия</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($table as $key => $t)

                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ordercheck{{$key + 1}}">
                                                                <label class="custom-control-label" for="ordercheck{{$key + 1}}">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td><a href="/product-cart/{{$t->id}}" class="text-dark font-weight-bold">{{$t->id}}</a> </td>
                                                        <td>
                                                            {{$t-> name_ru}}
                                                        </td>
                                                        <td> {{$t-> price_shopofmoney }}</td>
                                                        
                                                        <td>
                                                            {{$t-> price_ebay }}
                                                        </td>
                                                        <td>
                                                            {{$t-> price_meshok }}
                                                            <!-- <div class="badge badge-soft-success font-size-12">Paid</div> -->
                                                        </td>
                                                        <td>
                                                            {{$t-> count  }}
                                                            <!-- <button class="btn btn-light btn-rounded">Invoice <i class="mdi mdi-download ml-2"></i></button> -->
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="/add_product" type="button" class="btn btn-success">Добавить</a>
                                                    <button type="button" class="btn btn-outline-success">Импорт excel</button>
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
        <script src="../public/assets/libs/jquery/jquery.min.js"></script>
        <script src="../public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
