<?php

namespace App\Orchid\Screens;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

class dcmEvaluationCreen extends Screen
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
        return 'Evaluation DCM --'. Str::ucfirst(Auth::user()->name).' --';
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
        $evaluation = DB::table('dcm_evaluations')->where('dcm_phhone',Auth::user()->phone)->orderBy('date','asc')->first();
        // dd($evaluation->date);
        $updateDate = Carbon::createFromFormat('d/m/Y H:i',$evaluation->date)->translatedFormat('d F Y à H\hi');

        // dd($evaluation,$updateDate->translatedFormat('d F Y à H\hi'));
        $taux = array(
            'ga' => ($evaluation->rea_ga/$evaluation->obj_ga)*100,
            'ga_om' => ($evaluation->rea_ga_om/$evaluation->obj_ga_om)*100,
            'sso' => ($evaluation->rea_sso/$evaluation->obj_sso)*100,
            'etopup' => ($evaluation->rea_etopup/$evaluation->obj_etopup)*100,
            'cico' => ($evaluation->rea_cico/$evaluation->obj_cico)*100,
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
}
