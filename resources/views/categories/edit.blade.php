@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
	                <li><a href="{{ route('categories.index') }}">categories</a></li>
	                <li class="active">edit category</li>
	            </ol>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Edit Category</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <form class="form-horizontal" action="{{ route('categories.update', $category->id) }}" method="post">
                                            @method('put')
                                            @csrf
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Name Surname" value="{{ $category->name }}">
                                                    </div>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">status</label>
                                                <div class="col-sm-9">
                                                    <div class="switch">
                                                        <label>
                                                            Inactive
                                                            <input type="checkbox"
                                                                @if ($category->status == '1')
                                                                checked
                                                                @endif
                                                                name="status">
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
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required="">
                                                    </div>
                                                </div>
                                            </div>

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