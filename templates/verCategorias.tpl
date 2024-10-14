{include 'header.tpl'}
{include 'nav.tpl'}

<section>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Terminada</th>
            <th>Prioridad</th>
            <th></th>
        </tr>
                    
        {foreach from=$materiales item=$material}
            <tr>
                <td> {$material->id} </td>
                <td> {$material->nombre} </td>
                <td> {$material->prioridad} </td>
                <td>
                    <a href="editarMaterial/{$material->id}" type="submit" class="btn btn-success">Editar</a>
                    <a href="eliminarMaterial/{$material->id}" type="submit" class="btn btn-danger">Eliminar</a></td>
            </tr>
        {/foreach}
    </table>
</section>



{include 'footer.tpl'}