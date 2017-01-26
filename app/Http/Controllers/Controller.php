<?php

namespace App\Http\Controllers;

 use Illuminate\Foundation\Bus\DispatchesJobs;
 use Illuminate\Foundation\Validation\ValidatesRequests;
 use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 use Illuminate\Foundation\Auth\Access\AuthorizesResources;
 use Illuminate\Routing\Controller as BaseController;

 //use App\Http\Requests;

 //use App\User;

class Controller extends BaseController
{
    //
    use AuthorizesRequests,AuthorizesResources,DispatchesJobs,ValidatesRequests;
}
