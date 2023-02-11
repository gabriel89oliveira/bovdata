<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Statement;
use App\Models\Company;
use App\Services\StatementService;

class StatementController extends Controller
{

    protected $statementService;

    public function __construct(StatementService $statementService)
    {
        $this->statementService = $statementService;
    }


    /**
     * Get all values for a given
     * Statement account
     * 
     */
    public function show($ticker, $cd_conta)
    {
        $company = Company::where('ticker', $ticker)->first();
        return Statement::where('cd_cvm', $company->cd_cvm)->where('cd_conta', $cd_conta)->orderBy('dt_refer')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companies()
    {

        $empresas = Statement::select('cd_cvm', 'denom_cia')->distinct()->get();
        
    }



    

}
