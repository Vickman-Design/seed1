<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";
require_once DOT . "/_public/user.php";
require_once DOT . "/_public/deposit.php";

//Home page//
$Route->add('/seed/home', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","Home");

    $Template->render("home");

}, 'GET');
$Route->add('/seed/about', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.about");

}, 'GET');
$Route->add('/seed/plan', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Investment Plan");

    $Template->render("pages.plan");

}, 'GET');
$Route->add('/seed/contact', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.contact");

}, 'GET');
$Route->add('/seed/login', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Login");

    $Template->render("pages.login");

}, 'GET');
$Route->add('/seed/registration', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");
    
    $Template->render("pages.registration");

}, 'GET');
$Route->add('/seed/registration/seed/{user}', function ($user) {
    
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");
if($Core->GetUserInfoUserName($user)){
    $Template->assign("referer",$user);
}else{

    $Template->assign("referer",null);
}
    $Template->render("pages.registration");

}, 'GET');
// $Route->add('/seed/user-deposit', function () {
    
//     $Template = new Apps\Template;
//     $Template->addheader("layouts.header");
//     $Template->addfooter("layouts.footer");
//     $Template->assign("title"," SignUp");

//     $Template->render("dashboard.user-deposit");

// }, 'GET');

$Route->add('/seed/user-info', function () {
    
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-info");

}, 'GET');
$Route->add('/seed/user-invest', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-invest");

}, 'GET');
$Route->add('/dashboard/form-deposit', function () {
    
    $Template = new Apps\Template(auth_url);
    
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.form-deposit");

}, 'GET');
$Route->add('/seed/transfer', function () {
    
    $Template = new Apps\Template(auth_url);
    
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," transfer");

    $Template->render("dashboard.transfer");

}, 'GET');
$Route->add('/seed/user-panel', function () {
    
    $Template = new Apps\Template(auth_url);
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Dashboard");

    $Template->render("dashboard.user-panel");

}, 'GET');
$Route->add('/seed/user-transaction', function () {
    
    $Template = new Apps\Template(auth_url);
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," user-transaction");

    $Template->render("dashboard.user-transaction");

}, 'GET');
$Route->add('/seed/user-withdraw', function () {
    
    $Template = new Apps\Template(auth_url);
    $Template->addheader("dashboard/layout.header");
    $Template->addfooter("dashboard/layout.footer");
    $Template->assign("title"," user-withdraw");

    $Template->render("dashboard.user-withdraw");

}, 'GET');
$Route->add('/seed/form-deposit', function () {
    
    $Template = new Apps\Template(auth_url);
    $Template->addheader("dashboard/layout.header");
    $Template->addfooter("dashboard/layout.footer");
    $Template->assign("title"," form-deposit");

    $Template->render("dashboard.form-deposit");

}, 'GET');
//Home page//





//Logout Sessions//
$Route->add(
    '/seed/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
