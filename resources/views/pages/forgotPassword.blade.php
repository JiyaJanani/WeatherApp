@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Forgot Password</div>
                        <div class="panel-body">
                            <form  role="form" method="POST" action="getmail">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{csrf_field()}}
                                <label for="email" class="col-sm-4 control-label" id="email" type="email" class="form-control" name="email" value="" required autofocus >E-Mail Address</label>
                                <div class="col-sm-6">{{ Form::text('email', '', ['class' => 'form-control', 'require', 'placeholder' => 'example@email.com']) }}
                                        <span class="help-block">
                                        </span>
                                </div>                          
                                <div class="form-group margin-bottom-2">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
                