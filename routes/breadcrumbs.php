<?php

use App\Entities\User;
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

Breadcrumbs::register('admin.home', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('home');
    $crumb->push('Admin', route('admin.home'));
});

Breadcrumbs::register('admin.users.index', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('admin.home');
    $crumb->push('Users', route('admin.users.index'));
});

Breadcrumbs::register('admin.users.create', function (BreadcrumbsGenerator $crumb) {
    $crumb->parent('admin.users.index');
    $crumb->push('Create', route('admin.users.create'));
});

Breadcrumbs::register('admin.users.show', function (BreadcrumbsGenerator $crumb, User $user) {
    $crumb->parent('admin.users.index');
    $crumb->push($user->name, route('admin.users.show'));
});

Breadcrumbs::register('admin.users.edit', function (BreadcrumbsGenerator $crumb, User $user) {
    $crumb->parent('admin.users.show', $user);
    $crumb->push('Edit', route('admin.users.edit'));
});
