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
}
