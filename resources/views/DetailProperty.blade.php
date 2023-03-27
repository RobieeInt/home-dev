@extends('layouts.landing')

@section('content')
    <livewire:components.dev.header />
    <livewire:components.dev.property-detail :detailProperties="$detailProperties" />
    <livewire:components.dev.credit-simulator />
    <livewire:components.dev.footer />
@endsection

@section('js')
@endsection
