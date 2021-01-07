<x-app-layout>

    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** CREAR ROL **</h1>
        <form action="/rol" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <input id="descripcion" name="descripcion" class="form-control"  placeholder="Descripción del Rol a asociar" tabindex="2"></input>
            </div>
            <div align="center">
                <a href="/td" class="btn btn-lg  mx-3 my-3 btn-info" tabindex="4">Cancelar</a>
                <button type="submit" class="btn btn-lg mx-3 my-3 btn-success" tabindex="3">Guardar</button>
            </div>
        </form>
    </div>

</x-app-layout>
