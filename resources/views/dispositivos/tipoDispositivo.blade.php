<x-app-layout>

    <div class="container mt-4">

        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">TIPO DE DISPOSITIVO</h1>

        <table class="table table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($td as $td)
                <tr>
                    <th scope="row">{{ $td->id }}</th>
                    <td>{{ $td->nombre }}</td>
                    <td>{{ $td->descripcion }}</td>
                    <td>

                        <form class="eliminarItem" action="{{ route('td.destroy', $td->id) }}"  method="POST">
                            <a href="/td/{{ $td->id }}/edit/" class="btn btn-warning ">Editar</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <div align="center">
        <button class="btn btn-primary btn-lg m-3">Volver</button>
        <a href="/td/create/" class="btn btn-success btn-lg m-3">Agregar</a>

    </div>

    @section('js')
    
        @if (session('delete') == 'ok')
            <script>
                Swal.fire(
                    'Eliminado!',
                    'El item ha sido eliminado',
                    'success'
                )
            </script>
        @endif

        @if (session('edited') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    position: 'center',
                    icon: 'success',
                    title: 'El producto ha sido editado',
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
                    title: 'El producto ha sido creado',
                    showConfirmButton: false,
                    timer: 1500
                })

            </script>
        @endif

        <script>
            $('.eliminarItem').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Desea eliminar?',
                    text: "Si lo haces no se podra revertir!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Continuar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
            });

        </script>
    @endsection

</x-app-layout>
