{include 'header.tpl'}
{include 'nav.tpl'}

<section>


{if {$error}}
    <p>{$error}</p>
{/if}
    <table class="table .table-sm  table-striped  table-hover table-bordered border-success">
           
            <th  >Material</th>
            <th >Proveedor</th>
            <th >Acción</th> 
        </tr>
                    
        {foreach from=$materiales item=$material}
            <tr >
                <td > {$material->material} </td>
                <td> {$material->proveedor} </td>
                <td>
                    <a href="editarMaterial/{$material->id_material}" type="submit" class="btn btn-success">Editar</a>
                    <a href="eliminarMaterial/{$material->id_material}" type="submit" class="btn btn-success">Eliminar</a>
                </td>
            </tr>
        {/foreach}
    </table>
</section>

<section>
        <h3>Agregar un nevo material</h3>
        <a href="agregarMaterial" type="submit" class="btn btn-success">Agregar</a>
</section>


{include 'footer.tpl'}