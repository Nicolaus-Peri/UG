@extends('layouts.backend-jadwal.create_jadwal')
@section('title', 'Create Jadwal')

@section('content')
    @include('Jadwal.create')
@endsection
@push('script')
    @include('Jadwal.script')
@endpush
