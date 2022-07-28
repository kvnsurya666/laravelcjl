<?php

namespace App\Http\Controllers;

use App\Models\ModelSales;
use App\Http\Requests\StoreModelSalesRequest;
use App\Http\Requests\UpdateModelSalesRequest;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModelSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelSalesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelSales  $modelSales
     * @return \Illuminate\Http\Response
     */
    public function show(ModelSales $modelSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelSales  $modelSales
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelSales $modelSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelSalesRequest  $request
     * @param  \App\Models\ModelSales  $modelSales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModelSalesRequest $request, ModelSales $modelSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelSales  $modelSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelSales $modelSales)
    {
        //
    }
}
