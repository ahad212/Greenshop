@extends('welcome')


@section('content')
<style>
    body{
        margin-top:40px;
    }
    .any{
        height:600px;
        width:100%;
        display:flex;
        align-items:center;
        justify-content:center;
    }
</style>

<x-alert shit="<h1>Ahad</h1>"/>



<div class="any">You have no recently viewed item.</div>
@endsection