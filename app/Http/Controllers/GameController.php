<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\UserChoiceAnswer;

class GameController extends Controller
{
    public function home() {
        return view('game.index');
    }

    /**
     * 
     */
    public function chooseGender() {
        if(Auth::user()->gender) return redirect()->route('game.home');
        return view('game.choose-gender');
    }

    /**
     * Set user's gender from user choice
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
    public function setGender(Request $request) {
        $gender = $request->gender;

        $user = User::find(Auth::user()->id);
        $user->gender = $gender;
        $user->save();

        return redirect()->route('game.home');
    }

    public function play(Request $request) {
        $questions = Question::with('choices')
                        ->where('type','Aljabar')->take(10)->get();
        $lastPlay = Play::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->first();

        return view('game.play', compact('questions', 'lastPlay'));
    }

    public function minigames(Request $request) {
        return view('game.minigames');
    }

    public function storeAnswers(Request $request) {

        $answers = $request->answers;
        $new_answers = [];

        $score = collect($answers)->where('is_correct',1)->count() * 10;
        
        $play = Play::create([
            'type' => 'normal',
            'score' => $score,
            'user_id' => $request->user_id
        ]);
        $i = 0;
        while($i < count($answers)) {
            $answers[$i]['play_id'] = $play->id;
            error_log($i);
            $i++;
        }


        // Add gold if the score is 100
        if($score == 100) {
            $user = User::find(Auth::user()->id);
            $user->gold += 50;
            $user->save();
        }

        $insert = UserChoiceAnswer::insert($answers);
        
        return response()->json(['success' => true,'answers' => $answers]);
    }
    
    public function achievements() {
        $play_count = Play::where('user_id', Auth::user()->id)->where('type','normal')->count();
        return view('game.achievements', compact('play_count'));
    }
    public function leaderboard() {
        return view('game.leaderboard');   
    }
    public function shop() {
        return view('game.shop');   
    }
    public function buy() {

    }
}
