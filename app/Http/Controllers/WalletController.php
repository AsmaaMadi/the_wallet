<?php

namespace App\Http\Controllers;

use App\Wallet;
//use Illuminate\Http\Request;
use App\Http\Requests\WalletStoreRequest;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets=Wallet::all();
        return view('wallet.index',compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WalletStoreRequest $request)
    {
        $request->validated();
        Wallet::create($request->all());
        return redirect()->route('wallet.index')->with('success','the wallet is created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wallet = Wallet::find($id);
        return view('wallet.show', compact('wallet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wallet = Wallet::find($id);
        return view('wallet.edit', compact('wallet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(WalletStoreRequest $request, $id)
    {
        $request->validated();
        Wallet::find($id)->update($request->all());
        return redirect()->route('wallet.index')->with('success','the wallet is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wallet::find($id)->delete();
        return redirect()->route('wallet.index')->with('success','the wallet is deleted successfully');

    }
}
