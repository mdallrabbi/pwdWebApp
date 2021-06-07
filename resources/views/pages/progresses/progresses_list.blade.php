@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> প্রকল্পের অগ্রগতি </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_view') }}">প্রকল্প ১</a>
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_view') }}">প্রকল্প ২</a>
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_view') }}">প্রকল্প ৩</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> নতুন প্রকল্প যুক্ত করুন </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_new') }}">প্রকল্প ১</a>
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_new') }}">প্রকল্প ২</a>
                            <a class="dropdown-item" href="{{ url('/progresses/progresses_new') }}">প্রকল্প ৩</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="badge-info">
                        <tr>
                            <th>প্রকল্পের নাম</th>
                            <th>অর্থবছর</th>
                            <th>আর্থিক অগ্রগতি</th>
                            <th>ভৌত অগ্রগতি </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
                        </tr>
                        <tr>
                            <td>প্রকল্পের নাম</td>
                            <td>২০২০-২০২১</td>
                            <td>৪০৪৬</td>
                            <td>৪৫%</td>
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
