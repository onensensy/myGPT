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
        $option = $request->option;
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

        switch ($option) {
            case 0:
                $result = OpenAI::completions()->create([
                    "model" => "text-davinci-003",
                    "temperature" => 0.7,
                    "top_p" => 1,
                    "frequency_penalty" => 0,
                    "presence_penalty" => 0,
                    'max_tokens' => 600,
                    'prompt' => sprintf($prompt),
                ]);
                $content = trim($result['choices'][0]['text']);
                return view('chat', compact('prompt', 'content'));


                break;
            case 1:
                $result = OpenAI::completions()->create([
                    "model" => "text-davinci-003",
                    "temperature" => 0.7,
                    "top_p" => 1,
                    "frequency_penalty" => 0,
                    "presence_penalty" => 0,
                    'max_tokens' => 600,
                    'prompt' => 'Laravel is a powerful PHP web application framework that provides a simple, elegant syntax for creating robust web applications. As a Laravel-focused AI model, my responses will be tailored to Laravel-specific topics, such as working with controllers, models, views, routes, middleware, and more. Let\'s dive into the world of Laravel programming!
                ' . sprintf($prompt),
                ]);
                $content = trim($result['choices'][0]['text']);
                return view('chat', compact('prompt', 'content'));


                break;

            default:
                $content = "Help Module for " . $option . " has not yet been implemented. You can contribute to the code via

https://github.com/onensensy/myGPT";
                return view('chat', compact('prompt', 'content'));
                break;
        }
    }
}
