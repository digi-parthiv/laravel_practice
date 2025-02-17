<?php

namespace App\Http\Controllers\Apps\Payments;

use App\DataTables\Blog\PostsDataTable;
use App\DataTables\Payments\TransactionsDataTable;
use App\Http\Controllers\Controller;

class TransactionsController extends Controller
{
    public function index(TransactionsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.payments.transactions.list');
    }


    public function show()
    {
       return view('pages/apps.payments.transactions.details');
    }
}
