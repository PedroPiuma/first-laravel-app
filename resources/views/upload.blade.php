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

    <form action="{{route('upload_submissao')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <input type="file" name="ficheiro" class="form-control">
        </div>
        <div class="text-center">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>

    </form>
</div>
@endsection