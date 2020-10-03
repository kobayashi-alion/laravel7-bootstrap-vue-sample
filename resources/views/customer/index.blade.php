@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ route('customer.create') }}">Create</a>
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <th scope="col">ID</th>
                            <th scope="col">顧客コード</th>
                            <th scope="col">顧客名</th>
                            <th scope="col">顧客名（カナ）</th>
                            <th scope="col">郵便番号</th>
                            <th scope="col">住所</th>
                            <th scope="col">建物名</th>
                            <th scope="col">TEL</th>
                            <th scope="col">FAX</th>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td><a href="{{ route('customer.show', $customer->id) }}">{{ $customer->id }}</a></td>
                                <td>{{ $customer->code }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->name_kana }}</td>
                                <td>
                                    @isset($customer->zip_code)
                                        {{  substr($customer->zip_code,0,3) . "-" . substr($customer->zip_code,3,4) }}
                                    @endisset
                                </td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->building_name }}</td>
                                <td>{{ $customer->tel }}</td>
                                <td>{{ $customer->fax }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
