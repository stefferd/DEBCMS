<div class="container-fluid list">
    <h1 class="sub-header">Instellingen</h1>
    <ul class="breadcrumb">
        <li><a href="{$url}admin/" title="Home">Home</a></li>
        <li><a href="{$url}admin/settings/" title="Instellingen">Instellingen</a></li>
    </ul>
    {if $message ne null}
        <div class="alert alert-{$messageType}">{$message}</div>
    {/if}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Module</th>
                    <th><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        Pagina's
                    </th>
                    <th><a href="{$url}modules/pages/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Beheerders
                    </th>
                    <th><a href="{$url}modules/profile/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Snippets
                    </th>
                    <th><a href="{$url}modules/snippets/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Portfolio
                    </th>
                    <th><a href="{$url}modules/portfolio/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
            </tbody>
        </table>
    </div>
</div>