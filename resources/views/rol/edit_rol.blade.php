<x-app-layout>

    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">EDITAR TIPO DE DISPOSITIVO
            #{{ $rol->id }}</h1>
        <form action="/rol/{{ $rol->id }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <input id="descripcion" name="descripcion" class="form-control" value="{{ $rol->descripcion }} " tabindex="1"></input>
            </div>
            <div align="center">
                <a href="/rol" class="btn btn-lg  mx-3 my-3 btn-info" onclick="myFunction()" tabindex="3">Cancelar</a>
                <button type="submit" class="btn btn-lg mx-3 my-3 btn-success" tabindex="2">Guardar</button>
            </div>
        </form>
    </div>

    @section('js')
        <script>
            function myFunction() {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Se ha cancelado la edicion',
                    showConfirmButton: false,
                    timer: 5000
                })
            }
        </script>
    @endsection

</x-app-layout>
