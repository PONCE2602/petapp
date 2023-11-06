<x-app-layout>
    <x-primary-button>
        <a href="{{ route('mascotas.create') }}">Crear Mascota</a>
    </x-primary-button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id }}</td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->fecha_nacimiento }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
