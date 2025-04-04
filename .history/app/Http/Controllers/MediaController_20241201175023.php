<?php

namespace App\Http\Controllers;

use App\Models\BorrowingHistory;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class MediaController extends Controller
{
    public function MediaView(){
        $media = Media::find('1');
        $borrowedBefore = BorrowingHistory::where('user_id', Auth::id())->exists();

        return view('media',compact('media','borrowedBefore'));
    }

    public function PublishReview(Request $request){
        $request->validate([
            'rating' => 'required',
            'review' => 'required'
        ])
    }
}
