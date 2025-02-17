<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\CustomersDataTable;
use App\DataTables\OrdersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(CustomersDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.customers.list');
    }
}
