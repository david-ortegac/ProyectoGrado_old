<x-app-layout>
    <div class="container">
        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">**EDITAR DATOS DE
            {{ strtoupper($user->name) }} **
        </h1>
        <div class="card">
            <div class="card-body">
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put']) !!}
                <div class="form-group mb-3">
                    {!! Form::label('name', 'Rol:', ['class' => 'form-label']) !!}
                    {!! Form::select('rols_id', $rol, $user->rols_id, ['class' => 'form-control']) !!}

                    @error('rols_id')
                        <span>{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group mb-3">
                    {!! Form::label('name', 'Nombres:', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('email', 'Correo Electronico:', ['class' => 'form-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <a href="{{ route('user.index') }}" class="btn btn-info">Volver</a>

                    {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-success', 'form-control']) !!}

                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @section('js')

        @if (session('edited') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    position: 'center',
                    icon: 'success',
                    title: 'El Usuario ha sido editado',
                    showConfirmButton: false,
                    timer: 1500
                })

            </script>
        @endif

    @endsection

</x-app-layout>
