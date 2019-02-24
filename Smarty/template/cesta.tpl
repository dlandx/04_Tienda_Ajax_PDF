<div class="content_cesta">
    
    <div class="cesta">
        <h1>Cesta</h1>

        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Unidades</th>
                        <th>Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>

                <tbody>
                    {assign var=total value=0}
                    {assign var=result value='<tr>'} {* Creamos una variable para concatenar los resultados <td> }
                    {* Recorrer el array con los productos seleccionados *}                    
                    {foreach name=pos item=producto from=$cestaProductos}
                        {foreach key=key item=value from=$producto}
                            {assign var=result value=$result|cat:"<td>"|cat:{$value}}
                            {* Si la posición es 2 que salte de linea *}
                            {if ($key == 2)}
                                {assign var=result value=$result|cat:"</td><td><button onclick='JaxonRespuestaAjax.deleteProducto(\""|cat:{$producto[1]}|cat:"\")' id='delete'></button></td></tr>"}
                                {* Total - sumar los precios de los productos = $producto[2] *}
                                {assign var="total" value=$total+$producto[2]}
                            {/if} 
                        {/foreach}
                    {/foreach}
                    {* Resultado de la variable concatenda *}
                    {$result|cat:"<tr class='tb_footer'><td colspan='2'>TOTAL</td><td>"|cat:{$total}|cat:"</td><td></td></tr>"} 
                </tbody>
            </table>
        </div>
            
        <div class="btn_cesta">
            <button type='submit' name='cesta[pagar]' value='pagar' id="pay"></button>
            <!--<button type='submit' name='cesta[vaciar]' value='vaciar' id="clear"></button>-->
            <button onclick='JaxonRespuestaAjax.clearCesta()' id="clear"></button>
        </div>
            
    </div>
    
</div>