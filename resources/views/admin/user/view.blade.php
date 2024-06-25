@extends("layouts.admin")

@section("content")
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="">
                @if (session("status"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session("status") }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif

                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="">{{ __("Manage User") }}</h4>
                    <a class="btn btn-sm btn-success" href="{{ route("user.create") }}">
                        {{ __("Add") }}
                    </a>
                </div>

                <div class="table-responsive mt-4" style="height: 75vh;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>NIM</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td valign="middle">{{ $user->name }}</td>
                                <td valign="middle">{{ $user->nim }}</td>
                                <td valign="middle" class="text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            {{ __("Action") }}
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-item" href="{{ route("user.edit", $user->id) }}">{{ __("Edit") }}</a>
                                            </li>
                                            <form method="POST" action="{{ route("user.destroy", $user->id) }}">
                                                @csrf
                                                @method("DELETE")
                                                <li>
                                                    <button class="dropdown-item" type="submit">{{ __("Delete") }}</button>
                                                </li>
                                            </form>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $users->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
