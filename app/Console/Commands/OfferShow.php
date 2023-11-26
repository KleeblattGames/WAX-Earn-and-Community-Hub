<?php
 
namespace App\Console\Commands;
 
use App\Models\Offer;
use App\Models\OfferList;
use Illuminate\Console\Command;
 
class OfferShow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'offer:show';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List offers saved in the database';
 
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
        $headers = [ 'id', 'partner', 'offer_id', 'status','payout','created_at' ];
        $offers = Offer::all(['id', 'partner', 'offer_id', 'status','payout','created_at'])->toArray();
        $this->table($headers, $offers);
 
        return 0;
    }
}