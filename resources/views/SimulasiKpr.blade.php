@extends('layouts.landing')

@section('content')
    <livewire:components.dev.header />
    <livewire:components.dev.credit-simulator />

    <livewire:components.dev.featured />
    <livewire:components.dev.footer />

    {{-- <div wire:ignore id="mapRegisterTest"></div> --}}
@endsection
