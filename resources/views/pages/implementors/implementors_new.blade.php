@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>নতুন বাস্তবায়নকারী সংস্থা </h4>
                    </div>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">মন্ত্রণালয়</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">দপ্তর</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">সেক্টর</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="৪০৪৬">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">সাবসেক্টর</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">জোন</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">ডিভিশন</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">সাবডিভিশন</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">তারিখ</label>
                            <input type="datetime-local" class="form-control" id="exampleInputName1" placeholder="০১-০১-২০২০ ১০ঃ০০ঃ০০">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">সংরক্ষণ করুন</button>
                        <button class="btn btn-light">বাতিল করুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
