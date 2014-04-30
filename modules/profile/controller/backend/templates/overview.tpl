<div class="container-fluid list">
    <h1 class="sub-header">Beheerders</h1>
    <ul class="breadcrumb">
        <li><a href="{$url}admin/" title="Home">Home</a></li>
        <li><a href="{$url}admin/?module=administrators" title="Beheerders">Beheerders</a></li>
    </ul>
    {if $message ne null}
        <div class="alert alert-{$messageType}">{$message}</div>
    {/if}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Emailadres</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            {foreach $administrators as $administrator}
                <tr>
                    <td>{$administrator->name} {$administrator->lastname}</td>
                    <td>{$administrator->emailaddress}</td>
                    <td><a href="{$url}admin/?module=administrators&action=edit&item={$administrator->id}&subitem={$administrator->created}/" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{$url}admin/?module=administrators&action=delete&item={$administrator->id}&subitem={$administrator->created}/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a href="{$url}admin/?module=administrators&action=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div>