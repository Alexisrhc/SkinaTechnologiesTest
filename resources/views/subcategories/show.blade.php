@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
	                <li><a href="{{ route('subcategories.index') }}">subcategory</a></li>
	                <li class="active">sub category ({{ Str::upper($subCategory->name) }})</li>
	            </ol>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs tab-col-pink" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">sub category</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ Str::upper($subCategory->name) }}</span>
                                                    {{-- <p></p> --}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ Str::upper($subCategory->status) }}</span>
                                                    {{-- <p></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs tab-col-pink" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">category</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ Str::upper($subCategory->category->name) }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-9" style="margin-top: 7px;">
                                                    <span>{{ Str::upper($subCategory->category->status) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <x-table
                    title="products"
                    :resource="$subCategory->products"
                    :headers="['name','action']"
                    :items="['name']"
                    >
                    </x-table>
                </div> --}}
            </div>
        </div>
    </section>
@endsection