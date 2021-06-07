@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>প্রকল্পের নতুন অগ্রগতি যুক্ত করুনঃ</h4>
                    </div>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের নাম</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="প্রকল্পের নাম">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের অর্থবছর</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="প্রকল্পের অর্থবছর">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের ভৌত অগ্রগতি</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">পপ্রকল্পের আর্থিক অগ্রগতি</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">বাস্তবায়নকারী সংস্থা</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="বাস্তবায়নকারী সংস্থা">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">ব্যবহারকারী</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সাইট ইঞ্জিনিয়ার">
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
