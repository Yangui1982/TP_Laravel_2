<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  public function accueil() {
    return view('portfolio.accueil');
  }

  public function apropos() {
    return view('portfolio.apropos');
  }
}
