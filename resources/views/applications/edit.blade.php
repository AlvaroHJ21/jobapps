@extends('layouts.default')


@section('content')
    <section class="container m-auto w-[90%] py-8">
        <a href="{{ route('applications.index') }}">&larr; Volver</a>
        <h1 class="text-2xl">Editar aplicación: {{ $application->title }}</h1>
        <form action={{ route('applications.update', $application->id) }} method="POST" class="max-w-lg m-auto mt-8">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="" class="label">Título</label>
                <input type="text" name="title" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->title }}">
            </div>
            <div class="mb-3">
                <label for="" class="label">Link</label>
                <input type="text" name="link" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->link }}">
            </div>
            <div class="mb-3">
                <label for="" class="label">Salario</label>
                <div class="flex gap-2">
                    <select name="currency" class="select select-bordered" value="{{ $application->currency }}">
                        <option value="1">PEN</option>
                        <option value="2">USD</option>
                    </select>
                    <input type="number" name="salary" class="w-full input input-bordered" placeholder=""
                        value="{{ $application->salary }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="label">Modalidad</label>
                <select name="modality" class="w-full select select-bordered">
                    <option value="1" {{ $application->modality == '1' ? 'selected' : '' }}>Remoto</option>
                    <option value="2" {{ $application->modality == '2' ? 'selected' : '' }}>Presencial</option>
                    <option value="3" {{ $application->modality == '3' ? 'selected' : '' }}>Hibrido</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="label">Estado</label>
                <select name="status" class="w-full select select-bordered" value="{{ $application->status }}">
                    <option value="1" {{ $application->status == '1' ? 'selected' : '' }}>Enviado</option>
                    <option value="2" {{ $application->status == '2' ? 'selected' : '' }}>Entrevista</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="label">Comentarios</label>
                <textarea name="comments" class="w-full textarea textarea-bordered" placeholder="">{{ $application->comments }}</textarea>
            </div>
            <button class="btn btn-primary">Guardar</button>
        </form>

    </section>
@endsection
