<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Product Details | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="product-detail">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="product-1-tab" data-toggle="pill" href="#product-1" role="tab">
                                                                    <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-2-tab" data-toggle="pill" href="#product-2" role="tab">
                                                                    <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-3-tab" data-toggle="pill" href="#product-3" role="tab">
                                                                    <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-4-tab" data-toggle="pill" href="#product-4" role="tab">
                                                                    <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-9">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block">
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
                                                    <a href="#" class="text-primary">Категория</a>
                                                    <h5 class="mt-1 mb-3">Артикул: 1231</h5>
                                                    <h5 class="mt-1 mb-3">Название товара на русском</h5>
                                                    
                                          
                                                    <p class="mt-3">Очень длинное описание продукта, которое не заканчивается после первого предложения и длится еще несколько слов.</p>
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
                                                                <textarea name="" id="" class="textrea-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                                                                </textarea>
                                                            </p><button class="btn btn-primary">Сохранить изменения</button>
                                                            

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="desc2" role="tabpanel">
                                                        <div>
                                                            <p>
                                                                <textarea name="" id="" class="textrea-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                                                                </textarea>
                                                            </p><button class="btn btn-primary">Сохранить изменения</button>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="desc3" role="tabpanel">
                                                        <div>
                                                            <p>
                                                                <textarea name="" id="" class="textrea-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                                                                </textarea>
                                                            </p><button class="btn btn-primary">Сохранить изменения</button>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 400px;">Название</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Название[EN]</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул первый</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул второй</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Артикул третий</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена первая</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена вторая</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Цена третья</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка первая</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка вторая</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ссылка третья</th>
                                                                        <td><input type="text" class="desript-input-text" value="Название"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-primary" style="margin-top: 10px">Сохранить изменения</button>
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
                                                                    <input class="col-6" type="file" name="" id="">
                                                                </li>
                                                                <li>
                                                                    <p class="right-descript col-6"">Обновить фото на 2 площалке: </p>
                                                                    <input class="col-6" type="file" name="" id="">
                                                                </li>
                                                                <li>
                                                                    <p class="right-descript col-6">Обновить фото на 3 площалке: </p>
                                                                    <input class="col-6" type="file" name="" id="">
                                                                </li>
                                                            </ul>            
                                                            <button class="btn btn-primary">Сохранить изменения</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>   

        <script src="assets/js/app.js"></script>

    </body>
</html>
