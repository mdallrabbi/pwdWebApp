@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>নতুন প্রকল্প</h4>
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
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputPassword4">Password</label>--}}
{{--                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>File upload</label>--}}
{{--                            <input type="file" name="img[]" class="file-upload-default">--}}
{{--                            <div class="input-group col-xs-12">--}}
{{--                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">--}}
{{--                                <span class="input-group-append">--}}
{{--                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>--}}
{{--                          </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputCity1">City</label>--}}
{{--                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleTextarea1">Textarea</label>--}}
{{--                            <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>--}}
{{--                        </div>--}}
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
