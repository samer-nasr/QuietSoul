<?php

namespace App\Http\Controllers;

use App\Models\Feeling;
use App\Models\FeelingMusic;
use App\Models\feelingUser;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('music', compact('musics'));
    }

    public function sport(Request $request)
    {
        return view('sport');
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
