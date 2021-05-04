<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CategoriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tạo danh mục';

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
     * @return mixed
     */
    public function handle()
    {
    	\Log::info('Create Categories ');
    	$id = rand(1,1000);
		\DB::table('categories')->insert([
			'c_name' => 'danh-muc-'.$id,
			'c_slug' => 'danh-muc-'.$id,
			'c_icon' => 'icon-2'
		]);
    }
}
