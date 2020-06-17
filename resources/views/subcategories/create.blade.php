@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
	                <li><a href="{{ route('subcategories.index') }}">sub categories</a></li>
	                <li class="active">create sub categories</li>
	            </ol>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Create Sub Category</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <form class="form-horizontal" action="{{ route('subcategories.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Name sub category" value="" required>
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
                                                            <input type="checkbox" checked="" name="status">
                                                                <span class="lever"></span>
                                                            Active
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">Category</label>
                                                <div class="col-sm-9">
                                                    <select name="category_id" id="" class="form-control">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10">
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