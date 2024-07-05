<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallets;
use App\Services\WalletService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function getWallet()
    {
        $data = Wallets::where('customer_id'  , Auth::id())->get();
        // var_dump($data);
        return view('admin.wallet' ,['data' => $data]);
    }
    public function createWallet()
    {
        $walletService = new WalletService();
        return $walletService->createWallet() ? Redirect::to('/wallet')  : Redirect::back() ;
    }
    public function detallWallet(Request $request)
    {
        $data = Wallets::find($request->input('id'));
       return view('admin.detalWallet' , ['data' => $data]);
    }
}
