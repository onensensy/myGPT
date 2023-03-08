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

        // $client = OpenAI::client(env('OPENAI_API_KEY'));
        // /**
        //  * Optionally use
        //  *
        //  * $client = OpenAI::client(config('app.openai_api_key'));
        //  *
        //  * if you have done php artisan config:cache
        //  */
        // $result = $client->completions()->create([
        //     "model" => "text-davinci-003",
        //     "temperature" => 0.7,
        //     "top_p" => 1,
        //     "frequency_penalty" => 0,
        //     "presence_penalty" => 0,
        //     'max_tokens' => 600,
        //     'prompt' => sprintf('Write article about: %s', $title),
        // ]);

        // $result = OpenAI::completions()->create([
        //     'model' => 'text-davinci-003',
        //     'prompt' => 'PHP is',
        // ]);
        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'prompt' => sprintf($title),
        ]);

        // echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.

        $content = trim($result['choices'][0]['text']);


        return view('write', compact('title', 'content'));
    }
}
