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
                        <h2>Dashboard</h2>
                        <div class="bread-come">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb purple lighten-4">
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Dashboard</a></li>
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
                                    <!-- <img src="<?= $assets ?>/img/about/profile.png" alt=""> -->
                                    <div class="profile-content">
                                        <span class="pro-name"><?= $User->name ?></span>
                                        <span class="pro-number"><?= $User->email ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-menu">
                                <ul>
                                    <li class="active"><a href="./user-panel"><i class="ti-dashboard"></i>Dashboard</a></li>
                                    <li><a href="./form-deposit"><i class="ti-wallet"></i>Deposit Money</a></li>
                                    <li><a href="./user-withdraw"><i class="ti-import"></i>Withdraw Money</a></li>
                                    <li><a href="./user-invest"><i class="ti-new-window"></i>Total Investment</a></li>
                                    <li><a href="./user-management.php"> <i class="ti-user"></i>Add Users</a></li>
                                    <li><a href="view_users.php"> <i class="ti-user"></i>View Users</a></li>


                                    <!-- <div class="dropdown">
                                        <button class="dropbtn">Actions</button>
                                        <ul class="dropdown-content">
                                            <li><a href="add_user.php">Add Users</a></li>
                                           
                                        </ul>
                                    </div> -->
                                    <!-- <li><a href="./user-transaction"><i class="ti-layout-list-thumb"></i>Users</a></li> -->
                                    <li><a href="./user-notifications"><i class="ti-bell"></i>Notifecations</a></li>
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
                  
                       
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add admin
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="send-money-form transection-log">
                                <div class="form-text">
                                    <h4 class="form-top">Transection Log</h4>
                                    <div class="form-inner table-inner">
                                        <table>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>username</th>
                                                <th>email</th>
                                                <th>password</th>
                                            </tr>

                                           
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
        
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
</main>
<!-- Start Footer Area -->