
<div class="container my-3">

    <div class="row">

        <div class="col-3">            
            <div class="mb-3">
                <h4 class="my-2">Titulo</h4>
                <input type="text" class="form-control" id="" placeholder="Nombre Nueva Pagina">
            </div>
            <div class="mb-3">
                <button class="btn btn-dark">Crear Nueva</button>
            </div>
        </div>

        <div class="col-9 px-4">

            <h4 class="my-2">Paginas Disponibles</h4>
            <table class="table table-bordered border-dark">
                <thead class=" table-dark table-sm">
                    <tr>
                    <th scope="col">#</th>
                    <th colspan="3">Titulo</th>
                    <th scope="col" class="text-center">editar</th>
                    <th scope="col" class="text-center">eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($paginas as $item)
                    <tr>
                        <th scope="row">{{ $item->id_pagina }}</th>
                        <td colspan="3">{{ $item->titulo }}</td>
                        <td class="text-center"><button class="btn btn-warning">editar</button></td>
                        <td class="text-center"><button class="btn btn-danger">eliminar</button></td>
                        </tr>
                    @endforeach
                    
                </tbody>
                </table>

        </div>

    </div>

</div>