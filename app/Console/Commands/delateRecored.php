<?php

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Console\Command;

class delateRecored extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deleteRecord';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       
        try {
            $user = User::where('id',1)->first();
        
            if ($user) 
            {
                $user->delete();
                echo 'User deleted successfully.';

            } else {
                echo 'No user found.';
            }
        } catch (\Exception $e) 
        {
            echo 'An error occurred: ' . $e->getMessage();
        }
        
    }
}
