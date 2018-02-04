<?php namespace Bantenprov\RKSekolahSMPMTS\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RKSekolahSMPMTS\Facades\RKSekolahSMPMTS;

/* Models */
use Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS\RKSekolahSMPMTS as PdrbModel;
use Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS\Province;
use Bantenprov\RKSekolahSMPMTS\Models\Bantenprov\RKSekolahSMPMTS\Regency;

/* etc */
use Validator;

/**
 * The RKSekolahSMPMTSController class.
 *
 * @package Bantenprov\RKSekolahSMPMTS
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSekolahSMPMTSController extends Controller
{

    protected $province;

    protected $regency;

    protected $rk_sekolah_smp_mts;

    public function __construct(Regency $regency, Province $province, PdrbModel $rk_sekolah_smp_mts)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rk_sekolah_smp_mts     = $rk_sekolah_smp_mts;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $rk_sekolah_smp_mts = $this->rk-sekolah-smp-mts->find($id);

        return response()->json([
            'negara'    => $rk-sekolah-smp-mts->negara,
            'province'  => $rk-sekolah-smp-mts->getProvince->name,
            'regencies' => $rk-sekolah-smp-mts->getRegency->name,
            'tahun'     => $rk-sekolah-smp-mts->tahun,
            'data'      => $rk-sekolah-smp-mts->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->rk-sekolah-smp-mts->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rk-sekolah-smp-mts->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

