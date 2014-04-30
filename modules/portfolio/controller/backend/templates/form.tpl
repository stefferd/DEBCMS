<div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            {if $item ne null}
                <h2 class="sub-header">Item wijzigen</h2>
            {else}
                <h2 class="sub-header">Item toevoegen</h2>
            {/if}
            {if $message ne ''}
                <div class="alert-danger">{$message}</div>
            {/if}
            <ul class="breadcrumb">
                <li><a href="{$url}admin/" title="Home">Home</a></li>
                <li><a href="{$url}admin/?module=portfolio" title="Portfolio">Portfolio</a></li>
                {if $item ne null}
                    <li><a href="{$url}admin/?module=portfolio&action=edit&item={$item->id}" title="Bewerken">Bewerken</a></li>
                {else}
                    <li><a href="{$url}admin/?module=portfolio&action=add" title="Toevoegen">Toevoegen</a></li>
                {/if}
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {if $item ne null}
                        <form role="form" action="{$url}admin/?module=portfolio&action=update&item={$item->id}" method="POST">
                    {else }
                        <form role="form" action="{$url}admin/?module=portfolio&action=save" method="POST">
                    {/if}
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titel" {if $item ne null}value="{$item->title}"{/if} />
                        </div>
                        <div class="form-group">
                            <label for="content">Tekst</label>
                            <textarea class="form-control mceEditor" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina">{if $item ne null}{$item->content|escape}{/if}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {if $item ne null}
                        <form method="post" enctype="multipart/form-data" action="{$url}admin/?module=portfolio&action=add-image&item={$item->id}">
                            <div class="form-group">
                                <label for="picture">Afbeelding</label>
                                <input type="file" name="url" id="picture" placeholder="Selecteer uw afbeelding" />
                            </div>
                            <div class="form-group">
                                <label for="title">Omschrijving</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Plaats hier uw omschrijving van de afbeelding" />
                                <span class="help-block">Dit is belangrijk voor uw google ranking, dus vergeet deze niet.</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</button>
                            </div>
                        </form>
                        <h3>Afbeeldingen</h3>
                        <div>
                            {foreach $pictures as $picture}
                                <div class="pull-left" style="margin-right: 5px; margin-bottom: 5px;">
                                    <img src="{$url}/upload/images/{$picture->url}" alt="{$picture->title}" height="100" />
                                    <a style="clear:both; display: block; text-align: center;" href="{$url}/admin/?module=portfolio&action=delete-image&item={$picture->id}" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a>
                                </div>
                            {foreachelse}
                                <p>Er zijn nog geen afbeeldingen toegevoegd</p>
                            {/foreach}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>