<div class="row my-4">

    <div class="col-6">
        
        <div class="mb-3 mx-3">
            <h4>Titulo</h4>
            <input type="text" class="form-control" id="" placeholder="Titulo de Pagina">
        </div>

        <div class="mb-3 mx-3">
            <h4>Contenido</h4>
            <x-editor class="content"></x-editor>
        </div>

    </div>

    <div class="col-6">
        
        <div class="mb-3 mx-3">
            <h4>Galeria</h4>
            <label for="formFile" class="form-label">Agregar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <div class="row mx-3" style="max-height: 400px; overflow-y: scroll;" tabindex="0">
            
            <div class="card mx-3 my-3" style="width: 7rem;">
                <div class="row justify-content-end  mx-3 mt-2">
                    <div class="col-3">
                        <button class="btn btn-danger rounded-circle">x</button>
                    </div>
                </div>                
                <div class="card-body">
                    <img src="/img/flyingPig.png" class="card-img-top" alt="">
                </div>
            </div>

            <div class="card mx-3 my-3" style="width: 7rem;">
                <div class="row justify-content-end mx-3 mt-2">
                    <div class="col-3">
                        <button class="btn btn-danger rounded-circle">x</button>
                    </div>
                </div>                
                <div class="card-body">
                    <img src="/img/flyingPig.png" class="card-img-top" alt="">
                </div>
            </div>

            <div class="card mx-3 my-3" style="width: 7rem;">
                <div class="row justify-content-end mx-3 mt-2">
                    <div class="col-3">
                        <button class="btn btn-danger rounded-circle">x</button>
                    </div>
                </div>                
                <div class="card-body">
                    <img src="/img/flyingPig.png" class="card-img-top" alt="">
                </div>
            </div>

            <div class="card mx-3 my-3" style="width: 7rem;">
                <div class="row justify-content-end mx-3 mt-2">
                    <div class="col-3">
                        <button class="btn btn-danger rounded-circle">x</button>
                    </div>
                </div>                
                <div class="card-body">
                    <img src="/img/flyingPig.png" class="card-img-top" alt="">
                </div>
            </div>

        </div>
        
    </div>

</div>