<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * This  Returns the chat page
     * @return void
     */
    public function index()
    {
        return view('chat');
    }
}
