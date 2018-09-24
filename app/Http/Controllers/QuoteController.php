<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Events\QuoteCreated;

class QuoteController extends Controller
{
    public function createQuote(){
        $name = "rama";
        Event::fire(new QuoteCreated($name));
    }
}
