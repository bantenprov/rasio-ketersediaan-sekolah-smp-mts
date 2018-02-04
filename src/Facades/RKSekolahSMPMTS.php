<?php namespace Bantenprov\RKSekolahSMPMTS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RKSekolahSMPMTS facade.
 *
 * @package Bantenprov\RKSekolahSMPMTS
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSekolahSMPMTS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rk-sekolah-smp-mts';
    }
}
