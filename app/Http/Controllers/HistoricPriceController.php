<?php

namespace App\Http\Controllers;

use App\Models\HistoricPrice;
use App\Http\Requests\StoreHistoricPriceRequest;
use App\Http\Requests\UpdateHistoricPriceRequest;

class HistoricPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($ticker)
    {
        return \App\Models\HistoricPrice::where('ticker', $ticker)->orderBy('date')->get();
    }


}
