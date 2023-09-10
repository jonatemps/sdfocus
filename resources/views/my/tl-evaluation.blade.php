
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
                <div class="col-12"><h6>PDV CICO</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{$evaluation->obj_cico}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{$evaluation->rea_cico}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['cico']}}%;" aria-valuenow="{{$taux['cico']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['cico'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{$evaluation->rea_cico-$evaluation->obj_cico}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>Gross ADD</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{$evaluation->obj_ga}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{$evaluation->rea_ga}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['ga']}}%;" aria-valuenow="{{$taux['ga']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['ga'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{$evaluation->rea_ga-$evaluation->obj_ga}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>Gross ADD OM</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{$evaluation->obj_ga_om}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{$evaluation->rea_ga_om}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['ga_om']}}%;" aria-valuenow="{{$taux['ga_om']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['ga_om'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{$evaluation->rea_ga_om-$evaluation->obj_ga_om}}</div>
            </div>
            <div class="row g-0 shadow p-3 mb-4 rounded" style="border-bottom: inset;">
                <div class="col-12"><h6>SIM Sales Out (SSO)</h6></div>
                <div class="col-12 d-flex"><p><span>Target : </span> {{$evaluation->obj_sso}}</p></div>
                <div class="col-5 col-md-4">Réalisation : {{$evaluation->rea_sso}}</div>
                <div class="col-7 col-md-8">
                    <div class="progress" style="background-color: rgb(219, 219, 214);">
                        <div class="progress-bar" role="progressbar" style="width: {{$taux['sso']}}%;" aria-valuenow="{{$taux['sso']}}" aria-valuemin="0" aria-valuemax="100">{{number_format($taux['sso'],0)}}%</div>
                    </div>
                </div>
                <div class="col-5 col-md-4">GAP : {{$evaluation->rea_sso-$evaluation->obj_sso}}</div>
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
