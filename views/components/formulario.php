<form id="formulario" class="bg--mediumBlue text--white text-left p-4 rounded-lg gap-2">
    <div class="grid--2cols gap-2">
        <div>
            <p class="mb-1">Nombre del solicitante</p>
            <input type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Nombre">
        </div>
        <div>
            <p class="mb-1">Correo electronico</p>
            <input type="email" class="rounded-sm border-0 p-2 w-100" placeholder="ejemplo@emial.com">
        </div>
    </div>
    <div>
        <p class="mb-1">Teléfono</p>
        <input type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Telefono">
    </div>
    <div>
        <p class="mb-1">Razón social</p>
        <input type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Rázon social">
    </div>
    <div>
        <label for="exampleTextarea">Mensaje</label>
        <textarea class="form-control p-2 w-100" id="mensaje" rows="4" placeholder="Escribe aquí tu mensaje..."></textarea>
    </div>
    <div>
        <a href="#" class="btn btn--yellow px-5 py-3 m-2">
            Enviar <i class="fa-solid fa-arrow-right mx-1"></i>
        </a>
    </div>
</form>