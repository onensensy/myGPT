<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendPrompt(Request $request)
    {

        if ($request->prompt == null) {
            return;
        }

        $prompt = $request->prompt;

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
            'prompt' => sprintf($prompt),
        ]);

        // echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.

        $content = trim($result['choices'][0]['text']);
        // dd($content);
        return view('chat', compact('prompt', 'content'));
    }
}
