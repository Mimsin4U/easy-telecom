@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Offer</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row bg-dark justify-content-center py-4">
        <!--  -->
        <h2 class="text-success text-center"></h2>
        <form class="offer-form" method="POST" action="{{ route('addOffers') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter title" required class="form-control">
            </div>

            <div class="form-group">
                <label for="originalPrice">Original Price:</label>
                <input type="number" id="originalPrice" name="original_price" placeholder="Enter original price" required
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="discountPrice">Discount Price:</label>
                <input type="number" id="discountPrice" name="discount_price" placeholder="Enter discount price" required
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="picture">Picture:</label>
                <input type="file" id="picture" name="image" accept="image/*" required class="form-control">
            </div>

            <button type="submit" class="btn btn-sm btn-success">Add Offer</button>
        </form>
    </div>
@endsection
