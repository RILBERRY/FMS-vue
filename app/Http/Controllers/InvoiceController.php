<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\Sales;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = invoice::with('customerInfo', 'sales')->orderBy('id','DESC')->paginate(10);
        $salesByInvoice = $invoices->flatMap(function ($invoice) {
            return $invoice->sales->map(function ($sale) use ($invoice) {
                return [
                    'invoice_id' => $invoice->id,
                    'product' => $sale->product,
                    'qty' => $sale->qty,
                    'rate' => $sale->rate,
                ];
            });
        })->groupBy(['invoice_id', 'product']);
        
        
        foreach ($invoices as $invoice) {
            $sales = $salesByInvoice->get($invoice->id);
            
            $InvSales = [
                'd_qty' =>  0.00,
                'd_rate' =>  0.00,
                'p_qty' =>  0.00,
                'p_rate' => 0.00,
                'r_qty' => 0.00,
                'r_rate' => 0.00,
            ];
            $InvTotal = 0;
    
            if($sales){
                $dieselSales = $sales->has('DIESEL')?$sales['DIESEL'][0] : false ;
                $petrolSales = $sales->has('PETROL')?$sales['PETROL'][0] : false ;
                $remulaSales = $sales->has('REMULA')?$sales['REMULA'][0] : false ;
                
                $InvSales = [
                    'd_qty' => $dieselSales ? $dieselSales['qty'] : 0,
                    'd_rate' => $dieselSales ? $dieselSales['rate'] : 0.00,
                    'p_qty' => $petrolSales ? $petrolSales['qty'] : 0,
                    'p_rate' => $petrolSales ? $petrolSales['rate'] : 0.00,
                    'r_qty' => $remulaSales ? $remulaSales['qty'] : 0,
                    'r_rate' => $remulaSales ? $remulaSales['rate'] : 0.00,
                ];
                
                $InvTotal =  $InvSales['d_qty'] * $InvSales['d_rate'] + $InvSales['p_qty'] * $InvSales['p_rate'] + $InvSales['r_qty'] * $InvSales['r_rate'];
            }
        
            $invoice->transactions = $InvSales;
            $invoice->inv_total = $InvTotal;
        }
        // dd($invoices[0]);
        return Inertia::render('Invoice/Index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Invoice/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
