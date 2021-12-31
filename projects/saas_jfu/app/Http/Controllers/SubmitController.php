<?php


namespace App\Http\Controllers;


use Encore\Admin\Facades\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class SubmitController extends Controller
{
    public function index()
    {
        return view('submit');
    }
}
