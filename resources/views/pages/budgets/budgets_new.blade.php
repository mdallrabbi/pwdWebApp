@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>প্রকল্পের নাম: নতুন বাজেটপ</h4>
                    </div>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের নাম</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="প্রকল্পের নাম">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের মেয়াদ</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="২ বছর">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">প্রকল্পের অর্থবছর</label>
                            <input type="date" class="form-control" id="exampleInputName1" placeholder="৪০৪৬">
                        </div>
                        <div class="form-group">
                            <select class="form-select border-primary mdi-format-color-highlight" aria-label="Default select example">
                                <option selected>প্রকল্পের ধরণ</option>
                                <option value="1">জিওবি বরাদ্দ</option>
                                <option value="2">বৈদেশিক বরাদ্দ</option>
                                <option value="3">বৈদেশিক বরাদ্দ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">নতুন বাজেটের পরিমাণা</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সাবডিবিশন">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">বাস্তবায়নকারী সংস্থা</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="সাবডিবিশন">
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
