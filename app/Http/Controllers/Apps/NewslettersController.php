<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\NewslettersDataTable;
use App\DataTables\OrdersDataTable;
use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function index(NewslettersDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.newsletters.list');
    }
}
