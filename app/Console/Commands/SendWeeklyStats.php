<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendWeeklyStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with last week\'s stats';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = Carbon::now()->subWeek()->startOfWeek();
        $end = Carbon::now()->subWeek()->endOfWeek();
        $itemsWatchedLastWeek = Playlist::whereBetween('watchedAt', [$start, $end])
            ->with('category')
            ->orderBy('watchedAt')
            ->get();
        if ($itemsWatchedLastWeek->isNotEmpty()) {
            $weeklyStats = new WeeklyStats($itemsWatchedLastWeek->toBase(), $start, $end);
            Mail::to(env('MAIL_TO_ADDRESS'))
                ->bcc(env('MAIL_BCC_ADDRESS'))
                ->queue($weeklyStats);
        }
        return 0;
    }
}
