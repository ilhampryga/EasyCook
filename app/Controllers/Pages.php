<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Easy Cook'
        ];
        helper('url');
        return view('pages/home', $data);
    }

    public function resep()
    {
        $data = [
            'title' => 'Unggah Resep | Easy Cook'
        ];
        echo view('pages/upload_resep', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Easy Cook'
        ];
        echo view('pages/login', $data);
    }

    public function view_resep()
    {
        $data = [
            'title' => 'Resep | Easy Cook'
        ];
        return view('pages/view_resep', $data);
    }

    public function ulasan()
    {
        $data = [
            'title' => 'Ulasan | Easy Cook'
        ];
        return view('pages/ulasan', $data);
    }
}
