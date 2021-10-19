@extends('dashboard.main')

@section('maincontent')

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">
        Isi Dashboard

        <div class="form-group col-6 col-sm-6 col-md-6 text-right">
            <a class="btn btn-primary" href="{{ route('download') }}">Download</a>
        </div>
    </div>
</section>


@endsection


