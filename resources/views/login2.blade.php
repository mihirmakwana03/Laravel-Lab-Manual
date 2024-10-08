@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <h2>Login Page</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>

        <button type="submit">Login</button>
    </form>
@endsection
