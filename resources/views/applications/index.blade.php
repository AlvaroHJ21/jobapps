@extends('layouts.default')


@section('content')
    <section class="container m-auto w-[90%] py-8">
        <div class="flex justify-between">
            <h1 class="text-2xl">Aplicaciones</h1>
            <a href="{{ route('applications.create') }}" class="btn">Agregar</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Link</th>
                    <th>Salario</th>
                    <th>Modalidad</th>
                    <th>Ubicación</th>
                    <th>Plataforma</th>
                    <th>Estado</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->title }}</td>
                        <td>
                            <a href="{{ $application->link }}" target="_blank" class="btn btn-sm btn-square">
                                <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                        </td>
                        <td class="whitespace-nowrap">{{ $application->currency == '1' ? 'S/' : "$" }}
                            {{ $application->salary }}
                        </td>
                        <td>
                            <x-modality modality="{{ $application->modality }}" />
                        </td>
                        <td>{{ $application->location }}</td>
                        <td>{{ $application->platform?->name }}</td>
                        <td>{{ $application->status }}</td>

                        <td class="flex justify-end gap-1">
                            <button class="btn btn-square btn-sm"
                                onclick="modal_description_{{ $application->id }}.showModal()">
                                <i class="fa fa-eye"></i>
                            </button>
                            <a href="{{ route('applications.edit', $application->id) }}" class="btn btn-square btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/" class="btn btn-square btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    @include('applications.partials.modal-description')
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
