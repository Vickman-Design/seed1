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
                        <h2>User Investment </h2>
                        <div class="bread-come">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb purple lighten-4">
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-items"><a class="black-text" href="#">User Investment </a></li>
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
                                    <div class="profile-content">
                                        <span class="pro-name"><?= $User->name ?></span>
                                        <span class="pro-number"><?= $User->email ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-menu">
                                <ul>
                                    <li><a href="./user-panel"><i class="ti-dashboard"></i>Dashboard</a></li>
                                    <li><a href="./form-deposit"><i class="ti-wallet"></i>Deposit Money</a></li>
                                    <li><a href="./transfer"><i class="ti-import"></i>Withdraw Money</a></li>
                                    <li class="active"><a href="./user-invest"><i class="ti-new-window"></i>Total Investment</a></li>
                                    <li><a href="./user-transaction"><i class="ti-layout-list-thumb"></i>Transaction</a></li>
                                    <li><a href="./user-notifications"><i class="ti-bell"></i>Users</a></li>
                                    <li><a href="./user-info"><i class="ti-settings"></i>Settings</a></li>
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






                    <!-- form for deposit -->


                    <div class="card card-secondary" style="background-color:#020134 ;">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Deposit fund</h3> -->

                            <h3 class="card-title">Deposit funds</h3>

                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="./user/deposit" method="post">



                            <div class="container">
                                <h4 class="mt-2 mb-3 text-center text-primary">Enter user Details</h4>
                                <div class="row">

                                    <div class="col-md-6">
                                        <select name="select_box" class="form-select selectpicker">
                                            <option value="">Select Country</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                            <option value="033">First Bank</option>
                                        </select>
                                        <div class="col-md-3">&nbsp;</div>
                                        <label for="" class="col-md-12">Account Number</label>
                                        <input type="text" placeholder="enter your account number">
                                        <div class="col-md-3">&nbsp;</div>
                                        <label for="" class="col-md-12">Account Number</label>
                                        <input type="text" placeholder="enter your account number">
                                        <div class="col-md-3">&nbsp;</div>
                                        <label for="" class="col-md-12">Bank</label>
                                        <input type="text" placeholder="enter your account number">
                                    </div>
                                    <div class="col-md-3">&nbsp;</div>
                                </div>
                                <br />
                                <br />
                            </div>

                            
                    </div>
                   
                    <div class="card-footer">
                        <button type="submit" name="" class="btn btn-secondary">Submit</button>
                    </div>
                    </form>
                </div>
            </div><!-- Main Footer -->


        </div>
    </div>
    </div>
    </div>

</main>
