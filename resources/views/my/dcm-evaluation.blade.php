
<div role="tabpanel" class="tab-pane" id="tab-example-tab-1">
    <div class="rounded bg-white mb-3 p-3">
        <div class="row">
            <div class="col align-self-center">
              <H6 class="mb-3 text-center">Secteur : {{ucfirst($evaluation->secteur)}}</H6>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-end">
              <H6 class="mb-3 text-center">MAJ du {{$updateDate}}</H6>
            </div>
        </div>
        <div class="border-dashed align-items-center w-100 rounded overflow-hidden" style="min-height: 250px;">

            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>Visite PDV</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->pdv_loaded,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->pdv_visited,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['visite']}}%;" aria-valuenow="{{$taux['visite']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['visite'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_etopup-$evaluation->obj_etopup,0,' ',' ')}}</div>
            </div>

            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>PDV EtopUp</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->obj_etopup,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->rea_etopup,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['etopup']}}%;" aria-valuenow="{{$taux['etopup']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['etopup'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_etopup-$evaluation->obj_etopup,0,' ',' ')}}</div>
            </div>

            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>PDV CICO</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->obj_cico,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->rea_cico,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['cico']}}%;" aria-valuenow="{{$taux['cico']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['cico'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_cico-$evaluation->obj_cico,0,' ',' ')}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>Gross ADD</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->obj_ga,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->rea_ga,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['ga']}}%;" aria-valuenow="{{$taux['ga']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['ga'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_ga-$evaluation->obj_ga,0,' ',' ')}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>Gross ADD OM</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->obj_ga_om,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->rea_ga_om,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['ga_om']}}%;" aria-valuenow="{{$taux['ga_om']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['ga_om'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_ga_om-$evaluation->obj_ga_om,0,' ',' ')}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>SIM Sales Out (SSO)</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{number_format($evaluation->obj_sso,0,' ',' ')}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{number_format($evaluation->rea_sso,0,' ',' ')}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['sso']}}%;" aria-valuenow="{{$taux['sso']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['sso'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{number_format($evaluation->rea_sso-$evaluation->obj_sso,0,' ',' ')}}</div>
            </div>
            {{-- <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>R2C</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> 20000</p></div>
                <div class="col-5 col-md-4">Réalisation : 1000</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
