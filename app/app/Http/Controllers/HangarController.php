<?php

namespace App\Http\Controllers;

use App\Planet;
use App\Travel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HangarController extends Controller
{

  public function __construct()
  {

  }

  public function index()
  {
      return view('hangar.hangar');
  }
}
