@extends('layouts.tabler')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    {{ __('Account Settings') }}
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">
                            {{ __('User Settings') }}
                        </h4>
                        <div class="list-group list-group-transparent">
                            <a href="{{ route('users.settings') }}" class="list-group-item list-group-item-action d-flex align-items-center active">
                                {{ __('My Account') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <h2 class="mb-4">My Account</h2>
                        <h3 class="card-title">Profile Details</h3>
                        <div class="row align-items-center">
                            <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn">
                                    Change avatar
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-ghost-danger">
                                    Delete avatar
                                </a>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Business Profile</h3>
                        <div class="row g-3">
                            <div class="col-md">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="">
                            </div>
                        </div>
                        <h3 class="card-title mt-4">
                            Email
                        </h3>
                        <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>
                        <div>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <input type="text" class="form-control w-auto" value="paweluna@howstuffworks.com">
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn">
                                        Change
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Password</h3>
                        <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login codes.</p>
                        <div>
                            <a href="#" class="btn">
                                Set new password
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <a href="{{ url()->previous() }}" class="btn">
                                {{ __('Cancel') }}
                            </a>
                            <a href="#" class="btn btn-primary">
                                {{ __('Submit') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
