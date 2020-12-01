@section('header')
<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">

            
                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">Kevin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle mr-1"></i>Профиль</a>
                                <a class="dropdown-item" href="/product-table"><i class="ri-wallet-2-line align-middle mr-1"></i> Таблица товаров</a>
                                <a class="dropdown-item" href="/order-table"><i class="ri-wallet-2-line align-middle mr-1"></i> Таблица заказов</a>
                                <a class="dropdown-item d-block" href="#"><i class="ri-settings-2-line align-middle mr-1"></i>Токены</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle mr-1"></i>Пользователи</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="/login"><i class="ri-shut-down-line align-middle mr-1 text-danger"></i> Выйти</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>