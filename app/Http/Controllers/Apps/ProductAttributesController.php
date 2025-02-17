<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrdersDataTable;
use App\DataTables\ProductAttributesDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProductAttributesController extends Controller
{
    public function index(ProductAttributesDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.product-attributes.list');
    }
}
