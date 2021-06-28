@extends('dashboard.main')

@section('maincontent')

<section class="section">
    <div class="section-header">
        <h1>List Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></div>
            <div class="breadcrumb-item">List Users</div>
        </div>
    </div>

    <div class="section-body">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Users</h4>
                    <div class="card-header-action">
                        <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userList as $admins)
                            <tr>
                                <td>{{ $loop->index + $userList->firstItem() }}</td>
                                <td>{{ $admins->name }}</td>
                                <td>{{ $admins->email }}</td>
                                <td>{{ ucwords(\App\Enums\UserType::fromValue($admins->type)->description) }}</td>
                                <td>
                                    @if ($admins->type == $user->id || $user->type == 1)
                                    <a href="#" class="btn btn-outline-warning">Edit</a>
                                    @endif

                                    @if ($admins->id !== 1 && $user->id == 1)
                                    <a href="#" class="btn btn-outline-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        {{ $userList->links() }}
                      </ul>
                    </nav>
                  </div>
              </div>
          </div>
    </div>
</section>


@endsection


