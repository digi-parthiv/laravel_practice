<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrdersDataTable;
use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.products.list');
    }
}
