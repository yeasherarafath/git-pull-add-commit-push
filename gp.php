<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class gp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gp {message=auto commit}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Git Pull, add, commit, push';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Git Pull, add, commit, push');
        $pullResult = Process::command('git pull')->run();
        if (!$pullResult->successful()) {
            $this->error('Git pull failed: ' . $pullResult->output());
            return 1;
        }
        $addResult = Process::command('git add .')->run();
        if (!$addResult->successful()) {
            $this->error('Git add failed: ' . $addResult->output());
            return 1;
        }
        $commitResult = Process::command('git commit -m "' . ($this->argument('message')) . '"')->run();
        if (!$commitResult->successful()) {
            $this->error('Git commit failed: ' . $commitResult->output());
            return 1;
        }
        $pushResult = Process::command('git push')->run();
        if (!$pushResult->successful()) {
            $this->error('Git push failed: ' . $pushResult->output());
            return 1;
        }
        $this->info('Git operations completed successfully.');
        return 0;
    }
}
