<?php

namespace App\Http\Controllers\ExecutionController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ExecutionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
