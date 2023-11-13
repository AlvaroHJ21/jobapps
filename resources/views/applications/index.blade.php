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
                    <th>Empresa</th>
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
                        <td>
                            <a href="{{ $application->link }}" class="hover:underline">{{ $application->title }}</a>
                        </td>
                        <td>{{ $application->company }}</td>
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
                            <div class="dropdown dropdown-end">
                                <label tabindex="0" class="m-1 btn">
                                    <i class="fas fa-ellipsis-vertical"></i>
                                </label>
                                <ul tabindex="0"
                                    class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">

                                    <li>
                                        <a href="{{ $application->link }}" target="_blank">
                                            <i class="fas fa-arrow-up-right-from-square"></i> Ir a la aplicación
                                        </a>
                                    </li>

                                    <li>
                                        <button onclick="modal_description_{{ $application->id }}.showModal()">
                                            <i class="fa fa-eye"></i> Descripción
                                        </button>
                                    </li>

                                    <li>
                                        <a href="{{ route('applications.edit', $application->id) }}">
                                            <i class="fa fa-edit"></i> Editar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" class="text-error">
                                            <i class="fa fa-trash"></i> Eliminar
                                        </a>
                                    </li>
                                </ul>
                            </div>



                        </td>
                    </tr>

                    @include('applications.partials.modal-description')
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
