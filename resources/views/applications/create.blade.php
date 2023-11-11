@extends('layouts.default')


@section('content')
    <section class="container m-auto w-[90%] py-8">
        <a href="{{ route('applications.index') }}">&larr; Volver</a>
        <h1 class="text-2xl">Crear aplicacion</h1>
        <form action={{ route('applications.store') }} method="POST" class="mt-8 max-w-lg m-auto">
            @csrf
            <div class="mb-3">
                <label for="" class="label">Título</label>
                <input type="text" name="title" class="input input-bordered w-full" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="label">Link</label>
                <input type="text" name="link" class="input input-bordered w-full" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="label">Salario</label>
                <div class="flex gap-2">
                    <select name="currency" class="select select-bordered">
                        <option value="1">PEN</option>
                        <option value="2">USD</option>
                    </select>
                    <input type="number" name="salary" class="input input-bordered w-full" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="label">Modalidad</label>
                <select name="modality" class="select select-bordered w-full">
                    <option value="1">Remoto</option>
                    <option value="2">Presencial</option>
                    <option value="3">Hibrido</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="label">Estado</label>
                <select name="status" class="select select-bordered w-full">
                    <option value="1">Enviado</option>
                    <option value="2">Entrevista</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="label">Comentarios</label>
                <textarea name="comments" class="textarea textarea-bordered w-full" placeholder=""></textarea>
            </div>
            <button class="btn btn-primary">Guardar</button>
        </form>

    </section>
@endsection
