{include 'header.tpl'}
{include 'nav.tpl'}

<section>
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



{include 'footer.tpl'}