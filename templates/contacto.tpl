  <article>
  <section>
    <div class="form">
      <form id="subir_contacto" >

        <div>
         <label >Nombre</label>
         <input type="text" class="text-box" id="nombre" name="nombre" placeholder="Ingrese su nombre">
        </div>

        <div>
          <label >Apellido</label>
          <input type="text" class="text-box" id="apellido" name="apellido" placeholder="Ingrese su apellido">
        </div>

        <div>
          <label >¿De que ciudad es? </label>
          <input type="text" class="text-box" id="ciudad" name="ciudad" placeholder="Ingrese su ciudades">
        </div>

        <div>
          <label >¿Tiene lugar para andar?</label>
          <input type="text" class="text-box" id="lugar" name="lugar" placeholder="lugar de andar">
        </div>

        <div>
          <label >¿Que lugar recomienda?</label>
          <input type="text" class="text-box" id="recomendacion" name="recomendacion" placeholder="spot">
        </div>

        <a Href="" class="button"  id="btn-contacto">Enviar</a>

      </form>
    </div>

      <table class="table">
        <thead>
            <th>nombre</th>
            <th>apellido</th>
            <th>ciudad de origen</th>
            <th>¿posee lugar?</th>
            <th>lugar recomendado</th>
        </thead>
        <tbody>
          {foreach $contactos as $contacto}
            <tr>
              <td data-th="Nombre" >{$contacto['nombre']}</td>
              <td data-th="Apellido" >{$contacto['apellido']}</td>
              <td data-th="Ciudad" >{$contacto['ciudad']}</td>
              <td data-th="Lugar" >{$contacto['lugar']}</td>
              <td data-th="Recomendacion" >{$contacto['recomendacion']}</td>
            </tr>
          {/foreach}
        </tbody>
      </table>
     
  </section>
</article>