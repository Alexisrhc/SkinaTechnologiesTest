@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
	                <li><a href="{{ route('users.index') }}">users</a></li>
	                <li class="active">{{ $user[0]->name }}</li>
	            </ol>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card col-red">
                        <div class="profile-header col-pink">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area col-red">
                                <img src="{{ asset('template/image/user.png') }}" style="width: 100px;">
                            </div>
                            <div class="content-area">
                                <h3>{{ Str::upper($user[0]->name) }}</h3>
                                <p>{{ Str::upper($user[0]->role) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs tab-col-pink" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Profile</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ $user[0]->name }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ $user[0]->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection