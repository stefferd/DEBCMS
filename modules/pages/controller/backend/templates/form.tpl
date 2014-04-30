<div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            {if $page ne null}
                <h2 class="sub-header">Pagina wijzigen</h2>
            {else}
                <h2 class="sub-header">Pagina toevoegen</h2>
            {/if}
            <ul class="breadcrumb">
                <li><a href="{$url}admin/" title="Home">Home</a></li>
                <li><a href="{$url}admin/?module=pages" title="Pagina's">Pagina's</a></li>
                {if $page ne null}
                    <li><a href="{$url}admin/?module=pages&action=edit&item={$page->id}&subitem={$page->state}" title="Bewerken">Bewerken</a></li>
                {else}
                    <li><a href="{$url}admin/?module=pages&action=add" title="Toevoegen">Toevoegen</a></li>
                {/if}
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {if $page ne null}
                        <form role="form" action="{$url}admin/?module=pages&action=update&item={$page->id}&subitem={$page->state}" method="POST">
                    {else }
                        <form role="form" action="{$url}admin/pages/save/" method="POST">
                    {/if}
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#text" data-toggle="tab">Tekst</a></li>
                            <li><a href="#settings" data-toggle="tab">Instellingen</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="text">
                                <h3 class="sub-header">Inhoud</h3>
                                <div class="form-group">
                                    <label for="content">Tekst</label>
                                    <textarea class="form-control mceEditor" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina" onkeyup="updatePreview(this, '.preview');">{if $page ne null}{$page->content|escape}{/if}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="form-group">
                                    <label for="title">Titel</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Titel" {if $page ne null}value="{$page->title}"{/if} />
                                </div>
                                <div class="form-group">
                                    <label for="technical">Technische titel</label>
                                    <input type="text" class="form-control" id="technical" name="technical" placeholder="Techische titel" {if $page ne null}value="{$page->technical}"{/if} />
                                    <span class="help-block">Deze titel mag geen spaties en andere speciale tekens bevatten, enige uitzonderingen zijn '-' & '_'</span>
                                </div>
                                <div class="form-group">
                                    <label for="type">Soort</label>
                                    <select class="form-control" id="type" name="type" placeholder="Pagina type">
                                        <option value="PAGE">Pagina</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="state">Status</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="1" {if $page ne null and ($page->state == 1 and $page->active == 0)}selected{/if}>Prototype</option>
                                        <option value="2" {if $page ne null and ($page->state == 1 and $page->active == 1)}selected{/if}>Published</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Meta tags</label>
                                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Trefwoorden website" {if $page ne null}value="{$page->tags}"{/if} />
                                    <span class="help-block">Maximaal 12 per pagina en scheid de tags met een comma.</span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Meta omschrijving</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Beschrijf de inhoud van de pagina">{if $page ne null}{$page->description}{/if}</textarea>
                                    <span class="help-block">Maximaal 160 tekens</span>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(function () {
                                $('#myTab a:last').tab('show')
                            });
                        </script>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Preview</h3>
                    <div class="preview">
                        {if $page ne null}
                            {$page->content}
                        {else}
                            <p>Nog geen preview beschikbaar.</p>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>