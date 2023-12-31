@extends('layouts.default')

@section('title', 'User Title')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush

@section('sidebar')
    <div>
        <nav>
            Sidebar de Usuário
        </nav>
    </div>
@endsection

@section('content')
    <h1>User</h1>

    {{ $user->name }} <br>
    {{ $user->email }} <br>
    
    <h3>Posts do User</h3>
    {{ $user->posts }} <br>

    <br>
    {{ date('d/m/y') }}

    @php
        $total = 100;
        $array = [];
        $boolean = false;
    @endphp

    <br><br>
    @empty($array)
        O array está vazio jovem!
    @endempty

    <br><br>
    @if($total > 100)
        Muito caro
    @elseif($total > 80)
        tá ok
    @else
        tá barato
    @endif

    <br><br>
    If =
    @if($boolean)
        Falso
    @endif

    <br><br>
    Unless =
    @unless($boolean)
        Falso
    @endunless

    @push('scripts')
        <script scr="{{ asset('js/user.js') }}"></script>
    @endpush
@endsection