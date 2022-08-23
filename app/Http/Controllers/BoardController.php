<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function show(BoardController $boardInfo) {
      $view = [
        'view' => $boardInfo,
      ];

      return view('board', $view);
    }
}
