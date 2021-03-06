@extends('quarx-frontend::layout.master')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h1 class="text-center">Login</h1>

            <form method="POST" action="/login">
                {!! csrf_field() !!}
                <div class="col-md-12 form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="col-md-12 form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="col-md-12 form-group">
                    <label>
                        Remember Me <input type="checkbox" name="remember">
                    </label>
                </div>
                <div class="col-md-12 form-group">
                    <a class="btn btn-default pull-left" href="/password/reset">Forgot Password</a>

                    <div class="btn-group pull-right" role="group">
                        <a class="btn btn-info" href="/register"><span class="fa fa-gear"></span> Register</a>
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@stop

