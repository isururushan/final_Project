@extends('layouts.asdiApp')
@section('title')
    Profile

@stop
@section('pageHeader')
    Profile
@stop
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('asdi')}}">Home</a></li>
        <li class="breadcrumb-item active"> Profile </li>
    </ul>
@stop
@section('content')
<!-- Asdi password change -->
    <section class="no-padding-top">
    <div class="row">
            <div class="col-lg-4 ">

            <div class="card card-profile ">
                <div style="background-image: url(../template/img/);" class="card-header"></div>
                <div class="card-body text-center">
                    <img src="{{asset('Profilepic/'.Auth::user()->avatar)}}" class="card-profile-img" >
                    <h4 class="mb-3 text-gray-light">{{Auth::user()->first_name}}</h4>
                    <p class="mb-4">Asdi Since {{Auth::user()->created_at}} </p>
                    <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#changepasswordModal">
                        <span class="fa fa-pencil"></span>
                        Change Password
                    </button>
                </div>
            </div>
        </div>
     </div>
<!-- Asdi profile update -->
            <div class="col-lg-8  col-md-8">
                    <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Update Profile</h4>
                    </div>
                    <div class="form  ">
                        <div class="content">
                            <form class="text-left form-validate"  method="POST" action="{{route('asdi/profile/updateProfile')}}">
                                <div class="card-body">
                                @csrf
                                <div class="row">
                                {{-------------------First Name---------------------------------------}}
                                    <div class="form-group-material col-md-6 col-sm-12 col-lg-6">
                                        <label>First Name</label>
                                        <input id="register-firstname" type="text"  required data-msg="Please enter your first name" class="form-control"  name="firstname" value="{{ Auth::user()->first_name  }}"  autofocus>
                                        <small class="help-block-none"></small>
                                    </div>
                                    {{-------------------Last Name---------------------------------------}}
                                    <div class="form-group-material col-md-6 col-sm-12 col-lg-6">
                                        <label  >Last Name</label>
                                        <input id="register-lastname" type="text"  required data-msg="Please enter your last name" class="form-control"  name="lastname" value="{{ Auth::user()->last_name  }}"  autofocus>
                                        <small class="help-block-none"></small>
                                    </div>
                                    {{-------------------E Mail---------------------------------------}}
                                    <div class="form-group-material col-md-6 col-sm-12 col-lg-6">
                                        <label>Email Address      </label>
                                        <input id="register-email" type="email"  data-msg="Please enter a valid email address" required class="form-control" name="email" value="{{ Auth::user()->email  }}">
                                        <small class="help-block-none"></small>
                                    </div>
                                    </div>
                                <div class="card-footer">
                                    <div class="form-group text-center">
                                        <button id="register" data-toggle="confirmation" data-title="Update Profile?" type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="modal fade" id="changepasswordModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-primary" ><i class="fa fa-lock"></i> &nbsp;&nbsp;Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="text-left form-validate"  method="POST" action="{{route('asdi/profile/updatePassword')}}">
                    <div class="modal-body">

                        <input type="hidden"  value="{{csrf_token()}}" name="_token">
                        <div class="input-group">
                            <input type="password" class="form-control pt-3" name="old_pw" id="old_pw" placeholder="Enter Old Password" required>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control pt-3" name="new_pw" id="new_pw" placeholder="Enter New Password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary"  id="update_password"  name="update_password" >
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('javaScripts')
    <script>
        /**
         * notifications
         * getting error from session
         * getting success from session
         * if exists show using bootstrap notify
         */
        @if(\Session::has('success'))

            Messenger.options=
            {
                extraClasses:"messenger-fixed messenger-on-top  messenger-on-right",
                theme:"flat",
                messageDefaults:{showCloseButton:!0}
            },
            Messenger().post({message:"{{Session::get('success')}}",
                type:"success"});
        @elseif(\Session::has('error'))

            Messenger.options=
            {
                extraClasses:"messenger-fixed messenger-on-top  messenger-on-right",
                theme:"flat",
                messageDefaults:{showCloseButton:!0}
            },
            Messenger().post({message:"{{Session::get('error')}}",
                type:"error"});
        @endif
        </script>
@stop



