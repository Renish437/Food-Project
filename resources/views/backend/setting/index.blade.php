@extends('backend.master')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <h5>Setting</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-4">
                                <ul class="nav setting-main-box sticky theme-scrollbar" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">

                                    <li>
                                        <button class="nav-link active" id="password-tab" data-bs-toggle="pill"
                                            data-bs-target="#password" role="tab" aria-controls="password"
                                            aria-selected="true">
                                            <i class="ri-settings-line"></i> Password Update</button>
                                    </li>

                                    <li>
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#profile" role="tab" aria-controls="profile"
                                            aria-selected="true">
                                            <i class="ri-settings-line"></i> Profile</button>
                                    </li>





                                </ul>
                            </div>
                            <div class="col-xxl-9 col-xl-8">
                                <div class="setting-box">
                                    <div class="tab-content" id="v-pills-tabContent">


                                        <div class="tab-pane fade show active" id="password" role="tabpanel"
                                            aria-labelledby="password-tab">
                                            <div class="password-details">
                                                <div class="row gy-md-4 gy-2 align-items-center">

                                                    <form method="post" action="{{ route('admin.profile.store') }}"
                                                        class="row g-3">

                                                        @csrf

                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif


                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>Current Password :</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">

                                                            <input type="password" name="current_password"
                                                                placeholder="Enter your current password" />
                                                        </div>

                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>New Password :</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">
                                                            <input type="password" name="new_password"
                                                                placeholder="Enter your new password" />


                                                        </div>


                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>Confirm Password :</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">
                                                            <input type="password" name="new_password_confirmation"
                                                                placeholder="Enter your confirm password" />
                                                        </div>

                                                        <button class="btn save-button" type="submit">Update</button>




                                                    </form>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade show" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="profile-details">
                                                <div class="row gy-md-4 gy-2 align-items-center">

                                                    <form method="post"
                                                        action="{{ route('admin.profile.update', auth()->user()->id) }}"
                                                        class="row g-3" enctype="multipart/form-data">
                                                        @csrf

                                                        @method('PUT')

                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif


                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>Upload Photo :</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">

                                                            <div>

                                                                <img id="avatarPreview"
                                                                    src="{{ asset(auth()->user()->avatar) }}"
                                                                    alt="Image Preview"
                                                                    style="height: 100px; width: 100px; border-radius: 50px; margin-top: 10px; {{ auth()->user()->avatar ? '' : 'display: none;' }}">

                                                            </div>



                                                            <input type="file" name="avatar" id="avatarInput">

                                                        </div>

                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>Name</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">
                                                            <input type="text" name="name" id="fullnameInput"
                                                                value="{{ auth()->user()->name }}" required>


                                                        </div>


                                                        <div class="col-xxl-3 col-xl-4 col-md-3">
                                                            <h5>Email</h5>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-8 col-md-9">
                                                            <input type="email" name="email" id="inputEmail4"
                                                                value="{{ auth()->user()->email }}" required>
                                                        </div>

                                                        <button class="btn save-button" type="submit">Update</button>




                                                    </form>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                        <button class="btn save-button" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#avatarInput').change(function(e) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#avatarPreview').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endpush
