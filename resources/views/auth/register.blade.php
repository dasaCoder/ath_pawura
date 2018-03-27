@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Telephone</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone_home') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Home</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="telephone_home" value="{{ old('telephone_home') }}" required autofocus>

                                @if ($errors->has('telephone_home'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone_home') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('org_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">org_name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="org_name" value="{{ old('org_name') }}" required autofocus>

                                @if ($errors->has('org_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('org_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('org_address') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">org_address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="org_address" value="{{ old('org_address') }}" required autofocus>

                                @if ($errors->has('org_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('org_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('org_email') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">org_email</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="org_email" value="{{ old('org_email') }}" required autofocus>

                                @if ($errors->has('org_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('org_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('org_tele') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">org_tele</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="org_tele" value="{{ old('org_tele') }}" required autofocus>

                                @if ($errors->has('org_tele'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('org_tele') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('org_address') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">org_address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="org_address" value="{{ old('org_address') }}" required autofocus>

                                @if ($errors->has('org_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('org_address') }}</strong>
                                    </span>
                                @endif
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
@endsection
