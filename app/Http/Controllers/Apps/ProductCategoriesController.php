<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrdersDataTable;
use App\DataTables\ProductCategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    public function index(ProductCategoriesDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.product-categories.list');
    }
}
