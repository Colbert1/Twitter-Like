<?php

namespace App\Http\Controllers;

/*
    
    Ecrire un tweet
    Supprimer un twwet
    Commenter un tweet
    Liker un tweet
    Paratger un tweet (RT)

*/

class Tweet extends Controller
{
    public function TL()
    {
        $posts = ['Twitter Like'];
        return view('accueil', compact('posts'));
    }
    public function ecrireTweet()
    {
        echo "Ecrit un tweet";
    }
    public function suppTweet()
    {
        echo "Supprime un tweet";
    }
    public function commenterTweet()
    {
        echo "Commente un tweet";
    }
    public function likerTweet()
    {
        echo "Like un tweet";
    }
    public function partagerTweet()
    {
        echo "Partage un tweet";
    }
    public function voirTweet($id)
    {
        $posts = [
            1 => 'Tweet1',
            2 => 'Tweet2'
        ];
        $post = $posts[$id];
        return view('detailTweet', ['post' => $post]);
    }
    public function contact()
    {
        return view('contact');
    }
}
