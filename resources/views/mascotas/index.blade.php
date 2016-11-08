<table class="table table-bordered">
    <tr>
        <td>Raza</td>
        <td>Caracter</td>
        <td>Peso</td>
        <td>Temperatura</td>
    </tr>
    @foreach($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->caracter }}</td>
            <td>{{ $mascota->peso }}</td>
            <td>{{ $mascota->temperatura }}</td>
            <td>
                edit
                |
                delete
            </td>
        </tr>

    @endforeach
</table>
{{link_to_route('mascotas.create','agregar nueva mascota',null,['class'=>'btn btn-primary'])}}