<?php namespace Bantenprov\RKSekolahSMPMTS\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RKSekolahSMPMTSCommand class.
 *
 * @package Bantenprov\RKSekolahSMPMTS
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSekolahSMPMTSCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rk-sekolah-smp-mts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RKSekolahSMPMTS package';

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
        $this->info('Welcome to command for Bantenprov\RKSekolahSMPMTS package');
    }
}
