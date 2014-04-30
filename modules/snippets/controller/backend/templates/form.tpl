<div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            {if $snippet ne null}
                <h2 class="sub-header">Snippet wijzigen</h2>
            {else}
                <h2 class="sub-header">Snippet toevoegen</h2>
            {/if}
            <ul class="breadcrumb">
                <li><a href="{$url}admin/" title="Home">Home</a></li>
                <li><a href="{$url}admin/snippets/" title="Snippets">Snippets</a></li>
                {if $snippet ne null}
                    <li><a href="{$url}admin/?module=snippets&actionedit&item={$snippet->id}/" title="Bewerken">Bewerken</a></li>
                {else}
                    <li><a href="{$url}admin/?module=snippets&action=add" title="Toevoegen">Toevoegen</a></li>
                {/if}
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {if $snippet ne null}
                        <form role="form" action="{$url}admin/?module=snippets&action=update&item={$snippet->id}" method="POST">
                    {else }
                        <form role="form" action="{$url}admin/snippets/save/" method="POST">
                    {/if}
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titel" {if $snippet ne null}value="{$snippet->title}"{/if} />
                        </div>
                        <div class="form-group">
                            <label for="technical">Technische titel</label>
                            <input type="text" class="form-control" id="technical" name="technical" placeholder="Techische titel" {if $snippet ne null}value="{$snippet->technical}"{/if} />
                            <span class="help-block">Deze titel mag geen spaties en andere speciale tekens bevatten, enige uitzonderingen zijn '-' & '_'</span>
                        </div>
                        <div class="form-group">
                            <label for="content">Tekst</label>
                            <textarea class="form-control mceEditor" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina" onkeyup="updatePreview(this, '.preview');">{if $snippet ne null}{$snippet->content|escape}{/if}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Preview</h3>
                    <div class="preview">
                        {if $snippet ne null}
                            {$snippet->content}
                        {else}
                            <p>Nog geen preview beschikbaar.</p>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>