<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisTestCommand extends Command
{
    protected $signature = 'redis:go';

    protected $description = 'Command description';

    public function handle()
    {
        $post = Post::find(1);
        Redis::set('posts:' . $post->id, $post);
    }
}
