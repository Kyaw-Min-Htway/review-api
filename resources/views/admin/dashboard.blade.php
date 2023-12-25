@extends('admin.layouts')

@section('title', 'Review List')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <div class="overview-wrap">
                            <h2 class="title-1">Review List</h2>

                        </div>
                    </div>
                </div>
               <div class="table-responsive table-responsive-data2">
                <table class="table table-data2 text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Rating</th>
                            <th>Price</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $d)
                        <tr class="tr-shadow">
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->product_name }}</td>
                            <td>{{ $d->rating }}</td>
                            <td>{{ $d->product_price }}</td>
                            <td>{{ $d->created_at->format('j-F-Y') }}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $reviews->links() }}
                </div>
            </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection
