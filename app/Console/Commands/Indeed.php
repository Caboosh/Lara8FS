<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Indeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zavala:indeed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hah funny Zavala Copypasta';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->comment(
'Whether we wanted it or not, we\'ve stepped into a War with the Cabal on Mars.
So Let\'s get to taking out their command, one by one. Valus Ta\'Aurc, from what
I can gather he commands the Siege Dancers from an Imperial Land Tank just outside
of Rubicon, he\'s well protected, but with the right team, we can punch through their
defences, take this beast out and break their grip on Freehold');
    }
}
