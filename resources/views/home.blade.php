@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">USERS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ count($users) }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">label</i>
                        </div>
                        <div class="content">
                            <div class="text">CATEGORIES</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ count($categories) }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">label_outline</i>
                        </div>
                        <div class="content">
                            <div class="text">SUB-CATEGORIES</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ count($sub_categories) }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">markunread_mailbox</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUCTS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ count($products) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <x-table
                    title="users"
                    :resource="$users"
                    :headers="['name', 'email', 'role','action']"
                    :items="['name', 'email', 'role']"
                    />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <x-table
                    title="categories"
                    :resource="$categories"
                    :headers="['name', 'status','action']"
                    :items="['name', 'status']"
                    />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <x-table
                    title="subcategories"
                    :resource="$sub_categories"
                    :headers="['name', 'quantity products','status','action']"
                    :items="['name', 'quantity_products','status']"
                    />
                </div>
            </div>
        </div>
    </section>
@endsection
