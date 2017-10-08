@if(isset($search_results))
    @php
    $results = 'Result';
    if($vends->total()>1)
        $results .= 's';
    @endphp
    <h3>{{ $vends->total() }} <small>{{ $results }} Found.</small></h3>
@endif
{{ $vends->links() }}
<div id="load">
@foreach ($vends as $vend)
    <div class="panel animated bounceInUp">
        <span data-toggle="tooltip" title="Click to show list of vendors">
            <div id="panel-heading" class="panel-heading" data-parent="#load" data-toggle="collapse" data-target="#{{ $vend->id }}">
                <div class="row">
                    <div class="col-md-1"><i class="la la-angle-right"></i></div>
                    <div class="col-md-7"><img src='//imgs.ratemyserver.net/items/small/{{$vend->imgLink}}.gif' alt="{{$vend->name}}"> {{ $vend->name }}</div>
                    <div class="col-md-2 text-right"><span class="label label-info">{{ $vend->totalSeller }}</span></div>
                    <div class="col-md-2">~ <span class="price">{{ number_format($vend->avgAmount) }}<sub>z</sub></span></div>
                </div>
            </div>
        </span>
        <div id="{{ $vend->id }}" class="collapse">
            <div class="panel-body">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th></th>
                        <th>Shop Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Map</th>
                        <th>Last Seen</th>
                    </thead>
        @if(isset($vendors))
            @foreach ($vendors as $vendor)
                @if ($vendor->name == $vend->name)
                    <tr class="clickable" data-toggle="tooltip" data-placement="left" title="View Shop">
                        <td><a href="/vendor/{{ $vendor->shopOwnerID }}"><i class="la la-link"></i></a></td>
                        <td>{{ $vendor->shopName }}</td>
                        <td>{{ $vendor->amount }}</td>
                        <td><span class="price">{{ number_format($vendor->price) }}<sub>z</sub></span></td>
                        <td>{{ $vendor->map }} ({{ $vendor->posx }}, {{ $vendor->posy }}) </td>
                        <td>{{ $vendor->timstamp->diffForHumans() }}</td>
                    </tr>
                @endif
            @endforeach
        @endif
                </table>
            </div>
        </div>
    </div>
@endforeach
</div>