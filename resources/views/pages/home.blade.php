@extends('layouts.default')
<!-- @extends('app') -->
@section('content')


{!! Form::open(array('action' => 'HOMEController@getWeatherByCityName', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Place') !!}
    {!! Form::text('city', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your place')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Get Weather!', 
      array('class'=>'btn btn-primary')) !!}
</div> 

 

{!! Form::close() !!}
   <ul> @if( isset($content) )
            <li>Place : {{ $content['name']}}</li>
            <li>Geo-cords : [{{ $content['coord']['lat']}} {{$content['coord']['lon']}}]</li>
            <li>Temperature : {{ $content['main']['temp']}}</li>
            <li>Pressure : {{ $content['main']['pressure']}}</li>
            <li>Humidity : {{ $content['main']['humidity']}}</li>
            <li>Minimum temperature : {{ $content['main']['temp_min']}}</li>
            <li>Maximum temperature : {{ $content['main']['temp_max']}}</li>
            <li>weather condition : {{ $content['weather'][0]['main']}} , {{ $content['weather'][0]['description']}}</li>
    @endif
</ul>


@endsection