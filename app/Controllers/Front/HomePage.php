<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class HomePage extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'assets']);
        $this->session = session();
    }
     
    public function index()
    {
        //
    }
    
    public function frontPage()
    {
        // CSS assets
        $css = add_assets(['output.css'], 'css', 'front');
        // JS assets
        $js = add_assets(['global.js', 'test.js', 'getPost.js'], 'js', 'front');
        // Get the assets output
        $assets = get_assets_output([$js, $css]);


        $data = [
            // Add assets to the data array
            // This will be used in the global header and footer
            'scripts' => $assets['js'],
            'styles' => $assets['css'],

            'title' => 'Front Page',
            'tab_title' => 'Signup / Twitter Clone'
        ];
        echo view('templates/global_header', $data);
        echo view('front/home/frontpage', $data);
        echo view('templates/global_footer', $data);
    }

    public function view(){
        // CSS assets
        $css = add_assets(['output.css'], 'css', 'front');
        // JS assets
        $js = add_assets(['global.js', 'test.js', 'ajax/getPost.js'], 'js', 'front');
        // Get the assets output
        $assets = get_assets_output([$js, $css]);


        $data = [
            // Add assets to the data array
            // This will be used in the global header and footer
            'scripts' => $assets['js'],
            'styles' => $assets['css'],

            'title' => 'Front Page',
            'tab_title' => 'Home / Twitter Clone'
        ];
        echo view('templates/global_header', $data);
        echo view('front/home/homepage', $data);
        echo view('templates/global_footer', $data);
    }
}