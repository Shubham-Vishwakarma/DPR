@extends('layouts.app')

@section('content')

<html style="background-color: #9FA8DA">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #C5CAE9;"><img src="/img/logo-head.png" alt="PMAY1" style="max-height: 150px;"><br>
                    <span style="float: left; display: inline-block; margin-left: 1.7em; font-size: 1.5em;">Login</span>
                    <div align="right"><font color="red" size="3"> * </font>indicates mandatory fields</div>
                </div>

                <div class="panel-body" style="background-color: #7986CB; color: #ffffff;">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address <font color="red" size="3"> * </font></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password<font color="red" size="3"> * </font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="agencyType" class="col-md-4 control-label">Select Agency <font color="red" size="3"> * </font></label>

                            <div class="col-md-6">
                                <select id="agencyType" name="agencyType" class="form-control" required>
                                    <option value="nodal">Nodal Agency</option>
                                    <option value="implementing">Implementing Agency</option>
                                </select>
                                @if ($errors->has('agencyType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agencyType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection
