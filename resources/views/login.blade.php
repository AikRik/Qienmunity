@extends('layouts.app')

@section('content')

        <h1>Login</h1><br>
            <div class="login">
                <form action="verify" method="GET">
                    <input type="text" name="login" placeholder="login"><br>
                    <input type="password" name="password" placeholder="wachtwoord"><br>
                    <input type="submit" name="submit" value="login">
                </form>
                test
            </div>
@endsection