@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<ol class="breadcrumb">
	                <li><a href="{{ route('home') }}">Home</a></li>
	                <li class="active">categories</li>
	            </ol>
            </div>

            @if(Session::has('success'))
                <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <x-table
                    title="categories"
                    :resource="$categories"
                    :items="['name','status']"
                    :headers="['name','status','action']"
                    >
                    {{ $categories->links() }}
                    </x-table>
                </div>
            </div>
        </div>
    </section>
@endsection