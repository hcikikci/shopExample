<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">English</span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown  d-flex shopping-cart">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark"> My Shopping Cart</h6>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-danger-transparent header-badge text-danger fs-14">Hurry Up!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-dropdown-list message-menu">
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/pngs/4.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Flower Pot for Home Decor</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $438
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/pngs/6.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Black Digital Camera</h5>
                                                            <span>Status: <span class="text-danger">Out Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/pngs/8.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Stylish Rockerz 255 Ear Pods</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $323
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/pngs/1.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Women Party Wear Dress</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex p-4">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/pngs/3.jpg"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Running Shoes for men</h5>
                                                            <span>Status: <span class="text-success">In Stock</span></span>
                                                            <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $456
                                                            </span>
                                                            <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                                <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <div class="dropdown-footer">
                                                    <a class="btn btn-primary btn-pill w-sm btn-sm py-2" href="checkout.html"><i class="fe fe-check-circle"></i> Checkout</a>
                                                    <span class="float-end p-2 fs-17 fw-semibold">Total: $6789</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">New Application received
                                                            </h5>
                                                            <span class="notification-subtext">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Project has been
                                                                approved</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Your Product Delivered
                                                            </h5>
                                                            <span class="notification-subtext">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                            <i class="fe fe-user-plus"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Friend Requests</h5>
                                                            <span class="notification-subtext">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="notify-list.html"
                                                    class="dropdown-item text-center p-3 text-muted">View all
                                                    Notification</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                        <div class="dropdown  d-flex message">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5
                                                            Messages</h6>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0)" class="text-muted p-0 fs-12">make all unread</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-menu message-menu-scroll">
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/1.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Peter Theil</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    6:45 am
                                                                </small>
                                                            </div>
                                                            <span>Commented on file Guest list....</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/15.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Abagael Luth</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    10:35 am
                                                                </small>
                                                            </div>
                                                            <span>New Meetup Started......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/12.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Brizid Dawson</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    2:17 pm
                                                                </small>
                                                            </div>
                                                            <span>Brizid is in the Warehouse...</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/4.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Shannon Shaw</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>New Product Realease......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/3.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Cherry Blossom</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>You have appointment on......</span>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="javascript:void(0)" class="dropdown-item text-center p-3 text-muted">See all
                                                    Messages</a>
                                            </div>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="../assets/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">Percy Kewshun</h5>
                                                        <small class="text-muted">Senior Admin</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="login.html">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                                    <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                                    <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                                    <li><a href="chat.html" class="slide-item"> Chat</a></li>
                                    <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                    <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                    <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                                    <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                    <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                    <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                    <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                                    <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                                    <li><a href="chart.html" class="slide-item"> Charts</a></li>
                                    <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                    <li><a href="users-list.html" class="slide-item"> User List</a></li>
                                    <li><a href="search.html" class="slide-item">Search</a></li>
                                    <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                                    <li><a href="widgets.html" class="slide-item"> Widgets</a></li>

                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Bootstrap</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                                    <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                                    <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                                    <li><a href="colors.html" class="slide-item"> Colors</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Avatars</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="avatarsquare.html" class="sub-slide-item"> Avatar-Square</a></li>
                                            <li><a href="avatar-round.html" class="sub-slide-item"> Avatar-Rounded</a></li>
                                            <li><a href="avatar-radius.html" class="sub-slide-item"> Avatar-Radius</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dropdown.html" class="slide-item"> Drop downs</a></li>
                                    <li><a href="listgroup.html" class="slide-item"> List Group</a></li>
                                    <li><a href="tags.html" class="slide-item"> Tags</a></li>
                                    <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                                    <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                                    <li><a href="typography.html" class="slide-item"> Typography</a></li>
                                    <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
                                    <li><a href="badge.html" class="slide-item"> Badges / Pills</a></li>
                                    <li><a href="panels.html" class="slide-item"> Panels</a></li>
                                    <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                                    <li><a href="offcanvas.html" class="slide-item"> Offcanvas</a></li>
                                    <li><a href="toast.html" class="slide-item"> Toast</a></li>
                                    <li><a href="scrollspy.html" class="slide-item"> Scrollspy</a></li>
                                    <li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
                                    <li><a href="accordion.html" class="slide-item"> Accordions</a></li>
                                    <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                                    <li><a href="modal.html" class="slide-item"> Modal</a></li>
                                    <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
                                    <li><a href="progress.html" class="slide-item"> Progress</a></li>
                                    <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                                        class="side-menu__icon fe fe-zap"></i><span
                                        class="side-menu__label">Landing Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Pre-build Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li><a href="profile.html" class="slide-item"> Profile</a></li>
                                    <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Notifications List</a></li>
                                    <li><a href="email-compose.html" class="slide-item"> Mail-Compose</a></li>
                                    <li><a href="email-inbox.html" class="slide-item"> Mail-Inbox</a></li>
                                    <li><a href="email-read.html" class="slide-item"> Mail-Read</a></li>
                                    <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Forms</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a></li>
                                            <li><a href="form-layouts.html" class="sub-slide-item"> Form Layouts</a></li>
                                            <li><a href="form-advanced.html" class="sub-slide-item"> Form Advanced</a></li>
                                            <li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a></li>
                                            <li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a></li>
                                            <li><a href="form-validation.html" class="sub-slide-item"> Form Validation</a></li>
                                            <li><a href="form-input-spinners.html" class="sub-slide-item"> Form Input Spinners</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Tables</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="tables.html" class="sub-slide-item">Default table</a></li>
                                            <li><a href="datatable.html" class="sub-slide-item"> Data Tables</a></li>
                                            <li><a href="edit-table.html" class="sub-slide-item"> Edit Tables</a></li>
                                            <li><a href="extension-tables.html" class="sub-slide-item"> Extension Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Extension</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="about.html" class="sub-slide-item"> About Company</a></li>
                                            <li><a href="services.html" class="sub-slide-item"> Services</a></li>
                                            <li><a href="faq.html" class="sub-slide-item"> FAQS</a></li>
                                            <li><a href="terms.html" class="sub-slide-item"> Terms</a></li>
                                            <li><a href="invoice.html" class="sub-slide-item"> Invoice</a></li>
                                            <li><a href="pricing.html" class="sub-slide-item"> Pricing Tables</a></li>
                                            <li><a href="settings.html" class="sub-slide-item"> Settings</a></li>
                                            <li><a href="blog.html" class="sub-slide-item"> Blog</a></li>
                                            <li><a href="blog-details.html" class="sub-slide-item"> Blog Details</a></li>
                                            <li><a href="blog-post.html" class="sub-slide-item"> Blog Post</a></li>
                                            <li><a href="empty.html" class="sub-slide-item"> Empty Page</a></li>
                                            <li><a href="construction.html" class="sub-slide-item"> Under Construction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="switcher-1.html" class="slide-item"> Switcher</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li><a href="shop.html" class="slide-item"> Shop</a></li>
                                    <li><a href="shop-description.html" class="slide-item"> Product Details</a></li>
                                    <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                                    <li><a href="add-product.html" class="slide-item"> Add Product</a></li>
                                    <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                                    <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File Manager</span><span class="badge bg-pink side-badge">4</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                    <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                                    <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                                    <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                                    <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Misc Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Authentication</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li><a href="login.html" class="slide-item"> Login</a></li>
                                    <li><a href="register.html" class="slide-item"> Register</a></li>
                                    <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                                    <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="400.html" class="sub-slide-item"> 400</a></li>
                                            <li><a href="401.html" class="sub-slide-item"> 401</a></li>
                                            <li><a href="403.html" class="sub-slide-item"> 403</a></li>
                                            <li><a href="404.html" class="sub-slide-item"> 404</a></li>
                                            <li><a href="500.html" class="sub-slide-item"> 500</a></li>
                                            <li><a href="503.html" class="sub-slide-item"> 503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-cpu"></i>
                                    <span class="side-menu__label">Submenu items</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                    <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Submenu-2</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                            <li class="sub-slide2">
                                                <a class="sub-side-menu__item2" href="javascript:void(0)" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Submenu-2.3</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu2">
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>General</h3>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                    <li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
                                    <li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
                                    <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Charts</span><span class="badge bg-secondary side-badge">6</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                                    <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                                    <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                                    <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                                    <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                                    <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                                    <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                                    <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                                    <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-wind"></i><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                    <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                                    <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                                    <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                                    <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                                    <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                                    <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                                    <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                                    <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                                    <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                                    <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Shop</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row row-cards">
                            <div class="col-xl-3 col-lg-4">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Categories</div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Mens </a><span class="product-label">22</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Womens </a><span class="product-label">15</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Kids </a><span class="product-label">10</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Others </a><span class="product-label">88</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Price Range</div>
                                            </div>
                                            <div class="card-body">
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1" checked>
                                                    <span class="custom-control-label">Upto $500</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">$500 - $1000</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">$1000 - $1500</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">Over $2000</span>
                                                </label>
                                                <div class="d-flex">
                                                    <div class="card-body px-0">
                                                        <div id="mySlider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Colors
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <form class="shop__filter">
                                                    <div class="row gutters-xs">
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="azure"
                                                                    class="colorinput-input" checked="">
                                                                <span class="colorinput-color bg-azure"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="indigo"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-indigo"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="purple"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-purple"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="pink"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-pink"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="red"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-red"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="orange"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-orange"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="yellow"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-yellow"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="lime"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-lime"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="green"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-green"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    <select name="beast" id="select-beast" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">Dress</option>
                                                        <option value="2">Bags &amp; Purses</option>
                                                        <option value="3">Coat &amp; Jacket</option>
                                                        <option value="4">Beauty</option>
                                                        <option value="5">Jeans</option>
                                                        <option value="5">Jewellery</option>
                                                        <option value="5">Electronics</option>
                                                        <option value="5">Sports</option>
                                                        <option value="5">Technology</option>
                                                        <option value="5">Watches</option>
                                                        <option value="5">Accessories</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Brand</label>
                                                    <select name="beast" id="select-beast1" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">White</option>
                                                        <option value="2">Black</option>
                                                        <option value="3">Red</option>
                                                        <option value="4">Green</option>
                                                        <option value="5">Blue</option>
                                                        <option value="6">Yellow</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Type</label>
                                                    <select name="beast" id="select-beast2" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">Extra Small</option>
                                                        <option value="2">Small</option>
                                                        <option value="3">Medium</option>
                                                        <option value="4">Large</option>
                                                        <option value="5">Extra Large</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Color</label>
                                                    <select name="beast" id="select-beast3" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">White</option>
                                                        <option value="2">Black</option>
                                                        <option value="3">Red</option>
                                                        <option value="4">Green</option>
                                                        <option value="5">Blue</option>
                                                        <option value="6">Yellow</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Top Products</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex overflow-visible">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="../assets/images/pngs/8.png" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="javascript:void(0)" class="fw-semibold text-dark">Hand Bag</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="../assets/images/pngs/5.png" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="javascript:void(0)" class="fw-semibold text-dark">Chair</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="../assets/images/pngs/1.png" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="javascript:void(0)" class="fw-semibold text-dark">Laptop Bag</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="../assets/images/pngs/6.png" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="javascript:void(0)" class="fw-semibold text-dark">Watch</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-9 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card p-0">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                                        <div class="input-group d-flex w-100 float-start">
                                                            <input type="text" class="form-control border-end-0 my-2" placeholder="Search ...">
                                                            <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2">
                                                                <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <ul class="nav item2-gl-menu float-end my-2">
                                                            <li class="border-end"><a href="#tab-11" class="show active" data-bs-toggle="tab" title="List style"><i class="fa fa-th"></i></a></li>
                                                            <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12">
                                                        <a href="add-product.html" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>New Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="row">
                                            <?php if (isset($products) && !empty($products)) : ?>
                                            <?php foreach ($products as $product) :?>
                                                <div class="col-md-6 col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="product-grid6">
                                                        <div class="product-image6 p-5">
                                                            <ul class="icons">
                                                                <li>
                                                                    <a href="shop-description.html" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                                </li>
                                                                <li><a href="add-product.html" class="btn btn-success"><i  class="fe fe-edit"></i></a></li>
                                                                <li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-x"></i></a></li>
                                                            </ul>
                                                            <a href="shop-description.html" >
                                                                <img class="img-fluid br-7 w-100 h-100" src="<?= $product['image']?>" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="shop-description.html"><?= $product['name']?></a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <?php for ($star = $product['rating']; $star>0 ; $star--) {?>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <?php };
                                                                    for ($star = 5-$product['rating']; $star>0 ; $star--) {?>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                    <?php }?>
                                                                </div>
                                                                <div class="price"><?= $product['discounted_price'] ?><span class="ms-4"><?= $product['price'] ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="cart.html" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</a>
                                                            <a href="wishlist.html" class="btn btn-outline-primary mb-1"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                            <div class="mb-5">
                                                <div class="float-end">
                                                    <ul class="pagination ">
                                                        <li class="page-item page-prev disabled">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                                        <li class="page-item page-next">
                                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="shop-description.html" class="btn btn-primary"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="wishlist.html" class="btn btn-danger"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="shop-description.html" class="">
                                                                            <img src="../assets/images/pngs/9.jpg" alt="img" class="cover-image br-7 w-100">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="shop-description.html" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Candy Pure Rose Water</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked>
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$599</div>
                                                                    <a href="cart.html" class="btn btn-primary btn-block"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</a>
                                                                    <a href="wishlist.html" class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="shop-description.html" class="btn btn-primary"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="wishlist.html" class="btn btn-danger"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="shop-description.html" class="">
                                                                            <img src="../assets/images/pngs/10.jpg" alt="img" class="cover-image br-7 w-100">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="shop-description.html" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">White Tshirt for Men</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$1,399</div>
                                                                    <a href="cart.html" class="btn btn-primary btn-block"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</a>
                                                                    <a href="wishlist.html" class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="shop-description.html" class="btn btn-primary"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="wishlist.html" class="btn btn-danger"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="shop-description.html" class="">
                                                                            <img src="../assets/images/pngs/8.jpg" alt="img" class="cover-image br-7 w-100">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="shop-description.html" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Stylish Rockerz 255 Ear Pods</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$16,599</div>
                                                                    <a href="cart.html"><span  class="btn btn-primary btn-block"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</span></a>
                                                                    <a href="wishlist.html"><span  class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="shop-description.html" class="btn btn-primary"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="wishlist.html" class="btn btn-danger"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="shop-description.html" class="">
                                                                            <img src="../assets/images/pngs/4.jpg" alt="img" class="cover-image br-7 w-100">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="shop-description.html" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Flower Pot for Home Decor</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$1,299</div>
                                                                    <a href="cart.html"><span class="btn btn-primary btn-block"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</span></a>
                                                                    <a href="wishlist.html"><span class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="shop-description.html" class="btn btn-primary"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="wishlist.html" class="btn btn-danger"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="shop-description.html" class="">
                                                                            <img src="../assets/images/pngs/3.jpg" alt="img" class="cover-image br-7 w-100">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="shop-description.html" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Running Shoes for men</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$6,599</div>
                                                                    <a href="cart.html"><span class="btn btn-primary btn-block"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</span></a>
                                                                    <a href="wishlist.html"><span class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="float-end">
                                                    <ul class="pagination ">
                                                        <li class="page-item page-prev disabled">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                                        <li class="page-item page-next">
                                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED -->
                        </div>
                        <!-- ROW-1 END -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- Sidebar-right -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i>Feeds</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="p-3 fw-semibold ps-5">Feeds</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New user registered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New order delivered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">You have pending tasks</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New version arrived</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Server #1 overloaded</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New project launched</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 fw-semibold ps-5">Settings</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">General Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Map Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Support Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Payment Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Notification Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="pt-3 fw-semibold ps-5">Today</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Rose Bush</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/10.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Claude Strophobia</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/13.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Eileen Dover</div>
                                            <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/12.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Willie Findit</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/15.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Manny Jah</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/7.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Simon Sais</div>
                                            <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Laura Biding</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Ivan Notheridiya</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/14.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Dulcie Veeta</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                            <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <ul class="task-list timeline-task">
                                <li class="d-sm-flex mt-4">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/us_flag.jpg"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/italy_flag.jpg"
                                        class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/spain_flag.jpg"
                                        class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/india_flag.jpg"
                                        class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/french_flag.jpg"
                                        class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/russia_flag.jpg"
                                        class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/germany_flag.jpg"
                                        class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/argentina.jpg"
                                        class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/malaysia.jpg"
                                        class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/turkey.jpg"
                                        class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- Ion.RangeSlider js-->
    <script src="../assets/plugins/jquery-uislider/jquery-ui.js"></script>
    <script src="../assets/js/slider.js"></script>


    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- CHARTJS JS -->
    <script src="../assets/plugins/chart/Chart.bundle.js"></script>
    <script src="../assets/plugins/chart/utils.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS-->
    <script src="../assets/js/custom.js"></script>

</body>

</html>