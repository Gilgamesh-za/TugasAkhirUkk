<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $BlogModel;
    public function __construct()
    {
        //aktifkan url helper
        helper('url');
        //load model User
        $this->BlogModel = new \App\Models\BlogModel();
    }

    public function index()
    {
        return view('home');
    }

    public function news()
    {
        $data['judul'] = 'catatan';

        return view('news');
    }

    public function blog()
    {
        $data['judul'] = 'catatan';

        return view('blog',$data);
    }

    public function blog2()
    {
        $data['judul'] = 'catatan';

        return view('blog2',$data);
    }

    public function about()
    {
        $data['judul'] = 'about';
        
        return view('about');
    }
   
}
