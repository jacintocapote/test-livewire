@extends('layouts.app')

@section('content')

    <style>
        @media(prefers-color-scheme: dark) {}
    </style>

<livewire:image-gallery :instance="$car" />
    
@endsection