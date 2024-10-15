{include 'header.tpl'}
{include 'nav.tpl'}

<section>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Material</th>
            <th>Proveedor</th>
        </tr>
                    
        {foreach from=$materiales item=$material}
            <tr>
            {* tal vez el id no sea necesario mostrar???? *}
                <td> {$material->id_material} </td> 
                <td> {$material->material} </td>
                <td> {$material->proveedor} </td>
                <td>
                    <a href="editarMaterial/{$material->id_material}" type="submit" class="btn btn-success">Editar</a>
                    <a href="eliminarMaterial/{$material->id_material}" type="submit" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        {/foreach}
    </table>
</section>



{include 'footer.tpl'}