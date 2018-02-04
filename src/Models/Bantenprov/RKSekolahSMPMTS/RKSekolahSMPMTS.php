<?php

namespace Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RKSekolahSMPMTS extends Model
{

    protected $table = 'rk_sekolah_smp_mtss';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS\Regency','id','regency_id');
    }

}

