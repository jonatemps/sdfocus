<?php

namespace App\Orchid\Screens;

use App\Models\Parc;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PerfoInfraScreen extends Screen
{
    public $details,$nameCurrentM,$nameLastM,$mtds = array(),$kpi,$mtd;
    public $resumes,$zones;

    /**
     * Fetch data to be displayed on the screen. =
     *
     * @return array
     */
    public function query($kpi = 'Parc',$mtd): iterable
    {
        // dd($mtd);
        // dd(Auth::user()->getRoles()->pluck('name')->toArray());
        $this->zones = Auth::user()->getRoles()->pluck('name')->toArray();
        // dd($this->zones);
        // $mtd ? $mtd = Carbon::parse($mtd)->format('d/m/Y') : '';
        $dayChoised = $mtd ? explode('-', $mtd) : '';

        $monthChoised = $dayChoised ? $dayChoised[2].$dayChoised[1] : null;
        // dd($monthChoised);
        $dayChoised = $dayChoised ? $dayChoised[0] : null;



        $currentMonth = $monthChoised ?? Parc::max('mois');

        $lastMonth = (string) ($currentMonth -1);
        $currentDate = Parc::where('mois',$currentMonth)->max('event_date');
        $maxDay= $dayChoised ?? substr($currentDate,0,3);

        // dd($dayChoised,$monthChoised,$currentMonth,$lastMonth);

        Carbon::setLocale('fr');
        $this->nameCurrentM = ucfirst(Carbon::createFromDate(null, substr($currentMonth,4,6), null)->monthName);

        $this->nameLastM = ucfirst(Carbon::createFromDate(null, substr($lastMonth,4,6), null)->monthName);

        $this->kpi = $kpi ??'Parc';


        // dd($this->mtd,$mtd);

        // dd(Carbon::parse($currentDate)->format('d/m/Y'));
        $this->mtd = $mtd ?
                    Carbon::parse($mtd) :
                    Carbon::parse($currentDate);
        // dd($this->mtd->format('d/m/Y'),'ok',$this->mtd->formatLocalized('%A %d %B %Y'));
        // dd($maxDay,$lastMonth);
    //   dd( Parc::DateContains("23/06")->limit(6)->get());
    //     dd(Parc::where('mois',Parc::max('mois'))->max('event_date'));
    //     $parc = DB::table("parcs")
    //             ->where('REGION_COMMERCIAL','kinshasa')
    //             ->select([
    //                 "site_key",
    //                 "site_name",
    //                 "TERRITOIRE_COMMERCIAL",
    //                 "secteur_com",
    //                 DB::raw(' SUM(CASE WHEN mois='.Parc::max('mois').' THEN parc ELSE 0 END) AS current_month'),
    //                 DB::raw('SUM(CASE WHEN mois='.(Parc::max('mois')-1).' THEN parc ELSE 0 END) AS past_month')
    //             ])
    //             ->groupBy("site_key")
    //             ->groupBy("site_name")
    //             ->groupBy("TERRITOIRE_COMMERCIAL")
    //             ->groupBy("secteur_com")
    //             ->orderBy("TERRITOIRE_COMMERCIAL")
    //             ->limit(10)->get();
    $this->getContent($currentMonth,$maxDay,$lastMonth);

        $dates = Parc::where('REGION_COMMERCIAL','kinshasa')
        // ->where('mois',$currentMonth)->select('event_date')
        ->distinct()
        ->orderBy('event_date','desc')
        ->pluck('event_date')
        ->toArray();
        foreach ($dates as $value) {
            $this->mtds[$value] = $value;
        }
        // $this->mtds = Parc::where('REGION_COMMERCIAL','kinshasa')->where('mois',$currentMonth)->select('event_date')->orderBy('event_date','desc')->distinct()->pluck('event_date')->toArray();
        // dd($this->details->sum('current_month') > 0,$this->details->sum('last_month') > 0);
        if ($this->resumes->sum('current_month') > 0 && $this->resumes->sum('last_month') > 0) {
            $varMonth = ($this->resumes->sum('current_month')/$this->resumes->sum('last_month')-1)*100;
        } else {
            $varMonth = 0;
        }


        // $varMonth = $varMonth - 154044;

        return [
            'metrics' => [
                'sales'    => ['value' => number_format($this->resumes->sum('last_month'),0,',',' '), 'diff' => 0],
                'visitors' => ['value' => number_format($this->details->sum('current_month'),0,',',' '), 'diff' => $varMonth],
                'orders'   => ['value' => number_format(24668), 'diff' => -30.76],
                'total'    =>['value' => number_format(24668), 'diff' => -30.76],
            ],
            'kpi' => $kpi,
            // 'mtd' => '5/07/2023'
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        // dd(Carbon::parse($this->mtd)->formatLocalized('%A %d %B %Y'));
        // Carbon::setLocale('fr');
        // dd(Carbon::parse($this->mtd)->locale('fr')->formatLocalized('%A %d %B %Y'));
        return 'Performance Infra | '.($this->kpi ?? 'Parc') .' | au '.$this->mtd->formatLocalized('%A %d %B %Y');
    }

    public function description(): ?string
    {
        return "Suivi de la Performance de l'Infra";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

        // dd(json_encode(array_values($this->mtds)));
        return [
            Layout::metrics([
                $this->nameLastM     => 'metrics.sales',
                $this->nameCurrentM => 'metrics.visitors',
                // 'Pending Orders' => 'metrics.orders',
                // 'Total Earnings' => 'metrics.total',
            ]),
            Layout::rows([
                Group::make([
                    Select::make('kpi')
                        // ->title('KPI')
                        ->options([
                            'first_call'=> 'First Call',
                            'Actif' => 'Actif',
                            'Deco' => 'Deco',
                            'Reco' => 'Reco',
                            'Charged_base' => 'Charged_base',
                            'Parc' => 'Parc',
                        ])
                        ->required()
                        ->empty('select KPI'),
                    Select::make('mtd')
                        // ->title('MTD')
                        ->options($this->mtds)
                        ->empty('Select Jour-J'),
                    Button::make('Charger')->method('control')->type(Color::PRIMARY())
                ])
            ]),
            Layout::tabs([
                'Détail' => Layout::view('my.table-detail',['items'=>  $this->details,'nameLastM' => $this->nameLastM,'nameCurrentM' => $this->nameCurrentM]),
                'Resumé' => Layout::view('my.table-resume',['items'=>  $this->resumes,'nameLastM' => $this->nameLastM,'nameCurrentM' => $this->nameCurrentM]),
            ]),
        ];
    }

    public function control(Request $request){
        if ($request->input('kpi') != null || $request->input('mtd') != null) {
            $mtd = $request->input('mtd') ? Carbon::createFromFormat('d/m/Y',$request->input('mtd'))->format('d-m-Y') : '';

            return redirect()->route('platform.perfo.infra',[$request->input('kpi'),$mtd]);
        } else {
            Alert::error("Veillez séléctionner un paramettre pour changer le contenu. ");
        }

        // dd($request->input());
    }

    public function getContent($currentMonth,$maxDay,$lastMonth){

        if (Auth::user()->hasAccess('platform.systems.dir')) {
            $this->resumes = DB::table("parcs")
            ->where('REGION_COMMERCIAL','kinshasa')
            ->whereIn('TERRITOIRE_COMMERCIAL',$this->zones)
            ->select([
                "TERRITOIRE_COMMERCIAL",
                DB::raw("SUM(CASE WHEN mois= $currentMonth
                        AND event_date LIKE '%$maxDay%'
                        THEN $this->kpi ELSE 0
                        END) AS current_month"),
                DB::raw("SUM(CASE WHEN mois= $lastMonth
                        AND event_date LIKE '%$maxDay%'
                        THEN $this->kpi ELSE 0
                        END) AS last_month"),
                ])
            ->groupBy("TERRITOIRE_COMMERCIAL")
            ->orderBy("TERRITOIRE_COMMERCIAL")->get();
        } else {
            $this->resumes = DB::table("parcs")
            ->where('REGION_COMMERCIAL','kinshasa')
            ->whereIn('TERRITOIRE_COMMERCIAL',$this->zones)
            ->select([
                'secteur_com',
                $this->kpi !='first_call' ? DB::raw("SUM(CASE WHEN mois= $currentMonth
                                            AND event_date LIKE '%$maxDay%'
                                            THEN $this->kpi ELSE 0
                                            END) AS current_month") :
                                            DB::raw(" SUM(CASE WHEN mois=$currentMonth
                                            THEN $this->kpi ELSE 0
                                            END) AS current_month"),
                $this->kpi !='first_call' ? DB::raw("SUM(CASE WHEN mois= $lastMonth
                                            AND event_date LIKE '%$maxDay%'
                                            THEN $this->kpi ELSE 0
                                            END) AS last_month") :
                                            DB::raw(" SUM(CASE WHEN mois=$lastMonth
                                            THEN $this->kpi ELSE 0
                                            END) AS last_month"),
                ])
            ->groupBy("secteur_com")->get();
        }

        // dd($this->resumes );
        $this->details = DB::table("parcs")
                ->where('REGION_COMMERCIAL','kinshasa')
                ->whereIn('TERRITOIRE_COMMERCIAL',$this->zones)
                ->select([
                    "site_key",
                    "site_name",
                    "secteur_com",
                    "TERRITOIRE_COMMERCIAL",
                $this->kpi !='first_call' ? DB::raw("SUM(CASE WHEN mois= $currentMonth
                                            AND event_date LIKE '%$maxDay%'
                                            THEN $this->kpi ELSE 0
                                            END) AS current_month") :
                                            DB::raw(" SUM(CASE WHEN mois=$currentMonth
                                            THEN $this->kpi ELSE 0
                                            END) AS current_month"),
                $this->kpi !='first_call' ? DB::raw("SUM(CASE WHEN mois= $lastMonth
                                            AND event_date LIKE '%$maxDay%'
                                            THEN $this->kpi ELSE 0
                                            END) AS last_month") :
                                            DB::raw(" SUM(CASE WHEN mois=$lastMonth
                                            THEN $this->kpi ELSE 0
                                            END) AS last_month"),
                     ])
                ->groupBy("site_key")
                ->groupBy("site_name")
                ->groupBy("secteur_com")
                ->groupBy("TERRITOIRE_COMMERCIAL")
                ->orderBy("TERRITOIRE_COMMERCIAL")->get();
    }
}
