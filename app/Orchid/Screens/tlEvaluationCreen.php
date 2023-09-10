<?php

namespace App\Orchid\Screens;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

class tlEvaluationCreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        // Auth::user()->name
        return 'Evaluation '. (strtoupper(Auth::user()->fonction)?? '') .'--'.Str::ucfirst(Auth::user()->name).' --';
    }

    public function description(): ?string
    {
        return 'Progression du DCM';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

        try {
            // dd('ffff' ,DB::table('tl_evaluations')->where('tl_phone',Auth::user()->phone)->orderBy('date','desc')->first());
            // dd(DB::table('dcm_evaluations')->where('dcm_phhone',"852354266")->orderBy('date','asc')->first(),Auth::user()->phone);
            // dd(Auth::user()->phone);
            $evaluation = DB::table('tl_evaluations')->where('tl_phone',Auth::user()->phone)->orderBy('date','desc')->first();
            // dd($evaluation );
            $updateDate = Carbon::createFromFormat('d/m/Y H:i',$evaluation->date)->translatedFormat('d F Y à H\hi');

        // dd($evaluation->rea_cico/$evaluation->obj_cico);
        // DD($this->getTax($evaluation->rea_cico,$evaluation->obj_cico));
        // dd($evaluation,$updateDate->translatedFormat('d F Y à H\hi'));

        } catch (\Throwable $th) {
            return [
                Layout::view('my.oups-data')
            ];
        }

        $taux = array(
            'ga' => $this->getTax($evaluation->rea_ga,$evaluation->obj_ga),
            'ga_om' => $this->getTax($evaluation->rea_ga_om,$evaluation->obj_ga_om),
            'sso' => $this->getTax($evaluation->rea_sso,$evaluation->obj_sso),
            'etopup' => $this->getTax($evaluation->rea_etopup,$evaluation->obj_etopup),
            'cico' => $this->getTax($evaluation->rea_cico,$evaluation->obj_cico),
            'visite' => $this->getTax($evaluation->pdv_visited,$evaluation->pdv_loaded),

        );

        // dd($taux['ga']);
        return [
            Layout::view('my.dcm-evaluation',[
                'evaluation' => $evaluation,
                'taux' => $taux,
                'updateDate' => $updateDate,
            ])
        ];
    }

    public function getTax($rea,$obj){

        if ((float)$obj > 0 && (float)$rea > 0) {
            return ((float)$rea/(float)$obj)*100;
        }elseif ((float)$rea > 0 && (float)$obj <= 0) {
            return 100;
        }elseif((float)$obj > 0 && (float)$rea <= 0){
            return 0;
        }elseif((float)$obj <= 0 && (float)$rea <= 0){
            return 0;
        }

    }
}
