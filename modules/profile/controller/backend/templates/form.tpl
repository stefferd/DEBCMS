<div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            <h2 class="sub-header">Beheerder toevoegen</h2>
            <ul class="breadcrumb">
                <li><a href="{$siteUrl}admin/" title="Home">Home</a></li>
                <li><a href="{$siteUrl}admin/?module=administrators" title="Beheerders">Beheerders</a></li>
                {if $administrator ne null}
                    <li><a href="{$siteUrl}admin/?module=administrators&action=update&item={$administrator->id}&subitem={$administrator->created}">Bewerken</a></li>
                {else }
                    <li><a href="{$siteUrl}admin/?module=administrators&action=add">Toevoegen</a></li>
                {/if}
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Gegevens</h3>
                    {$action = 'admin/administrator/save'}
                    {if $administrator ne null}
                        <form role="form" action="{$siteUrl}admin/?module=administrators&action=update&item={$administrator->id}&subitem={$administrator->created}" method="POST">
                    {else }
                        <form role="form" action="{$siteUrl}admin/?module=administrators&action=save" method="POST">
                    {/if}
                        <div class="form-group">
                            <label for="firstname">Voornaam</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Voornaam" {if $administrator ne null}value="{$administrator->name}"{/if} />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Achternaam" {if $administrator ne null}value="{$administrator->lastname}"{/if} />
                        </div>
                        <div class="form-group">
                            <label for="emailaddress">E-mailadres</label>
                            <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="naam@domein.nl" {if $administrator ne null}value="{$administrator->emailaddress}"{/if} />
                        </div>
                        {if $administrator == null}
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Selecteer uw wachtwoord" />
                            </div>
                            <div class="form-group">
                                <label for="repeat_password">Repeat password</label>
                                <input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="Herhaal uw gekozen wachtwoord" />
                            </div>
                        {/if}
                        <div class="form-group">
                            <label for="password">Geboortedatum</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Vul uw geboortedatum" {if $administrator ne null}value="{$administrator->birthday|date_format:'d-m-Y'}"{/if} />
                        </div>
                        {if $administrator ne null}
                            <div class="form-group">
                                <label>Laatste keer gewijzigd</label>
                                <i>{$administrator->updated|date_format:'d-m-Y H:i'}</i>
                            </div>
                            <div class="form-group">
                                <label>Aangemaakt op</label>
                                <i>{$administrator->created|date_format:'d-m-Y H:i'}</i>
                            </div>
                        {/if}
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Rechten</h3>
                    <p>Er zijn nog geen rechten geconfigureerd.</p>
                </div>
            </div>
        </div>
    </div>
</div>