


@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-6">
                        {{ Form::text('Name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter your name here']) }}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name" class="col-sm-4 control-label">First Name</label>
                        <div class="col-sm-6"> {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name']) !!} 
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-6">{{form::text('last_name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Your lastname'])}}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-sm-4 control-label" id="email" type="email" class="form-control" name="email" value="" required autofocus >E-Mail Address</label>
                        <div class="col-sm-6">{{ form::text('email', null, ['class' => 'form-control', 'require', 'placeholder' => 'example@email.com']) }}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-6">{{form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'password'])}}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-sm-4 control-label">Confirm Password</label>
                        <div class="col-sm-6">{{form::text('confirm_password', null, ['class' => 'form-control', 'required', 'placeholder' => 'confirm_password'])}}
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                            </div>
                        </div><br>
                    <div class="form-group margin-bottom-2">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('footer_scripts')

    <script src='https://www.google.com/recaptcha/api.js'></script>

@endsection