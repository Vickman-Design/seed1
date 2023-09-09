<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/seed/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

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
//Home page//





//Logout Sessions//
$Route->add(
    '/auth/logout',
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
