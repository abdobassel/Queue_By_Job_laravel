<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Jobs\ActivUsersJob;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        ActivUsersJob::dispatch();
        return 'Updating now';



    }
}
