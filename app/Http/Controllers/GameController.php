<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\ShopItem;
use App\Models\UserChoiceAnswer;
use Illuminate\Support\Facades\DB;

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
        $subject = $request->exists('subject') ? $request->subject : 'Aljabar';

        $questions = Question::with('choices')
                        ->where('type',$subject)->take(10)->inRandomOrder()->get();
        $lastPlay = Play::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->first();

        return view('game.play', compact('questions', 'lastPlay'));
    }

    public function minigames(Request $request) {
        $lastPlay = Play::where('type','normal')->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->first();
        return view('game.minigames', compact('lastPlay'));
    }

    public function gameover() {
        return view('game.gameover');
    }

    public function storeAnswers(Request $request) {

        $answers = $request->answers;
        $new_answers = [];

        $score = collect($answers)->where('is_correct',1)->count() * 10;
        
        $play = Play::create([
            'type' => 'normal',
            'score' => $score,
            'user_id' => $request->user_id,
            'subject' => $request->subject
        ]);
        $i = 0;
        while($i < count($answers)) {
            $answers[$i]['play_id'] = $play->id;
            error_log($i);
            $i++;
        }


        $insert = UserChoiceAnswer::insert($answers);
        
        return response()->json(['success' => true,'answers' => $answers]);
    }

    public function storeMinigames(Request $request) {
        $user = User::find($request->user_id);
        $score = $request->score;

        $lastPlay = Play::where('user_id', $user->id)->where('type', 'normal')->orderBy('id','desc')->first();

        if($lastPlay) {
            $lastPlay->score += $score;
            $lastPlay->save();
        }else{
            Play::create(['user_id' => $user->id, 'type' => 'normal','score' => $score]);
        }


        // Add gold if the score is 100
        // if($lastPlay->score >= 100) {
            $user->gold += $lastPlay->score/2;
            $user->save();
        // }

        return response()->json(['success' => true, 'score' => $score], 201);
        
    }
    
    public function achievements() {
        $play_count = Play::where('user_id', Auth::user()->id)->where('type','normal')->count();
        return view('game.achievements', compact('play_count'));
    }
    public function leaderboard(Request $request) {
        $subject = $request->get('subject');

        $plays = Play::with('user')->select(DB::raw('MAX(score) as max_score'), 'user_id','score')->where('type', 'normal');
        if($subject) $plays->where('subject', $subject);
        $plays = $plays->orderBy('max_score','desc')->groupBy('user_id')->take(10)->get();
        
        return view('game.leaderboard', compact('plays'));   
    }
    public function shop() {
        return view('game.shop');   
    }
    public function buy(Request $request) {
        $item = ShopItem::findOrFail($request->item);

        // check balance
        $user = User::find(Auth::user()->id);
        if(Auth::user()->gold < $item->price) return redirect()->back()->with('error', 'Gold tidak cukup');

        $count_user_buy = Purchase::where('user_id', Auth::user()->id)->where('shop_item_id', $item->id)->count();
        
        // check max buy
        if($count_user_buy >= $item->max_buy) return redirect()->back()->with('error', 'Tidak dapat melebihi maksimum pembelian');

        if($item->id == 1) {
            // nyawa dibeli
            $user->nyawa++;
        } else if($item->id == 2) {
            // 30 detik time dibeli
            $user->time += 30;
        } else if($item->id == 3) {
            $user->avatar_url = "2.png";
        } else if($item->id == 4) {
            $user->avatar_url = "4.png";
        } else if($item->id == 5) {
            $user->avatar_url = "5.png";
        } 


        $purchase = Purchase::create([
            'shop_item_id' => $item->id,
            'user_id'=> $user->id,
            'price' => $item->price,
            'gold_from' => $user->gold,
            'gold_to' => $user->gold-$item->price
        ]);
        
        $user->gold -= $item->price;
        $user->save();

        if($item->id == 6) {
            return redirect(asset('/files/sticker_pack_2.zip'));
        }
        
        return redirect()->back()->with('success','Sukses membeli '.$item->name);
    }
}
