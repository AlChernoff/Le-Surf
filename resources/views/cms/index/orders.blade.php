@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Site Orders</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Order Details</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>
                        <ul>
                            @foreach (unserialize($item->order_data) as $order)
                                <li>{{$order['name']}}, Quantity: {{$order['quantity']}}, Price: {{$order['price']}}</li>
                            @endforeach
                        </ul>
                        </td>
                        <td>${{$item->total}}</td> 
                        <td>{{ date('d/m/Y',strtotime($item->created_at))}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection