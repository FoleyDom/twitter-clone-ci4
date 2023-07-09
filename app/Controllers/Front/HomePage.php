<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomePage extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'assets']);
        $this->session = session();
    }
    //! examples 
    public function index()
    {
        //     $model = new MoodsModel();

        //     // Add assets using the assets helper

        //     // TODO: Add support for loading assets from a CDN
        //     // CSS assets
        //     $css = add_assets(['output.css', 'test.css'], 'css');
        //     // JS assets
        //     $js = add_assets(['global.js', 'Front/test.js'], 'js');
        //     // Get the assets output
        //     $assets = get_assets_output([$js, $css]);


        //     $data = [
        //         // Add assets to the data array
        //         // This will be used in the global header and footer
        //         'scripts' => $assets['js'],
        //         'styles' => $assets['css'],

        //         // title and tab_title are used in the global header
        //         'title' => 'Calendar Page',
        //         'tab_title' => 'Home Page'
        //     ];

        //     // ?: Figure out how to more efficiently display global header and footer.
        //     echo view('templates/global_header', $data);
        //     echo view('front/calendarpage/testcomponent', $data);
        //     echo view('templates/global_footer', $data);
        // }
        // public function calendarAjax()
        // {
        //     if ($this->request->isAJAX()) {
        //         $eventTitle = $this->request->getPost('event_title');
        //         $eventTheme = $this->request->getPost('event_theme');
        //         $eventDate = $this->request->getPost('event_date');

        //         // Validate the data if needed
        //         // if (!$this->validate([
        //         //     'event_title' => 'required|max_length[255]|min_length[3]',
        //         // ])) {
        //         //     return json_encode(['error' => 'Validation failed']);
        //         // }

        //         $model = new MoodsModel();

        //         // Return a success response
        //         return json_encode(['success' => 'Event saved successfully', 'data' => ['event_title' => $eventTitle, 'event_theme' => $eventTheme, 'event_date' => $eventDate]]);
        //     } else {
        //         // Return an error response if the request is not AJAX
        //         return json_encode(['error' => 'Invalid request']);
        //     }

        //! more examples
        $data = [
            'title' => 'Front Page',
            'tab_title' => 'Front Page'
        ];
        echo view('templates/global_header', $data);
        echo view('front/frontpage', $data);
        echo view('templates/global_footer', $data);
    }
    
    public function frontPage()
    {
        $data = [
            'title' => 'Front Page',
            'tab_title' => 'Front Page'
        ];
        echo view('templates/global_header', $data);
        echo view('front/frontpage', $data);
        echo view('templates/global_footer', $data);
    }
}