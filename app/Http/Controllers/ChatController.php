<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agents\EduHelperAgent;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');

        $agent = new EduHelperAgent();

        $response = $agent->respond($message);

        return response()->json([
            'reply' => $response
        ]);
    }
}
