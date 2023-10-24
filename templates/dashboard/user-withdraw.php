<!-- End header area -->
<main>
    <!-- Start Breadcrumb Area -->

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
                                    <img src="img/about/profile.png" alt="">
                                    <div class="profile-content">
                                        <span class="pro-name"><?= $User->name ?></span>
                                        <span class="pro-number"><?= $User->email ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-menu">
                                <ul>
                                    <li><a href="./user-panel"><i class="ti-dashboard"></i>Dashboard</a></li>
                                    <li><a href="./user-deposit"><i class="ti-wallet"></i>Deposit Money</a></li>
                                    <li class="active"><a href="./user-withdraw."><i class="ti-import"></i>Withdraw Money</a></li>
                                    <li><a href="./user-invest"><i class="ti-new-window"></i>Total Investment</a></li>
                                    <li><a href="./user-transaction"><i class="ti-layout-list-thumb"></i>Transaction</a></li>

                                    <?php if ($User->role == "admin") : ?>
                                        <ul class="dropdown-content">
                                            <li><a href="add_user.php">Add Users</a></li>
                                            <li><a href="view_users.php">View Users</a></li>
                                        </ul>

                                    <?php endif; ?>

                                    <h1><?= $Self->Toast() ?></h1>

                                    <!-- <li><a href="user-notifecations.html"><i class="ti-bell"></i>Users</a></li> -->
                                    <!-- <li><a href="user-info.html"><i class="ti-settings"></i>Settings</a></li> -->
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
                    <div class="row dashboard-content">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                <a href="./form-deposit" style="color: #fff;">
                                        <div class="amount-content">
                                            <span class="pro-name">Deposite</span>
                                            <span class="pro-money">N <?= $User->balance ?> </span>
                                        </div>
                                    </a>

                                    <div class="invest-tumb">
                                        <i class="flaticon-035-savings"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Invest</span>
                                        <span class="pro-money">N <?= $User->invest ?></span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-004-bar-chart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Withdraw</span>
                                        <!-- <span class="pro-money">$500</span> -->
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-010-cloud"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="send-money-form transection-log">
                                <div class="form-text">
                                    <h4 class="form-top">Last Withdraw</h4>
                                    <div class="form-inner table-inner">
                                        <table>
                                            <tr>
                                                <th>Date</th>
                                                <th>Transaction ID</th>
                                                <th>Amount</th>
                                                <th>Details</th>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
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