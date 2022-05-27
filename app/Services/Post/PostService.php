<?php
namespace App\Services\Post;
use App\Models\Post;

class PostService implements PostServiceInterface
{
    public function storePost($data)
    {
        $post=Post::Create($data);
        return $data;
    }


}
