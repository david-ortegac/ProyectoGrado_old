<x-app-layout>
    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** USUARIOS **</h1>

        <table class="table table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ROL</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($user as $u)
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->rol->descripcion }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>
                            <a href="/user/{{ $u->id }}/edit/" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
