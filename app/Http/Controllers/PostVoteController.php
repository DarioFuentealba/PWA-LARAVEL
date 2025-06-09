<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostVote;
use Illuminate\Support\Facades\Auth;

class PostVoteController extends Controller
{
    public function getVotes($postId)
    {
        $post = Post::findOrFail($postId);
        $likes = $post->votes()->where('vote', 1)->count();
        $dislikes = $post->votes()->where('vote', -1)->count();

        return view('post.votes', compact('post', 'likes', 'dislikes'));
    }

    // Procesa el voto
    public function postVote(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'vote' => 'required|in:1,-1',
        ]);

        $userId = Auth::id();
        $postId = $request->input('post_id');
        $valorVoto = $request->input('vote');

        $votoExistente = PostVote::where('user_id', $userId)
                                ->where('post_id', $postId)
                                ->first();

        if ($votoExistente) {
            if ($votoExistente->vote == $valorVoto) {
                $votoExistente->delete();
            } else {
                $votoExistente->vote = $valorVoto;
                $votoExistente->save();
            }
        } else {
            PostVote::create([
                'user_id' => $userId,
                'post_id' => $postId,
                'vote' => $valorVoto,
            ]);
        }

        return redirect()->back();
    }
}
