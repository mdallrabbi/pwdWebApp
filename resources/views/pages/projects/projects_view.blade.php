@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>প্রকল্প বিবরন</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>প্রকল্পের নাম</th>
                                <th>সদরঘাট হতে বাইপাস রোড় রাস্তা প্রকল্প</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>প্রকল্পের মেয়াদ</td>
                                <td>জুন ২০১৮ - এপ্রিল ২০২০</td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের অর্থবছর</td>
                                <td>২০১৮ - ২০</td>
                            </tr>
                            <tr>
                                <td>বাস্তবায়নকারী সংস্থা</td>
                                <td>রাজশাহী উন্নয়ন কর্তৃপক্ষ</td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের বাজেট</td>
                                <td>৪০৬৬</td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের ধরণ</td>
                                <td>জিওবি/বৈদেশিক সহায়তা প্রকল্প</td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success mr-2 mt-4">প্রিন্ট করুন</button>
                        <button class="btn btn-light mt-4">পূর্বে যান</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
