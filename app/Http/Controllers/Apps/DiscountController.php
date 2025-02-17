<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\DiscountDataTable;
use App\Http\Controllers\Controller;


class DiscountController extends Controller
{
    public function index(DiscountDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.discount.list');
    }
}
