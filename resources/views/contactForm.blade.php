@extends('layouts.app')

@section('title', 'Contact Form')

@section('content')
    @include('components.contact-form')
@endsection

@section('scripts')
    @include('components.recaptcha-script')
@endsection
