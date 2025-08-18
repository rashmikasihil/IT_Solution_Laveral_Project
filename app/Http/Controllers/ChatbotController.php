<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;


class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a chatbot for Headstart company. Answer questions about services, contact info, and learning solutions.'],
                ['role' => 'user', 'content' => $request->message],
            ],
        ]);

        return response()->json(['reply' => $response->choices[0]->message->content]);
    }
}

