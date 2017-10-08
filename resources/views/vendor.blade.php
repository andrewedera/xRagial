<div id="load">
    <div class="panel animated bounceInUp">
        <div id="panel-heading" class="panel-heading">
            <div class="row">
                <div class="col-md-5"><strong>Name:</strong> {{ $vendorData->shopOwner }}</div>
                <div class="col-md-4"><strong>Location:</strong> {{ $vendorData->map }} ({{ $vendorData->posx }}, {{ $vendorData->posy }})</div>
                <div class="col-md-3 text-right"><strong>Last Seen:</strong> <span class="label label-info">{{ $vendorData->timstamp->diffForHumans() }}</span></div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-responsive">
                <thead>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                </thead>
    @foreach ($vendorProfile as $vendor)
                <tr>
                    <td><img src='//imgs.ratemyserver.net/items/small/{{$vendor->imgLink}}.gif' alt="{{$vendor->name}}"> {{ $vendor->name }}</td>
                    <td>{{ $vendor->amount }}</td>
                    <td><span class="price">{{ number_format($vendor->price) }}<sub>z</sub></span></td>
                </tr>
    @endforeach
            </table>
        </div>
    </div>
</div>