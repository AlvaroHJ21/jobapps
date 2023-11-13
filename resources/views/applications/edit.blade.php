@extends('layouts.default')


@section('content')
    <section class="container m-auto w-[90%] py-8">
        <h1 class="text-2xl">Editar aplicación: {{ $application->title }}</h1>
        <form action={{ route('applications.update', $application->id) }} method="POST"
            class="grid max-w-lg grid-cols-12 gap-3 m-auto mt-8">
            @method('PUT')
            @csrf
            <div class="col-span-full">
                <label for="" class="label">Título</label>
                <input type="text" name="title" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->title }}">
            </div>
            <div class="col-span-full">
                <label for="" class="label">Link</label>
                <input type="text" name="link" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->link }}">
            </div>
            <div class=" col-span-full">
                <label for="company" class="label">Empresa</label>
                <input type="text" name="company" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->company }}">
            </div>
            <div class="col-span-6">
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
            <div class="col-span-6">
                <label for="" class="label">Modalidad</label>
                <select name="modality" class="w-full select select-bordered">
                    <option value="1" {{ $application->modality == '1' ? 'selected' : '' }}>Remoto</option>
                    <option value="2" {{ $application->modality == '2' ? 'selected' : '' }}>Presencial</option>
                    <option value="3" {{ $application->modality == '3' ? 'selected' : '' }}>Hibrido</option>
                </select>
            </div>
            <div class=" col-span-full">
                <label for="location" class="label">Ubicación</label>
                <input type="text" name="location" class="w-full input input-bordered" placeholder=""
                    value="{{ $application->location }}">
            </div>
            <div class="col-span-6">
                <label for="" class="label">Plataforma</label>
                <select name="platform_id" class="w-full select select-bordered">
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}"
                            {{ $application->platform_id == $platform->id ? 'selected' : '' }}>
                            {{ $platform->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-6">
                <label for="" class="label">Estado</label>
                <select name="status" class="w-full select select-bordered" value="{{ $application->status }}">
                    <option value="1" {{ $application->status == '1' ? 'selected' : '' }}>Enviado</option>
                    <option value="2" {{ $application->status == '2' ? 'selected' : '' }}>Entrevista</option>
                </select>
            </div>
            <div class="col-span-full">
                <label for="" class="label">Comentarios</label>
                <textarea name="comments" class="w-full textarea textarea-bordered" placeholder="">{{ $application->comments }}</textarea>
            </div>
            <div class="col-span-full">
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form>

    </section>
@endsection
