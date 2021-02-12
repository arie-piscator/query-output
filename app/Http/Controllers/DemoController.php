<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function __invoke(Request $request)
    {
        return (string) User::whereHas(
            'orders.payments',fn ($q) => $q->where('amount', '>', 400)
        )->get();
    }
}
