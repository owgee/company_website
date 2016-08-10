<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = Portfolio::all();
        return view('sentinel.portfolio.index',['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = Client::all();
        return view('sentinel.portfolio.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio($request->all());
        $portfolio->user()->associate(\Sentry::getUser()->id);
        $portfolio->client()->associate(Client::find(1)->value('client_id'));
        if($portfolio->save())
            return redirect('portfolio')->with('status', 'Portfolio Created!');
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

        $portfolio = Portfolio::find($id);
        return view('sentinel.portfolio.edit',['portfolio'=>$portfolio]);
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
         $portfolio = Portfolio::find($id);
        if($portfolio->update($request->except('_token','_method','action')))
            return response()->redirectTo('portfolio')->with(['status'=>'Fine']);
        return response()->redirectTo('portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p=Portfolio::find($id);
        if($p && $p->delete()){
            return redirect('portfolio')->with('success', 'Successfully deleted');
        }else{
            return redirect('portfolio')->with('error', 'Failed to delete! ');
        }
    }
}
