<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Notas desde base de datos</h1>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        @foreach ($notas as $nota)
            <tr>
                <td>{{$nota -> nombre}}</td>
                <td>{{$nota -> descripcion}}</td>
                <td><a href="{{('notas/'.$nota->id)}}"><i class="bi bi-clipboard">Detalles</i></a></td>
                <td><a href="{{ route('notas.editar', $nota) }}" class="btn btn-warning btn-sm"> Editar </a></td>
                <td><form action="{{ route('notas.eliminar', $nota) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <form action="{{ route('notas.crear') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" name="nombre" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
        <input type="text" name="descripcion" placeholder="Descripción de la nota" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">
        Crear nueva nota
        </button>
    </form>
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    <input
        type="text"
        name="nombre"
        value="{{ old('nombre') }}"
        class="form-control mb-2"
        placeholder="Nombre de la nota"
        autofocus >
    @endif
    
    @error('nombre') <div class="alert alert-danger"> No olvides rellenar el nombre </div> @enderror


</body>
</html>