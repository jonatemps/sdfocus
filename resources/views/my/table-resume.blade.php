<div role="tabpanel" class="tab-pane" id="tab-example-tab-1">
    <div class="rounded bg-white mb-3 p-3">
        <div class="border-dashed d-flex align-items-center w-100 rounded overflow-hidden" style="min-height: 250px;">
            <table class="table table-striped table-bordered caption-top">
                <caption>Evolution KPI en MTD</caption>
                <thead class="table-dark">
                  <tr>
                    <th scope="col" style="color:rgb(255, 255, 255); text-align:right"><strong>Total</strong></th>
                    <th scope="col" class="text-center" style="color:rgb(255, 255, 255)">{{number_format($items->sum('last_month'),0,'',' ')}}</th>
                    <th scope="col" class="text-center" style="color:rgb(255, 255, 255)">{{number_format($items->sum('current_month'),0,'',' ')}}</th>
                    <th scope="col" class="text-center" style="color:rgb(255, 255, 255)">
                        @if ($items->sum('current_month') > 0 && $items->sum('last_month') > 0)
                            @php
                                $totalVar = number_format(($items->sum('current_month')/$items->sum('last_month')-1)*100,1,',')
                            @endphp
                        @else
                            @php
                                $totalVar = 100
                            @endphp
                        @endif
                        @if ($totalVar > 0)
                            <i class="fa-solid fa-arrow-up text-success"></i> {{$totalVar}}%
                        @elseif ($totalVar < 0)
                            <i class="fa-solid fa-arrow-down text-danger"></i> {{$totalVar}}%
                        @else
                            <i class="fa-solid fa-arrow-right text-warning"></i> {{$totalVar}}%
                        @endif
                    </th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-center">
                            <strong>{{Auth::user()->hasAccess('platform.systems.dir') ? 'Zone_com' : 'Secteur_com'}}</strong>
                        </td>
                        <td class="text-center"><strong>{{$nameLastM}}</strong></td>
                        <td class="text-center"><strong>{{$nameCurrentM}}</strong></td>
                        <td class="text-center"><strong>% Variance</strong></td>
                    </tr>
                   @foreach ($items as $item)
                        <tr>
                            @if (Auth::user()->hasAccess('platform.systems.dir'))
                                <td>{{$item->TERRITOIRE_COMMERCIAL}}</td>
                            @else
                                <td>{{$item->secteur_com}}</td>
                            @endif

                            <td class="text-center">{{number_format($item->last_month,0,'',' ')}}</td>
                            <td class="text-center">{{number_format($item->current_month,0,'',' ')}}</td>
                            <td class="text-center">
                                @if ($item->last_month > 0 && $item->current_month <= 0)
                                    <i class="fa-solid fa-arrow-trend-up text-danger"></i> -100%
                                @elseif ($item->last_month <= 0 && $item->current_month > 0)
                                    <i class="fa-solid fa-arrow-trend-up text-success"></i> 100%
                                @elseif ($item->last_month <= 0 && $item->current_month <= 0)
                                    <i class="fa-solid fa-arrow-trend-up text-success"></i> 100%
                                @else
                                    @php
                                        $var = number_format(($item->current_month/$item->last_month-1)*100,1,',')
                                    @endphp
                                    @if ($var > 0)
                                        <i class="fa-solid fa-arrow-trend-up text-success"></i> {{$var}} %
                                    @else
                                        <i class="fa-solid fa-arrow-trend-down text-danger"></i> {{$var}} %
                                    @endif
                                @endif
                            </td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
