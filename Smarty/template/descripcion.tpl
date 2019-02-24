<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Descipcion del producto</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content c_login content_desc">
            {assign var=info value="<div id='info_desc'><h2>Descripción</h2><p>"}
            {assign var=result value="<div class='login'><div class='product'>"}
            {foreach name=pos key=key item=producto from=$infoProduct}
                {if ($key === 4)} {* Descripcion aparte...*}
                    {assign var=info value=$info|cat:{$producto}|cat:"</p></div>"}
                {else}
                    {assign var="result" value=$result|cat:"<p>"|cat:{$producto}|cat:"</p>"}
                {/if}
            {/foreach}
            {* Añadimos el BTN LogOut *}
            {assign var="result" value=$result|cat:"<form action='./productos.php' method='POST'>
                <button type='submit' name='btn' value='LogOut' class='btn_exit'></button></form>"}
                
           
            {$info|cat:$result|cat:"</div></div>"}

        </div>
    </body>
</html>