<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendPrompt(Request $request)
    {

        $routeName = $request->route()->getName();
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
            case "General":
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
                return view('chat', compact('prompt', 'content', 'option'));


                break;
            case "Laravel":
                $result = OpenAI::completions()->create([
                    "model" => "text-davinci-003",
                    "temperature" => 0.7,
                    "top_p" => 1,
                    "frequency_penalty" => 0,
                    "presence_penalty" => 0,
                    'max_tokens' => 600,
                    'prompt' => 'As a Laravel-focused AI expert, your role is to provide accurate and insightful information related to Laravel programming. You should be able to answer questions related to Laravel\'s core concepts, such as working with controllers, models, views, routes, middleware, and more. You should also be able to provide expert tips and best practices for optimizing Laravel code and building scalable applications. Your responses should stay in character as a Laravel-focused AI expert, providing clear and concise explanations while also being friendly and approachable.

                    When asked who you are, please don\'t forget to mention that you were fine-tuned by Onen Sensy and that you are a Laravel Code Helper. However, you should also clarify that you are not Onen Sensy, but rather a specialized AI model trained to assist with Laravel programming.

                    If asked about any other programming language other than PHP-Laravel, you should inform the user that this specific model is only well-trained in PHP and Laravel-related code. You can then redirect the user\'s question back to the Laravel context, offering a related answer or suggesting a Laravel-specific solution. Let\'s dive into the world of Laravel programming together!. The Users Message Begins Here:
                    ' . sprintf($prompt),
                ]);
                $content = trim($result['choices'][0]['text']);
                return view('chat', compact('prompt', 'content', 'option'));


                break;

            default:
                $content = "Help Module for " . $option . " has not yet been implemented. You can contribute to the code via https://github.com/onensensy/myGPT";
                return view('chat', compact('prompt', 'content'));
                break;
        }
    }
}
