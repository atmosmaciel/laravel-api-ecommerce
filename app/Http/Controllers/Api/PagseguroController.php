<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagseguroController extends Controller
{
    public function getSessionId()
    {
        \PagSeguro\Configuration\Configure::setEnvironment('sandbox');
        $credentials = \PagSeguro\Configuration\Configure::setAccountCredentials(
            'atmos.mps@gmail.com',
            '19717EBDD4D54B8A80969F35FDD7C9B6'
        );

        \PagSeguro\Configuration\Configure::setCharset('UTF-8');
        \PagSeguro\Configuration\Configure::setLog(true, __DIR__.'/logFilename.log');

        try {
            $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );
        } catch (\Exception $e) {
            die($e->getMessage());
        }

        //return response()->json(['session'=>$sessionCode->getResult()]);
        return $sessionCode->getResult();
    }
}
