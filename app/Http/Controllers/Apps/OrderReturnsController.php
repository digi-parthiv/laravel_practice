<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\OrderReturnsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OrderReturnsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderReturnsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.e-commerce.order-returns.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages/apps.user-management.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
