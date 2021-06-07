@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>প্রকল্পের বাজেট পরিমার্জন - সদরঘাট হতে বাইপাস রোড় রাস্তা প্রকল্প</h4>
                    </div>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের নাম</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সদরঘাট হতে বাইপাস রোড় রাস্তা প্রকল্প">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের মেয়াদ</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="২০২০-২১">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের অর্থবছর</label>
                            <input type="date" class="form-control" id="exampleInputName1" placeholder="৪০৪৬">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের ধরণ</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="জিওবি">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">নতুন বাজেটের পরিমাণ</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="নতুন বাজেটের পরিমাণ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">বাস্তবায়নকারী সংস্থা</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সাবডিবিশন">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">মন্তব্য</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="মন্তব্য">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">ব্যবহারকারী</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সাইট ইঞ্জিনিয়ার">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">তারিখ</label>
                            <input type="datetime-local" class="form-control" id="exampleInputName1" placeholder="০১-০১-২০২০ ১০ঃ০০ঃ০০">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">পরিমার্জন করুন</button>
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
