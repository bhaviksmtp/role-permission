@extends('layouts.app')

@section('content')
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Login Form -->
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" placeholder="user name">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="email">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <input type="password" name="password" placeholder="password">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="confirm password">
            </div>
            <div class="text-center">
                <input type="submit" value="Register">
            </div>
        </form>
  
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        </div>  
    </div>
</div>
@endsection
