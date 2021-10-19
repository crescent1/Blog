@extends('dashboard.main')

@section('maincontent')

<section class="section">
    <div class="section-header">
        <h1>Add Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></div>
            <div class="breadcrumb-item">Add Users</div>
        </div>
    </div>

    <div class="section-body">
        <div class="col-12 col-sm-12 col-lg-10">
            <div class="card">
                <form class="needs-validation" novalidate="">
                    <div class="card-header">
                        <h4>Add User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required="">
                                <div class="invalid-feedback">
                                What's user name?
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" required="" autocomplete="off">
                                <div class="invalid-feedback">
                                Oh no! Email is invalid.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" required>
                                    <option value=""></option>
                                    <option {{ old('type') == "1"? 'selected':''}} value="{{ \App\Enums\UserType::Administrator }}">Administrator</option>
                                    <option {{ old('type') == "2"? 'selected':''}} value="{{ \App\Enums\UserType::User }}">User</option>
                                </select>
                                <div class="invalid-feedback">
                                Status invalid
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" required="" autocomplete="new-password">
                                <div class="invalid-feedback">
                                Password Invalid
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection


