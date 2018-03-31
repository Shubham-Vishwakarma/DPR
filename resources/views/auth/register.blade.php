@extends('layouts.app')

@section('content')
    <html style="background-color: #9FA8DA">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #C5CAE9;"><img src="/img/logo-head.png" alt="PMAY1" style="max-height: 150px;"><br>
                        <span style="float: left; display: inline-block; margin-left: 1.2em; font-size: 1.5em;">Register</span>
                        <div align="right"><font color="red" size="3"> * </font>indicates mandatory fields</div>
                    </div>


                    <div class="panel-body" style="background-color: #7986CB; color: #ffffff;">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('license') ? ' has-error' : '' }}">
                                <label for="license" class="col-md-4 control-label">License Number <font color="red" size="3"> * </font></label>

                                <div class="col-md-6">
                                    <input id="license" type="text" maxlength="12" size="10" pattern="^[A-Z]{5}[0-9]{4}[A-Z]{1}$" class="form-control" name="license" value="{{ old('license') }}" required autofocus>

                                    @if ($errors->has('license'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('license') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address <font color="red" size="3"> * </font></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Phone <font color="red" size="3"> * </font></label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" maxlength="10" size="10" pattern="[789][0-9]{9}" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password <font color="red" size="3"> * </font></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password <font color="red" size="3"> * </font></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" required='required' name="terms" {{ old('remember') ? 'checked' : '' }}> &nbsp; Accept Terms and Conditions
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
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
