@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>বাস্তবায়নকারী সংস্থা তালিকা</h4>
                        <a href="{{ url('/implementors/implementors_new') }}" class="btn btn-light btn-rounded btn-fw"><i class="icon-btn mdi mdi-plus-box"></i>নতুন বাস্তবায়নকারী সংস্থা যুক্ত করুন</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <a href="{{ url('/implementors/implementors_view') }}" class="btn btn-light btn-rounded btn-fw">গণপূর্ত অধিদপ্তর।</a>
                                </td>
                                <td>সেক্টরঃ ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                                <td>সাব-সেক্টরঃ গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/implementors/implementors_view') }}" class="btn btn-light btn-rounded btn-fw">গণপূর্ত অধিদপ্তর।</a>
                                </td>
                                <td>সেক্টরঃ ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                                <td>সাব-সেক্টরঃ গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/implementors/implementors_view') }}" class="btn btn-light btn-rounded btn-fw">গণপূর্ত অধিদপ্তর।</a>
                                </td>
                                <td>সেক্টরঃ ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                                <td>সাব-সেক্টরঃ গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/implementors/implementors_view') }}" class="btn btn-light btn-rounded btn-fw">গণপূর্ত অধিদপ্তর।</a>
                                </td>
                                <td>সেক্টরঃ ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                                <td>সাব-সেক্টরঃ গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/implementors/implementors_view') }}" class="btn btn-light btn-rounded btn-fw">গণপূর্ত অধিদপ্তর।</a>
                                </td>
                                <td>সেক্টরঃ ভৌত পরিকল্পনা, পানি সরবরাহ ও গৃহায়ন।</td>
                                <td>সাব-সেক্টরঃ গৃহায়ন ও গণপূর্ত মন্ত্রনালয়।</td>
                            </tr>
                            </tbody>
                        </table>
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
