<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ShowUsersBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:show-users-balance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show user balances';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $users = User::all();
        foreach ($users as $user){
            $this->info(sprintf('📙  User #%s with name %s Balance %s',$user->id,$user->name,$user->balance));
        }
    }
}
