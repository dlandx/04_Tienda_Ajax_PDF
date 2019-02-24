{* Contenedor para listar todos los productos de la BBDD... *}
<div class="list_product">
    {* Obtenemos el valor enviado desde lógica de negocio (productos.php) para recorrer los productos *}
    {* Valor $listaProductos -> Array de array (tantos productos array indexado, producto - array asociativo) *}
    {assign var=result value=''} {* Creamos una variable para concatenar los resultados <p> *}

    {* from=array | item=elemento | key=key | name=ciclo foreach (acceder a las propiedades del foreach) *}
    {foreach name=pos item=producto from=$listaProductos}
        {* Asignar a cada BTN el cod del producto - para tener solo un FORM *}
        {assign var=result value=$result|cat:"<div class='c_list'><div class='c_btn'> 

            <button onclick='JaxonRespuestaAjax.addCesta(\""|cat:$producto->getCod()|cat:"\")'></button></div>"}
        {* Solo mostrar la columna [nombre_corto y PVP] *}
        {assign var=result value=$result|cat:"<div class='list'><div><span class='name'>"|cat:{$producto->getName_short()}|cat:"</span>"}
        {assign var=result value=$result|cat:"<span class='price'>"|cat:{$producto->getPrecio()}|cat:"</span></div>"}
        {if ($producto->getFamilia() === "ORDENA")} {* SOLO PARA ORDENADORES *}
            {assign var=result value=$result|cat:"<button type='submit' name='cesta[descripcion]' value='"|cat:$producto->getCod()|cat:"' id='desc'></button>"}
        {/if}
        {assign var=result value=$result|cat:"</div></div>"}
    {/foreach}

    {$result} {* Resultado de la variable concatenda *}
</div>


