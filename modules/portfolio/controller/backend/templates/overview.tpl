<div class="container-fluid list">
    <h1 class="sub-header">Portfolio</h1>
    <ul class="breadcrumb">
        <li><a href="{$url}admin/" title="Home">Home</a></li>
        <li><a href="{$url}admin/?module=portfolio" title="Portfolio">Portfolio</a></li>
    </ul>
    {if $message ne null}
        <div class="alert alert-{$messageType}">{$message}</div>
    {/if}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titel</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            {foreach $items as $item}
                <tr>
                    <td>{$item->title}</td>
                    <td><a href="{$url}admin/?module=portfolio&action=edit&item={$item->id}" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{$url}admin/?module=portfolio&action=delete&item={$item->id}" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a href="{$url}admin/?module=portfolio&action=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div>