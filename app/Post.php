<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPosts($session) {
        if (!$session->has('posts')) {
            $this->createDummData($session);
        }
        return $session->get('posts');
    }

    
    public function getPost($session, $id) {
        if (!$session->has('posts')) {
            $this->createDummData($session);
        }
        return $session->get('posts')[$id];
    }
    
    public function addPost($session, $title, $content) {
        if (!$session->has('posts')) {
            $this->createDummData($session);
        }
        $posts = $session->get('posts');
        array_push($posts, ['title' => $title, 'content' => $content]);
        $session->put('posts', $posts);
    }
    
    public function editPost($session, $id, $title, $content) {
        $posts = $session->get('posts');
        $posts[$id] = ['title' => $title, 'content' => $content];
        $session->put('posts', $posts);
    }

    private function createDummData($session) {
        $posts = [
            [
                'title' => 'Learnin Laravel',
                'content' => 'This article will be displayed'
            ],
            [
                'title' => 'Learnin Laravel article 2',
                'content' => 'This article will be displayed too'
            ]
            ];

        $session->put('posts', $posts);
    }
}


