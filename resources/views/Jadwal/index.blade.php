@extends('layouts.backend-jadwal.app')
@section('title', 'Jadwal')

@section('content')
    @include('Jadwal.html')
@endsection
@push('script')
    @include('Jadwal.script')
@endpush
