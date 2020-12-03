<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Product Details | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../public/assets/images/favicon.ico">

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
                            <form method = "post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="product-detail">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="product-1-tab" data-toggle="pill" href="#product-1" role="tab">
                                                                    <img src="../storage/app/{{$card['image_shopofmoney']}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-2-tab" data-toggle="pill" href="#product-2" role="tab">
                                                                    <img src="../storage/app/{{$card['image_ebay']}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-3-tab" data-toggle="pill" href="#product-3" role="tab">
                                                                    <img src="../storage/app/{{$card['image_meshok']}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-9">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="../storage/app/{{$card['image_shopofmoney']}}" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="../storage/app/{{$card['image_ebay']}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="../storage/app/{{$card['image_meshok']}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end product img -->
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="mt-4 mt-xl-3">
                                                    <a href="#" class="text-primary">Категория {{$card['category']}}</a>
                                                    <h5 class="mt-1 mb-3">{{$card['id']}}</h5>
                                                    <h5 class="mt-1 mb-3">{{$card['name_ru']}}</h5>
                                                    
                                          
                                                    <p class="mt-3">{{$card['description_shopofmoney']}}</p>
                                                    <hr class="my-4">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                      

                                        <div class="mt-4">
                                            <h5 class="font-size-14 mb-3">Информация о продукте: </h5>
                                            <div class="product-desc">
                                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                    <li class="nav-item">
                                                      <a class="nav-link" id="desc-tab" data-toggle="tab" href="#desc" role="tab">Описание</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="desc-tab" data-toggle="tab" href="#desc2" role="tab">Описание второе</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="desc-tab" data-toggle="tab" href="#desc3" role="tab">Описание третее</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link active" id="specifi-tab" data-toggle="tab" href="#specifi" role="tab">Доп. информация</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content border border-top-0 p-4">
                                                    <div class="tab-pane fade" id="desc" role="tabpanel">
                                                        <div>
                                                            <p>
                                                                <textarea name="description_shopofmoney" id="" class="textrea-desc">{{$card['description_shopofmoney']}}
                                                                </textarea>
                                    
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="desc2" role="tabpanel">
                                                        <div>
                                                            <p>
                                                                <textarea name="description_ebay" id="" class="textrea-desc">{{$card['description_ebay']}}
                                                                </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="desc3" role="tabpanel">
                                                        <div>
                                                            <p>
                                                                <textarea name="description_meshok" id="" class="textrea-desc">{{$card['description_meshok']}}
                                                                </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 400px;">Название</th>
                                                                        <td><input type="text"  class="desript-input-text" name ="name_ru" value="{{$card['name_ru']}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Название[EN]</th>
                                                                        <td><input type="text" class="desript-input-text" name ="name_en" value="{{$card['name_en']}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул</th>
                                                                        <td><input type="text" class="desript-input-text" name ="id" value="{{$card['id']}}" readonly ></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул первый</th>
                                                                        <td><input type="text" class="desript-input-text" name ="id_shopofmoney" value="{{$card['id_shopofmoney']}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул второй</th>
                                                                        <td><input type="text" class="desript-input-text" name ="id_ebay" value="{{$card['id_ebay']}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул третий</th>
                                                                        <td><input type="text" class="desript-input-text" name ="id_meshok" value="{{$card['id_meshok']}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена первая</th>
                                                                        <td><input type="text" class="desript-input-text" name ="price_shopofmoney" value="{{$card['price_shopofmoney']}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена вторая</th>
                                                                        <td><input type="text" class="desript-input-text" name ="price_ebay" value="{{$card['price_ebay']}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена третья</th>
                                                                        <td><input type="text" class="desript-input-text" name ="price_meshok" value="{{$card['price_meshok']}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка первая</th>
                                                                        <td><input type="text" class="desript-input-text" name ="url_shopofmoney" value="{{$card['url_shopofmoney']}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка вторая</th>
                                                                        <td><input type="text" class="desript-input-text" name ="url_ebay" value="{{$card['url_ebay']}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка третья</th>
                                                                        <td><input type="text" class="desript-input-text" name ="url_meshok" value="{{$card['url_meshok']}}" readonly></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="font-size-14">Обновить информацию: </h5>
                                        
                                            <div class="border p-4 rounded">
                                                <div class="inputs-footer">
                                                    <div class="container">

                                                            <h4 class="col-12">Обновить фотографии на площадках: </h4>
                                                            <ul class="col-12 row">
                                                                <li>
                                                                    <p class="right-descript col-6">Обновить фото на 1 площалке: </p>
                                                                    <input class="col-6" type="file" name="image_shopofmoney" id="">
                                                                </li>
                                                                <li>
                                                                    <p class="right-descript col-6">Обновить фото на 2 площалке: </p>
                                                                    <input class="col-6" type="file" name="image_ebay" id="">
                                                                </li>
                                                                <li>
                                                                    <p class="right-descript col-6">Обновить фото на 3 площалке: </p>
                                                                    <input class="col-6" type="file" name="image_meshok" id="">
                                                                </li>
                                                            </ul>            
                                                            <button class="btn btn-primary">Сохранить изменения</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <!-- end card -->
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

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="../public/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="../public/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="../public/assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="../public/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="../public/assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="../public/assets/libs/jquery/jquery.min.js"></script>
        <script src="../public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../public/assets/libs/node-waves/waves.min.js"></script>   

        <script src="../public/assets/js/app.js"></script>

    </body>
</html>
