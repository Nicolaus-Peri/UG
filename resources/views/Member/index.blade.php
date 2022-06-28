@extends('layouts.backend-member.app')
@section('title',  'Data Member')

@section('content')
    @include('Member.html')
@endsection
@push('script')
    @include('Member.script')
@endpush