@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>প্রকল্পের তালিকা</h4>
                        <a href="{{ url('/projects/projects_new') }}" class="btn btn-light btn-rounded btn-fw"><i class="icon-btn mdi mdi-plus-box"></i>নতুন প্রকল্প যুক্ত করুন</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead class="badge-info">
                            <tr>
                                <th>নাম</th>
                                <th>মেয়াদ</th>
                                <th>প্রাক্কলিত ব্যয়</th>
                                <th>বাস্তবায়নকারী </th>
                                <th>ব্যবহারকারী</th>
                                <th>অ্যাকশন</th>
                            </tr>
                        </thead>
                            <tbody>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="{{ url('/projects/projects_edit') }}"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="{{ url('/projects/projects_view') }}"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>প্রকল্পের নাম</td>
                                <td>২০২০-২০২১</td>
                                <td>৪০৪৬</td>
                                <td>সাবডিবিশন</td>
                                <td>সাইট ইঞ্জিনিয়ার</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-pen"></i></button></a>
                                    <a href="#"><button type="button" class="btn btn-light"><i class="icon-btn mdi mdi-eye"></i></button></a>
                                </td>
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
