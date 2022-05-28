@extends('layout.app')

@section('head')
    <title>Customer table</title>
@endsection

@section('content')

    <div class="row">
        <div class="card-header mt-5"><h1>Customer table</h1></div>
        <div class="card mt-5">

            @include('partials.form-errors')
            @if(Session::has('successStore'))
                <div class="alert alert-info alert-dismissible mt-4">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <p>{{Session('successStore')}}</p>
                </div>
            @endif

            <div class="card-body">

                <!-- The Modal -->
                @include('customer.add-customer-modal')
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                    Add new customer
                </button>

                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Is commercial</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <th>{{ $customer->id }}</th>
                            <th>{{ $customer->firstname }}</th>
                            <th>{{ $customer->lastname }}</th>
                            <th>
                                @if($customer->is_commercial == 0)
                                    no
                                @else
                                    yes
                                @endif
                            </th>
                            <th>{{ $customer->created_at->diffForHumans() }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>{!! $customers->links() !!}</div>
            </div>
        </div>
    </div>

@endsection
