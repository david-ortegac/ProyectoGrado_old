<x-app-layout>
    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** ROLES **</h1>

        <table class="table table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($rol as $r)
                <tr>
                    <th scope="row">{{ $r->id }}</th>
                    <td>{{ $r->descripcion }}</td>
                    <td>
                        <a href="/rol/{{ $r->id }}/edit/" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    @section('js')

        @if (session('edited') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    position: 'center',
                    icon: 'success',
                    title: 'El Rol ha sido editado',
                    showConfirmButton: false,
                    timer: 1500
                })

            </script>
        @endif

        @if (session('created') == 'ok')
            <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'El Rol ha sido creado',
                    showConfirmButton: false,
                    timer: 1500
                })

            </script>
        @endif

    @endsection

</x-app-layout>
