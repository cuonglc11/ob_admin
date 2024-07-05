<?php
namespace App\Services;

use App\Models\Wallets;
use Illuminate\Support\Facades\Auth;
use Web3\Wallet;
use Web3\Web3;

class WalletService {
    protected $web3  ;
    public function __construct()
    {
        $this->web3 = new Web3(env('WEB3_PROVIDER'));
    }
    public function createWallet()
    {
        try {
             $wallet = Wallet::create($this->web3);
             $createWallet = new Wallets();
             $createWallet->customer_id = Auth::id();
             $createWallet->address_wallet = $wallet->getAddress();
             $createWallet->private_key = $wallet->getPrivateKey();
             $createWallet->blance  = 0;
            return  $createWallet->save();



        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
?>
