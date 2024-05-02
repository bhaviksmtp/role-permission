@extends('layouts.app')

@section('content')
<div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->

    @if($message = Session::get('error'))
        <div class="alert alert-danger">
        {{ $message }}
        </div>
    @endif

    <!-- Login Form -->
    <form action="{{route('check_login')}}" method="post">
        @csrf
        <input type="email" id="email" class="fadeIn second" name="email" placeholder="email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <div class="text-center">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    </div>

    </div>
{{-- </div> --}}
@endsection
