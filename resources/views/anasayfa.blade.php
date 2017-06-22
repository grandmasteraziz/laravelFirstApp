@extends('template.master')

    @section('content')
        <br>
        <h2>Merhaba    </h2>
        <p>    deneme </p>
        <h2></h2>

        @foreach($ilceler as $ilce )

            <li> {{ $ilce }} </li>

        @endforeach

    @endsection
