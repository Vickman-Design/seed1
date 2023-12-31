<?php
$User = $Core->GetUserInfo($this->storage('accid'));
?>
    <main>
    <!-- Start Breadcrumb Area -->
        <div class="page-area bread-pd">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>User Information </h2>
                            <h3><?= $Self->Toast()?></h3>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4">
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="#">User Information </a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
         <div class="notify-overlay"></div>
         <div class="dsahboard-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <aside class="sidebar">
                            <div class="dashboard-side">
                                <div class="dashboard-head">
                                    <div class="dashboard-profile">
                                        <img src="<?= $assets ?>img/about/profile.png" alt="">
                                        <div class="profile-content">
                                            <span class="pro-name"><?= $User->name?></span>
                                            <span class="pro-number"><?= $User->email?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-menu">
                                    <ul>
                                        <li><a href="./user-pane"><i class="ti-dashboard"></i>Dashboard</a></li>
                                        <li><a href="../form-deposit"><i class="ti-wallet"></i>Deposit Money</a></li>
                                        <li><a href="./user-withdraw"><i class="ti-import"></i>Withdraw Money</a></li>
                                        <li><a href="./user-invest"><i class="ti-new-window"></i>Total Investment</a></li>
                                        <li><a href="./user-transaction"><i class="ti-layout-list-thumb"></i>Transection</a></li>
                                        <li><a href="./user-notifications"><i class="ti-bell"></i>Users</a></li>
                                        <li class="active"><a href="./user-info."><i class="ti-settings"></i>Settings</a></li>
                                        <li><a href="#"><i class="ti-shift-right"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="dashboard-top">
                            <div class="userboard">
                                <div class="dashboard-header-right d-flex flex-wrap align-items-center">
                                    <div class="single-left-icon">
                                         <div class="search-inner">
                                            <form action="#">
                                                <div class="search-option">
                                                    <input type="text" placeholder="Search...">
                                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-right-icon">
                                         <ul class="dashboard-right-menus">
                                            <li>
                                                <a href="#0">
                                                    <i class="ti-bell"></i>
                                                    <span class="number-1">4</span>
                                                </a>
                                                <div class="notification-area">
                                                    <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                        <span>4 New Notifications</span>
                                                        <a href="#0">Clear</a>
                                                    </div>
                                                    <ul class="notification-body">
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notifacation-footer text-center">
                                                        <a href="#0" class="view-all">View All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#0" class="author">
                                                    <i class="ti-user"></i>
                                                </a>
                                                <div class="notification-area">
                                                    <div class="author-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#0"><i class="ti-user"></i>Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="#0"><i class="ti-settings"></i>Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href="#0"><i class="ti-shift-right"></i>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-card__title">Personal Details</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Name</span>
                                    <span class="value"><?= $User->name ?></span>
                                </li>
                                <li>
                                    <span class="caption">Date of Birth</span>
                                    <span class="value">20-05-1980</span>
                                </li>
                                <li>
                                    <span class="caption">Address</span>
                                    <span class="value">House-20, street no-10 Newyork</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Account Settings</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Language</span>
                                    <span class="value">English (United States)</span>
                                </li>
                                <li>
                                    <span class="caption">Time Zone</span>
                                    <span class="value">(GMT-06:00) Central Newyork</span>
                                </li>
                                <li>
                                    <span class="caption">Status</span>
                                    <span class="value status-active">Active</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Email Addresses</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                   <span class="caption">Email</span>
                                   <span class="value"><?= $User->email ?></span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Phone</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Mobile</span>
                                    <span class="value"><?= $User->phone ?></span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Security</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Password</span>
                                    <span class="value user-password">***************</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                    </div>
                </div>
            </div>
        </div>
    </main>
