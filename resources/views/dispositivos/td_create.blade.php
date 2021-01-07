<x-app-layout>

    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">CREAR TIPO DE DISPOSITIVO</h1>
        <form action="/td" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre del típo de dispositivo" tabindex="1">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" aria-label="With textarea" placeholder="Descripción del típo de dispositivo" tabindex="2"></textarea>
            </div>
            <div align="center">
                <a href="/td" class="btn btn-lg  mx-3 my-3 btn-info" tabindex="4">Cancelar</a>
                <button type="submit" class="btn btn-lg mx-3 my-3 btn-success" tabindex="3">Guardar</button>
            </div>
        </form>
    </div>

</x-app-layout>
