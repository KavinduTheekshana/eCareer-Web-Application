@extends('layouts.main')

@section('content')




<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">E-Career</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Qualification</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                        data-feather="plus-square"></i></span></span>Add Qualification</h4>
    </div>
    <!-- /Title -->

                <div id="app">
                    <addqualification></addqualification>
                </div>


</div>
<!-- /Container -->



@endsection