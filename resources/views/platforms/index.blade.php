@extends('layouts.default')


@section('content')
    <section class="container m-auto w-[90%] py-8">
        <div class="flex justify-between">
            <h1 class="text-2xl">Plataformas</h1>
            <button id="btn_add" class="btn">Agregar</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Link</th>
                    <th>Usuario</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($platforms as $platform)
                    <tr>
                        <td>{{ $platform->name }}</td>
                        <td>
                            <a href="{{ $platform->url }}" target="_blank" class="btn btn-square">
                                <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                        </td>
                        <td>{{ $platform->user }}</td>
                        <td class="flex justify-end">
                            <button class="btn_edit btn btn-sm" data-id="update_platform_modal_{{ $platform->id }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button href="/" class="btn btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    {{-- Platform modal --}}
                    @include('platforms.partials.modal-edit')
                @endforeach
            </tbody>
        </table>
    </section>
    {{-- Platform modal --}}
    @include('platforms.partials.modal-add')
@endsection
@section('scripts')
    @vite('resources/js/platforms/index.js')
@endsection
