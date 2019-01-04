<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $crumb) {
    $crumb->push('Home', route('home'));
});

Breadcrumbs::register('login', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('home');
    $crumb->push('Login', route('login'));
});

Breadcrumbs::register('register', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('home');
    $crumb->push('Register', route('register'));
});

Breadcrumbs::register('password.request', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('login');
    $crumb->push('Reset Password', route('password.request'));
});

Breadcrumbs::register('password.reset', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('password.request');
    $crumb->push('Change', route('password.reset'));
});

Breadcrumbs::register('cabinet', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('home');
    $crumb->push('Cabinet', route('cabinet'));
});
