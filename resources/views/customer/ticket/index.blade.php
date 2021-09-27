@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Ticket'])


@section('content')

    <!--====== DASHBOARD STARTS HERE ======-->
    <div class="container">
        <div class="main-body mt-5 mb-5">
            <!-- Breadcrumb -->
            @include('partials._breadCrumb',['page'=>'Ticket'])
            <!-- /Breadcrumb -->

             {{-- INCLUDE Ticket TABLE --}}
            @include('customer.includes.ticketTable')
            {{-- INCLUDE Ticket TABLE --}}
        </div>
    </div>

    <!--====== DASHBOARD ENDS HERE ======-->
    </div>

@endsection

