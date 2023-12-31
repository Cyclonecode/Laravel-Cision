<?php

namespace Cyclonecode\Cision\Commands;

use Illuminate\Console\Command;

class FetchFeed extends Command
{
    protected $signature = 'cision-feed:fetch';

    protected $description = 'Fetch and update the Cision feed';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Fetch the entire feed
        $content = @file_get_contents('/Users/krister/dev/ubuntu/data/laravel-cision/cision/test.txt');
        file_put_contents('/Users/krister/dev/ubuntu/data/laravel-cision/cision/test.txt', $content . time() . PHP_EOL);
    }
}
