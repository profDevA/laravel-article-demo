<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class DeleteOldArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command deletes articles older than 30 days';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Article::whereDate('created_at', '<', now()->subDays(30))->delete();
    }
}
