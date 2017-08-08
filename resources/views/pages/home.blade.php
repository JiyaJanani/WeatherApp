@extends('layouts.default')
<!-- @extends('app') -->
@section('content')


{!! Form::open(array('action' => 'HOMEController@getWeatherByCityName', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('city', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Get Weather!', 
      array('class'=>'btn btn-primary')) !!}
</div> 

 
{!! Form::close() !!}
   <ul> @if( isset($contents) )
        @foreach($contents as $content)
           <li> {{ $content['dt'] }}  </li>
        @endforeach
    @endif
</ul>


@endsection