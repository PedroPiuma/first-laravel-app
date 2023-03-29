@extends('layouts.layout-main')   
@section('conteudo')

<div class="container mt-5 w-25">

    {{-- erros --}}
    @if ($errors -> any())
        <div class="alert alert-danger p-2 mb-2">
            @foreach ($errors->all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{route('submissao')}}" method="post">

        @csrf

        <div class="mb-3">
            <label for="text_produto" class="form-label">Produto:</label>
            <input type="text" name="text_produto" id="text_produto" class="form-control">
        </div>
        <div class="mb-3">
            <label for="text_marca" class="form-label">Marca:</label>
            <input type="text" name="text_marca" id="text_marca" class="form-control" >
        </div>
        <div class="text-center">
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection