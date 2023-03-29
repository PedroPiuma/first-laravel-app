{{-- <div>
    <h1>Teste de view</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi deleniti
        nulla dignissimos maiores expedita, nam voluptas dolore explicabo incidunt
        iusto adipisci corporis tempore labore facere sunt eum mollitia ipsam laboriosam?</p>
    <a href="{{ url('/frm') }}">Login</a>

    <p>
        {{$nome . " " . $sobrenome}}
    </p> --}}

    {{-- <h1>HOME</h1>
    <hr> --}}

    {{-- <a href="{{url('/frm')}}">Formulário</a> --}}
    {{-- <a href="{{route('login')}}">Formulário</a>

    <div>
        @if ($mostrar)
           <p style="color: red">{{$frase}}</p>
        @else   
           <p style="color: gray">Nada para ver</p>
        @endif
    </div>
    
    <div>
        @foreach ($nomes as $nome)
            <p>Nome: </p>
            <p>{{$nome}}</p>
            <hr>
        @endforeach        
    </div> --}}
@extends('layouts.layout-main')   
@section('conteudo')
<div>
    <h1>HOME</h1>
</div>
@endsection