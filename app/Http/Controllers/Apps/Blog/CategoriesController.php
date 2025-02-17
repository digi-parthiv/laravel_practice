<?php

namespace App\Http\Controllers\Apps\Blog;

use App\DataTables\Blog\PostsDataTable;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.blog.blog-categories.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $this->view
        return view('pages/apps.blog.posts.create');
    }
}
