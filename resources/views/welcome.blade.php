@extends('template.main')

@section('content')
    @include('partials.addGender')
    @include('partials.addMember')
    @include('partials.tableGender')
    @include('partials.tableMember')
@endsection