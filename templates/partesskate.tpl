<table class="table">
  <thead>
    <th>Imagen</th>
    <th>Producto</th>
    <th>Marca</th>
    <th>Precio</th>
  </thead>
  <tbody>
  {foreach $partes as $parte}
    <tr id="{$parte['4']}">
      <td> <img src="{$parte[0]}"/> </td>
      <td>{$parte[1]}</td>
      <td>{$parte[2]}</td>
      <td>{$parte[3]}</td>
    </tr>
  {/foreach}
  </tbody>
</table>