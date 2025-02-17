<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrdersDataTable;
use App\DataTables\ShipmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(ShipmentDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.shipment.list');
    }
}
