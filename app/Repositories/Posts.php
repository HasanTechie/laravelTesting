<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 24-May-17
 * Time: 9:01 AM
 */

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all(){
        return Post::all();
    }

}