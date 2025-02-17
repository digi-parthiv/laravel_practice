<?php

namespace App\Http\Controllers\Apps\Appearance;

use App\DataTables\OrdersDataTable;
use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ThemeOptionsController extends Controller
{
    public function index()
    {
        return view('pages/apps.appearance.theme-options.list');
    }
}
