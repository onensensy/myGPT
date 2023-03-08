<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;

use Illuminate\Http\Request;

class ArticleGeneratorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->title == null) {
            return;
        }

        $title = $request->title;

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'PHP is',
        ]);

        echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.

        dd($content = trim($result['choices'][0]['text']));


        return view('write', compact('title', 'content'));
    }
}
