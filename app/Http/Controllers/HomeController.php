<?php

namespace App\Http\Controllers;

use App\Models\Feeling;
use App\Models\FeelingMusic;
use App\Models\FeelingSport;
use App\Models\feelingUser;
use App\Models\Music;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $last_feeling = feelingUser::where('user_id', Auth::id())->latest()->first();
        $feelings = Feeling::all();
        return view('home' , compact('last_feeling', 'feelings'));
    }

    public function category(Request $request)
    {
        $user_id = Auth::id();

        if(!($request->all() == NULL))
        {
            feelingUser::create([
            'user_id' => $user_id,
            'feeling'=> $request->emotions
            ]);
        }
        return view('category');
    }

    public function music(Request $request)
    {
        $last_feeling = feelingUser::where('user_id', Auth::id())->latest()->first();
        $feeling = Feeling::where('name' , $last_feeling->feeling)->first();
        $musics = FeelingMusic::with('music')->where('feeling_id', $feeling->id)->get();
        $music_ids = $musics->pluck('music_id');
        $musics = Music::whereIn('id', $music_ids)->get();
        if($musics->isEmpty())  
        {   
            $musics = Music::all();
        }
        // dd($musics->toArray());
        return view('music', compact('musics'));
    }

    public function sport(Request $request)
    {
        $last_feeling = feelingUser::where('user_id', Auth::id())->latest()->first();
        $feeling = Feeling::where('name' , $last_feeling->feeling)->first();
        $sports = FeelingSport::with('sport')->where('feeling_id', $feeling->id)->get();
        $sport_ids = $sports->pluck('sport_id');
        $sports = Sport::whereIn('id', $sport_ids)->get();
        if($sports->isEmpty())  
        {   
            $sports = Sport::all();
        }
        return view('sport', compact('sports'));
    }

    public function sites(Request $request)
    {
        return view('sites');
    }

    public function books(Request $request)
    {
        return view('books');
    }

    public function diary(Request $request)
    {
        return view('diary');
    }

    public function chat(Request $request)
    {
        return view('chat');
    }

    public function send_data(Request $request)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://openrouter.ai/api/v1/chat/completions', [
            'model' => 'deepseek/deepseek-r1:free',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'You are a therapist the user can talk to. You are very helpful and friendly. answer with 20 words'
                ],
                [
                    'role' => 'user',
                    'content' => $request->message
                ]
            ]
        ]);

        $data = $response->json();
        // dd($data);
        $message = $data['choices'][0]['message']['content'] ?? 'No message found';

        // dd($message);


        return response()->json([
            'status' => 'success',
            'message' => $message,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
