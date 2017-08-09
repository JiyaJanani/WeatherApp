


@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                <form method="post" action="store_user">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     {{csrf_field()}}
                        <label for="email" class="col-sm-4 control-label" id="email" type="email" class="form-control" name="email" value="" required autofocus >E-Mail Address</label>
                        <div class="col-sm-6">{{ Form::text('email', '', ['class' => 'form-control', 'require', 'placeholder' => 'example@email.com']) }}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     {{csrf_field()}}
                        <label for="password" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-6">{{Form::text('password', '', ['class' => 'form-control', 'required', 'placeholder' => 'password'])}}
                                <span class="help-block">
                                </span>
                        </div>
                    </div>
                    <div class="form-group margin-bottom-2">
                        <div class="col-sm-6 col-sm-offset-4">
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

@section('footer_scripts')

    <script src='https://www.google.com/recaptcha/api.js'></script>

@endsection