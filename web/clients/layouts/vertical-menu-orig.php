<?php

    //require_once "../config.php";

    ?>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/idy-small.png" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <?php echo $language["Mega_Menu"]; ?>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo $language["UI_Components"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Lightbox"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Range_Slider"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Sweet_Alert"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Rating"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Forms"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Tables"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Charts"]; ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo $language["Applications"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Ecommerce"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Calendar"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Email"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Projects"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Tasks"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Contacts"]; ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo $language["Extra_Pages"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Light_Sidebar"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Compact_Sidebar"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Horizontal_layout"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Maintenance"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Coming_Soon"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Timeline"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["FAQs"]; ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0"><?php echo $language["UI_Components"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Lightbox"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Range_Slider"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Sweet_Alert"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Rating"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Forms"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Tables"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $language["Charts"]; ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if ($lang == 'en') { ?>
                        <img src="assets/images/flags/us.jpg" alt="Header Language" height="16" class="mr-1"> <span class="align-middle">English</span>
                    <?php } ?>
                    <?php if ($lang == 'es') { ?>
                        <img src="assets/images/flags/spain.jpg" alt="Header Language" height="16" class="mr-1"> <span class="align-middle">Spanish</span>
                    <?php } ?>
                    <?php if ($lang == 'de') { ?>
                        <img src="assets/images/flags/germany.jpg" alt="Header Language" height="16" class="mr-1"> <span class="align-middle">German</span>
                    <?php } ?>
                    <?php if ($lang == 'it') { ?>
                        <img src="assets/images/flags/italy.jpg" alt="Header Language" height="16" class="mr-1"> <span class="align-middle">Italian</span>
                    <?php } ?>
                    <?php if ($lang == 'ru') { ?>
                        <img src="assets/images/flags/russia.jpg" alt="Header Language" height="16" class="mr-1"> <span class="align-middle">Russian</span>
                    <?php } ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="?lang=en" class="dropdown-item notify-item">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=es" class="dropdown-item notify-item">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=de" class="dropdown-item notify-item">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=it" class="dropdown-item notify-item">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=ru" class="dropdown-item notify-item">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge badge-danger badge-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> <?php echo $language["Notifications"]; ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> <?php echo $language["View_All"]; ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1"><?php echo $language["Your_order_is_placed"]; ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo $language["languages_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $language["3_min_ago"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo $language["simplified_English"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $language["1_hours_ago"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1"><?php echo $language["Your_item_is_shipped"]; ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo $language["several_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $language["3_min_ago"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo $language["Cambridge_occidental"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $language["1_hours_ago"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> <?php echo $language["View_More"]; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1"><?php echo ucfirst($_SESSION["username"]); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> <?php echo $language["Profile"]; ?></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> <?php echo $language["My_Wallet"]; ?></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> <?php echo $language["Settings"]; ?></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> <?php echo $language["Lock_screen"]; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <?php echo $language["Logout"]; ?></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?php echo $language["Menu"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">04</span>
                        <span><?php echo $language["Dashboard"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.php"><?php echo $language["Default"]; ?></a></li>
                        <li><a href="dashboard-saas.php"><?php echo $language["Saas"]; ?></a></li>
                        <li><a href="dashboard-crypto.php"><?php echo $language["Crypto"]; ?></a></li>
                        <li><a href="dashboard-blog.php"><?php echo $language["Blog"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span><?php echo $language["Layouts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?php echo $language["Vertical"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.php"><?php echo $language["Light_Sidebar"]; ?></a></li>
                                <li><a href="layouts-compact-sidebar.php"><?php echo $language["Compact_Sidebar"]; ?></a></li>
                                <li><a href="layouts-icon-sidebar.php"><?php echo $language["Icon_Sidebar"]; ?></a></li>
                                <li><a href="layouts-boxed.php"><?php echo $language["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-preloader.php"><?php echo $language["Preloader"]; ?></a></li>
                                <li><a href="layouts-colored-sidebar.php"><?php echo $language["Colored_Sidebar"]; ?></a></li>
                                <li><a href="layouts-scrollable.php"><?php echo $language["Scrollable"]; ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?php echo $language["Horizontal"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.php"><?php echo $language["Horizontal"]; ?></a></li>
                                <li><a href="layouts-h-topbar-light.php"><?php echo $language["Topbar_Light"]; ?></a></li>
                                <li><a href="layouts-h-boxed.php"><?php echo $language["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-h-preloader.php"><?php echo $language["Preloader"]; ?></a></li>
                                <li><a href="layouts-h-colored.php"><?php echo $language["Topbar_Colored"]; ?></a></li>
                                <li><a href="layouts-h-scrollable.php"><?php echo $language["Scrollable"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title"><?php echo $language["Apps"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span><?php echo $language["Projects"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!--<li><a href="projects-grid.php"><?php echo $language["Projects_Grid"]; ?></a></li>-->
                        <li><a href="projects-list.php"><?php echo $language["Projects_List"]; ?></a></li>
                       <!-- <li><a href="projects-overview.php"><?php echo $language["Project_Overview"]; ?></a></li>
                        <li><a href="projects-create.php"><?php echo $language["Create_New"]; ?></a></li>-->
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span><?php echo $language["Modeling"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!--
                        <li><a href="tables-basic.php"><?php echo $language["Basic_Tables"]; ?></a></li>
                        <li><a href="tables-datatable.php"><?php echo $language["Data_Tables"]; ?></a></li> 
                        <li><a href="tables-telerik.php"><?php echo $language["IDY_Splitter_Panes"]; ?></a></li>
                        <li><a href="tables-telerik3.php"><?php echo $language["IDY_Single_Grid_LeftPane"]; ?></a></li>-->
                        <li><a href="tables-telerik2.php"><?php echo $language["IDY_Single_TreeList"]; ?></a></li>
                       <!-- <li><a href="tables-telerik4.php"><?php echo $language["IDY_Single_Grid"]; ?></a></li>-->
                        
                    </ul>
                </li>

<!--
                <li>
                    <a href="calendar.php" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span><?php echo $language["Calendar"]; ?></span>
                    </a>
                </li>

                <li>
                    <a href="chat.php" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span><?php echo $language["Chat"]; ?></span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager.php" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge badge-pill badge-success float-right"><?php echo $language["New"]; ?></span>
                        <span><?php echo $language["File_Manager"]; ?></span>
                    </a>
                </li>
-->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span><?php echo $language["Ecommerce"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php"><?php echo $language["Products"]; ?></a></li>
                        <li><a href="ecommerce-product-detail.php"><?php echo $language["Product_Detail"]; ?></a></li>
                        <li><a href="ecommerce-orders.php"><?php echo $language["Orders"]; ?></a></li>
                        <li><a href="ecommerce-customers.php"><?php echo $language["Customers"]; ?></a></li>
                        <li><a href="ecommerce-cart.php"><?php echo $language["Cart"]; ?></a></li>
                        <li><a href="ecommerce-checkout.php"><?php echo $language["Checkout"]; ?></a></li>
                        <li><a href="ecommerce-shops.php"><?php echo $language["Shops"]; ?></a></li>
                        <li><a href="ecommerce-add-product.php"><?php echo $language["Add_Product"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span><?php echo $language["Crypto"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.php"><?php echo $language["Wallet"]; ?></a></li>
                        <li><a href="crypto-buy-sell.php"><?php echo $language["Buy_Sell"]; ?></a></li>
                        <li><a href="crypto-exchange.php"><?php echo $language["Exchange"]; ?></a></li>
                        <li><a href="crypto-lending.php"><?php echo $language["Lending"]; ?></a></li>
                        <li><a href="crypto-orders.php"><?php echo $language["Orders"]; ?></a></li>
                        <li><a href="crypto-kyc-application.php"><?php echo $language["KYC_Application"]; ?></a></li>
                        <li><a href="crypto-ico-landing.php"><?php echo $language["ICO_Landing"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span><?php echo $language["Email"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php"><?php echo $language["Inbox"]; ?></a></li>
                        <li><a href="email-read.php"><?php echo $language["Read_Email"]; ?></a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge badge-pill badge-success float-right"><?php echo $language["New"]; ?></span>
                                <span><?php echo $language["Templates"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.php"><?php echo $language["Basic_Action"]; ?></a></li>
                                <li><a href="email-template-alert.php"><?php echo $language["Alert_Email"]; ?></a></li>
                                <li><a href="email-template-billing.php"><?php echo $language["Billing_Email"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span><?php echo $language["Invoices"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.php"><?php echo $language["Invoice_List"]; ?></a></li>
                        <li><a href="invoices-detail.php"><?php echo $language["Invoice_Detail"]; ?></a></li>
                    </ul>
                </li>

               

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span><?php echo $language["Tasks"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.php"><?php echo $language["Task_List"]; ?></a></li>
                        <li><a href="tasks-kanban.php"><?php echo $language["Kanban_Board"]; ?></a></li>
                        <li><a href="tasks-create.php"><?php echo $language["Create_Task"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span><?php echo $language["Contacts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.php"><?php echo $language["User_Grid"]; ?></a></li>
                        <li><a href="contacts-list.php"><?php echo $language["User_List"]; ?></a></li>
                        <li><a href="contacts-profile.php"><?php echo $language["Profile"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge badge-pill badge-success float-right"><?php echo $language["New"]; ?></span>
                        <i class="bx bx-detail"></i>
                        <span><?php echo $language["Blog"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list.php"><?php echo $language["Blog_List"]; ?></a></li>
                        <li><a href="blog-grid.php"><?php echo $language["Blog_Grid"]; ?></a></li>
                        <li><a href="blog-details.php"><?php echo $language["Blog_Details"]; ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?php echo $language["Pages"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span class="badge badge-pill badge-success float-right"><?php echo $language["New"]; ?></span>
                        <span><?php echo $language["Authentication"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.php"><?php echo $language["Login"]; ?></a></li>
                        <li><a href="auth-login-2.php"><?php echo $language["Login"]; ?> 2</a></li>
                        <li><a href="auth-register.php"><?php echo $language["Register"]; ?></a></li>
                        <li><a href="auth-register-2.php"><?php echo $language["Register"]; ?> 2</a></li>
                        <li><a href="auth-recoverpw.php"><?php echo $language["Recover_Password"]; ?></a></li>
                        <li><a href="auth-recoverpw-2.php"><?php echo $language["Recover_Password"]; ?> 2</a></li>
                        <li><a href="auth-lock-screen.php"><?php echo $language["Lock_screen"]; ?></a></li>
                        <li><a href="auth-lock-screen-2.php"><?php echo $language["Lock_screen"]; ?> 2</a></li>
                        <li><a href="auth-confirm-mail.php"><?php echo $language["Confirm_Mail"]; ?></a></li>
                        <li><a href="auth-confirm-mail-2.php"><?php echo $language["Confirm_Mail"]; ?> 2</a></li>
                        <li><a href="auth-email-verification.php"><?php echo $language["Email_verification"]; ?></a></li>
                        <li><a href="auth-email-verification-2.php"><?php echo $language["Email_verification"]; ?> 2</a></li>
                        <li><a href="auth-two-step-verification.php"><?php echo $language["Two_step_verification"]; ?></a></li>
                        <li><a href="auth-two-step-verification-2.php"><?php echo $language["Two_step_verification"]; ?> 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span><?php echo $language["Utility"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php"><?php echo $language["Starter_Page"]; ?></a></li>
                        <li><a href="pages-maintenance.php"><?php echo $language["Maintenance"]; ?></a></li>
                        <li><a href="pages-comingsoon.php"><?php echo $language["Coming_Soon"]; ?></a></li>
                        <li><a href="pages-timeline.php"><?php echo $language["Timeline"]; ?></a></li>
                        <li><a href="pages-faqs.php"><?php echo $language["FAQs"]; ?></a></li>
                        <li><a href="pages-pricing.php"><?php echo $language["Pricing"]; ?></a></li>
                        <li><a href="pages-404.php"><?php echo $language["Error_404"]; ?></a></li>
                        <li><a href="pages-500.php"><?php echo $language["Error_500"]; ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?php echo $language["Components"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span><?php echo $language["UI_Elements"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php"><?php echo $language["Alerts"]; ?></a></li>
                        <li><a href="ui-buttons.php"><?php echo $language["Buttons"]; ?></a></li>
                        <li><a href="ui-cards.php"><?php echo $language["Cards"]; ?></a></li>
                        <li><a href="ui-carousel.php"><?php echo $language["Carousel"]; ?></a></li>
                        <li><a href="ui-dropdowns.php"><?php echo $language["Dropdowns"]; ?></a></li>
                        <li><a href="ui-grid.php"><?php echo $language["Grid"]; ?></a></li>
                        <li><a href="ui-images.php"><?php echo $language["Images"]; ?></a></li>
                        <li><a href="ui-lightbox.php"><?php echo $language["Lightbox"]; ?></a></li>
                        <li><a href="ui-modals.php"><?php echo $language["Modals"]; ?></a></li>
                        <li><a href="ui-rangeslider.php"><?php echo $language["Range_Slider"]; ?></a></li>
                        <li><a href="ui-session-timeout.php"><?php echo $language["Session_Timeout"]; ?></a></li>
                        <li><a href="ui-progressbars.php"><?php echo $language["Progress_Bars"]; ?></a></li>
                        <li><a href="ui-sweet-alert.php"><?php echo $language["Sweet_Alert"]; ?></a></li>
                        <li><a href="ui-tabs-accordions.php"><?php echo $language["Tabs_&_Accordions"]; ?></a></li>
                        <li><a href="ui-typography.php"><?php echo $language["Typography"]; ?></a></li>
                        <li><a href="ui-video.php"><?php echo $language["Video"]; ?></a></li>
                        <li><a href="ui-general.php"><?php echo $language["General"]; ?></a></li>
                        <li><a href="ui-colors.php"><?php echo $language["Colors"]; ?></a></li>
                        <li><a href="ui-rating.php"><?php echo $language["Rating"]; ?></a></li>
                        <li><a href="ui-notifications.php"><?php echo $language["Notifications"]; ?></a></li>
                        <li><a href="ui-image-cropper.php"><?php echo $language["Image_Cropper"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge badge-pill badge-danger float-right">10</span>
                        <span><?php echo $language["Forms"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php"><?php echo $language["Form_Elements"]; ?></a></li>
                        <li><a href="form-layouts.php"><?php echo $language["Form_Layouts"]; ?></a></li>
                        <li><a href="form-validation.php"><?php echo $language["Form_Validation"]; ?></a></li>
                        <li><a href="form-advanced.php"><?php echo $language["Form_Advanced"]; ?></a></li>
                        <li><a href="form-editors.php"><?php echo $language["Form_Editors"]; ?></a></li>
                        <li><a href="form-uploads.php"><?php echo $language["Form_File_Upload"]; ?></a></li>
                        <li><a href="form-xeditable.php"><?php echo $language["Form_Xeditable"]; ?></a></li>
                        <li><a href="form-repeater.php"><?php echo $language["Form_Repeater"]; ?></a></li>
                        <li><a href="form-wizard.php"><?php echo $language["Form_Wizard"]; ?></a></li>
                        <li><a href="form-mask.php"><?php echo $language["Form_Mask"]; ?></a></li>
                    </ul>
                </li>

               

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span><?php echo $language["Charts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.php"><?php echo $language["Apex_Charts"]; ?></a></li>
                        <li><a href="charts-echart.php"><?php echo $language["E_Charts"]; ?></a></li>
                        <li><a href="charts-chartjs.php"><?php echo $language["Chartjs_Chart"]; ?></a></li>
                        <li><a href="charts-flot.php"><?php echo $language["Flot_Chart"]; ?></a></li>
                        <li><a href="charts-tui.php"><?php echo $language["Toast_UI_Chart"]; ?></a></li>
                        <li><a href="charts-knob.php"><?php echo $language["Jquery_Knob_Chart"]; ?></a></li>
                        <li><a href="charts-sparkline.php"><?php echo $language["Sparkline_Chart"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span><?php echo $language["Icons"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.php">Boxicons</a></li>
                        <li><a href="icons-materialdesign.php">Material Design</a></li>
                        <li><a href="icons-dripicons.php">Dripicons</a></li>
                        <li><a href="icons-fontawesome.php">Font awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span><?php echo $language["Maps"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php"><?php echo $language["Google_Maps"]; ?></a></li>
                        <li><a href="maps-vector.php"><?php echo $language["Vector_Maps"]; ?></a></li>
                        <li><a href="maps-leaflet.php"><?php echo $language["Leaflet_Maps"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span><?php echo $language["Multi_Level"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"><?php echo $language["Level_1.1"]; ?></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"><?php echo $language["Level_1.2"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"><?php echo $language["Level_2.1"]; ?></a></li>
                                <li><a href="javascript: void(0);"><?php echo $language["Level_2.2"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->