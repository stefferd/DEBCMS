<div class="container-fluid list">
    <h1 class="sub-header">Pagina's</h1>
    <ul class="breadcrumb">
        <li><a href="{$url}admin/" title="Home">Home</a></li>
        <li><a href="{$url}admin/pages/" title="Pagina's">Pagina's</a></li>
    </ul>
    {if $message ne null}
        <div class="alert alert-{$messageType}">{$message}</div>
    {/if}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>Technische titel</th>
                    <th>Status</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            {foreach $pages as $page}
                <tr>
                    <td>{$page->title}</td>
                    <td>{$page->technical}</td>
                    <td>
                        {if $page->state == 1 && $page->active == 0}
                            Prototype
                        {elseif $page->state == 1 && $page->active == 1}
                            Gepubliceerd
                        {/if}
                    </td>
                    <td><a href="{$url}admin/?module=pages&action=edit&item={$page->id}&subitem={$page->state}" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{$url}admin/?module=pages&action=delete&item={$page->id}&subitem={$page->state}" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a href="{$url}admin/pages/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div>