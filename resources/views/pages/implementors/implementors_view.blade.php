@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>বাস্তবায়নকারী সংস্থার বিবরন</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>মন্ত্রণালয় :</th>
                                <th>গণপূর্ত অধিদপ্তর।</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>দপ্তর :</td>
                                <td>গণপূর্ত অধিদপ্তর।</td>
                            </tr>
                            <tr>
                                <td>সেক্টর :</td>
                                <td>ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                            </tr>
                            <tr>
                                <td>সাবসেক্টর :</td>
                                <td>গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            <tr>
                                <td>জোন :</td>
                                <td>দক্ষিণ জোন</td>
                            </tr>
                            <tr>
                                <td>ডিভিশন : </td>
                                <td>রাজশাহী</td>
                            </tr>
                            <tr>
                                <td>সাবডিভিশন  : </td>
                                <td>রাজশাহী</td>
                            </tr>
                            <tr>
                                <td>তারিখ  : </td>
                                <td>২১/০৫/২০২০</td>
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
