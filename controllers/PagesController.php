<?php
namespace controllers;
use core\App;

class PagesController {

    public function home () {
        $users = App::get('database')->getAllData('users');

        view('index', [
            'users' => $users
        ]);
    }

    public function about () {
        view('about');
    }

    public function contact () {
        view('contact');
    }

    public function product () {
        view('product');
    }

    public function userCreate () {
        checkCount(request('name'), 3, '/');
        App::get('database')->insert('users',[
            'name' => request('name'),
        ]);
        redirect('/');
    }

}