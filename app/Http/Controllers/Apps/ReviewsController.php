<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrdersDataTable;
use App\DataTables\ReviewsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(ReviewsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.reviews.list');
    }
}
