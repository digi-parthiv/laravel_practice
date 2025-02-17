<?php

namespace App\Http\Controllers\Apps\Payments;

use App\DataTables\Blog\PostsDataTable;
use App\DataTables\Payments\TransactionsDataTable;
use App\Http\Controllers\Controller;

class PaymentMethodsController extends Controller
{
    public function index( )
    {
        return view('pages/apps.payments.payments-methods.list');
    }


    public function show()
    {
//        return view('pages/apps.payments.payments.details');
    }
}
