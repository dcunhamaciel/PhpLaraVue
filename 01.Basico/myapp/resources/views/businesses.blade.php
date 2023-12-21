@extends('layouts.default')

@section('sidebar')
@endsection

@section('content')
    <h5>Adicionar Businesses (model)</h5>
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
            <br>
        @endforeach    
        <br>
    @endif

    <form action="{{ route('businesses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        @error('name')
            {{ $message }}
            <br>
        @enderror

        <input type="text" name="email" value="{{ old('email') }}">
        <br>
        @error('email')
            {{ $message }}
            <br>
        @enderror

        <input type="text" name="address" value="{{ old('address') }}">
        <br>
        @error('address')
            {{ $message }}
            <br>
        @enderror
        <br>

        <input type="file" name="logo">
        <br>

        <button type="submit">Salvar</button>
    </form>
    
    <br>
    <hr>
    <br>

    @foreach($businesses as $business)
        {{ $business->name }} ({{ $business->email }})
        <br>
    @endforeach

    {{ $businesses->links() }}
@endsection