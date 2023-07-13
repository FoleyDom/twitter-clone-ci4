<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TwitterCloneModel;

class HomePageAjax extends BaseController
{
    public function index()
    {
        //
    }

    public function fetchData()
    {
        // Fetch data from the database (you need to customize this part based on your database structure)
        $data = $this->db->table('posttable')->get()->getResultArray();

        return $this->response->setJSON($data);
    }

    public function getPost()
    {
        $model = new TwitterCloneModel();
        
        $limit = $_POST['limit']; // Number of posts to fetch per request
        $offset = $_POST['offset']; // Offset for pagination

        // Retrieve the post data from the database based on the limit and offset
        $postData = [];
        // Adjust this code based on your database setup and retrieval method


        $posts = [
            'posts' => $model->getPost($id),
        ]; // Replace this with your database retrieval code using LIMIT and OFFSET

        foreach ($posts as $post) {
            // Extract relevant data from each post
            $username = $post['username'];
            $content = $post['content'];
            $date = $post['date'];

            // Add post data to the array
            $postData[] = [
                'username' => $username,
                'content' => $content,
                'date' => $date
            ];
        }

        // Return the post data as JSON response
        echo json_encode($posts);
    }
}
