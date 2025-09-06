<?php

namespace App\Http\Controllers\Chatbot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Song;
class ChatbotController extends Controller
{
    public function index(){
        return view('modules.Chatbot.ChatbotIndex');
    }
    public function askBlackbox()
    {

    }
    public function prompt(Request $request)
    {
        $url = "https://openrouter.ai/api/v1/chat/completions";
        $songs = Song::all();
        $client = new Client();

        // Define los encabezados
        $headers = [
            "Authorization" => "Bearer ". env('OPENAI_API_KEY'), // Reemplaza con tu API Key
            // Opcional: si quieres agregar Referer y X-Title
            "HTTP-Referer" => "<YOUR_SITE_URL>", // Opcional
            "X-Title" => "<YOUR_SITE_NAME>", // Opcional
        ];

        // Mensajes de contexto para limitar a temas de música, canciones y cancioneros
        $contextMessages = [
            [
                "role" => "system",
                "content" => $request->prompt
            ],
            [
                "role" => "user",
                "content" => $request->prompt
            ],
        ];

        // Datos de la solicitud
        $data = [
            "model" => "deepseek/deepseek-r1-0528-qwen3-8b:free", // Modelo que quieres usar
            "messages" => $contextMessages,
        ];

        try {
            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $data,
            ]);

            $responseData = json_decode($response->getBody(), true);
            return response()->json($responseData);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Manejar errores
            $errorResponse = $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            return response()->json([
                'error' => true,
                'message' => $errorResponse,
            ], 500);
        }
    }
}