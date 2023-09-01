<div role="tabpanel" class="tab-pane" id="tab-example-tab-1">
    <div class="rounded bg-white mb-3 p-3">
        <div class="border-dashed d-flex align-items-center w-100 rounded overflow-hidden" style="min-height: 250px;">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" style="color:rgb(255, 255, 255)"><strong>Total</strong></th>
                    <th scope="col" style="color:rgb(255, 255, 255)">{{number_format($items->sum('last_month'),0,'',' ')}}</th>
                    <th scope="col" style="color:rgb(255, 255, 255)">{{number_format($items->sum('current_month'),0,'',' ')}}</th>
                    <th scope="col" style="color:rgb(255, 255, 255)">
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
                        <td ><strong>Site_key</strong></td>
                        <td ><strong>Site_name</strong></td>
                        <td ><strong>Zone_Com</strong></td>
                        <td ><strong>Secteur_Com</strong></td>
                        <td ><strong>{{$nameLastM}}</strong></td>
                        <td ><strong>{{$nameCurrentM}}</strong></td>
                        <td ><strong>% Variance</strong></td>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->site_key}}</td>
                            <td>{{substr($item->site_name,0,17)}}</td>
                            <td>{{$item->TERRITOIRE_COMMERCIAL}}</td>
                            <td>{{$item->secteur_com}}</td>
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
