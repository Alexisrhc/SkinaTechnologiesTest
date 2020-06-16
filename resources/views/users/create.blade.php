@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
	                <li><a href="{{ route('users.index') }}">users</a></li>
	                <li class="active">create user</li>
	            </ol>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Create user profile</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <form class="form-horizontal" action="{{ route('users.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Name Surname" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-3 control-label">Role</label>
                                                <div class="col-sm-9">
                                                    <div class="btn-group bootstrap-select form-control show-tick">
                                                    	<div class="dropdown-menu open">
                                                    		<ul class="dropdown-menu inner" role="menu">
                                                    			<li data-original-index="0" class="selected">
                                                    				<a tabindex="0" class="" style="" data-tokens="null">
                                                    					<span class="text">-- Please select --</span>
                                                    					<span class="glyphicon glyphicon-ok check-mark"></span>
                                                    				</a>
                                                    			</li>
                                                    			<li data-original-index="1">
                                                    				<a tabindex="0" class="" style="" data-tokens="null">
                                                    					<span class="text">administrador</span>
                                                    					<span class="glyphicon glyphicon-ok check-mark"></span>
                                                    				</a>
                                                    			</li>
                                                    			<li data-original-index="2">
                                                    				<a tabindex="0" class="" style="" data-tokens="null">
                                                    					<span class="text">basico</span>
                                                    					<span class="glyphicon glyphicon-ok check-mark"></span>
                                                    				</a>
                                                    			</li>
                                                    		</ul>
                                                    	</div>
                                                    	<select class="form-control show-tick" tabindex="-98" name="role">
                                                    		<option value="">-- Please select --</option>
					                                        <option value="admin">administrador</option>
					                                        <option value="basic">basico</option>
					                                    </select>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="password" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="password_confirm" placeholder="Password (Confirm)" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">status</label>
                                                <div class="col-sm-9">
		                                            <div class="switch">
					                                    <label>
					                                    	Inactive
					                                    	<input type="checkbox" checked="" name="status">
					                                    		<span class="lever"></span>
					                                    	Active
					                                    </label>
					                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="change_password_settings">
                                        <form class="form-horizontal">


                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
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