<?php

namespace App\Http\Controllers\Apps\Blog;

use App\DataTables\Blog\PostsDataTable;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.blog.posts.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/apps.blog.posts.create');
    }
}
