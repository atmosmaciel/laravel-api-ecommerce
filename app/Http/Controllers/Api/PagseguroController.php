<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PagseguroController extends Controller
{
    public function getSessionId()
    {
        try {
            $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );

        } catch (\Exception $e) {
            die($e->getMessage());
        }

        return response()->json(['session'=>$sessionCode->getResult()]);
    }
}
