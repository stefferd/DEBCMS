<div class="container-fluid list">
    <h1 class="sub-header">Snippets</h1>
    <ul class="breadcrumb">
        <li><a href="{$url}admin/" title="Home">Home</a></li>
        <li><a href="{$url}admin/snippets/" title="Snippets">Snippets</a></li>
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
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            {foreach $snippets as $snippet}
                <tr>
                    <td>{$snippet->title}</td>
                    <td>{$snippet->technical}</td>
                    <td><a href="{$url}admin/?module=snippets&action=edit&item={$snippet->id}" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{$url}admin/?module=snippets&action=delete&item={$snippet->id}" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a href="{$url}admin/snippets/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div>