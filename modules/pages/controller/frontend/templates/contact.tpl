<div class="row">
    <div class="col-md-8">
        {if $messageSend}
            <p>{$contactSendSnippet}</p>
        {/if}
        <form role="form" action="{$url}?module=contact" method="POST">
            <div class="form-group">
                <label for="naam">Naam</label>
                <input type="text" class="form-control" id="naam" name="naam" placeholder="Uw naam">
            </div>

            <div class="form-group">
                <label for="telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" placeholder="Uw telefoonnummer">
            </div>

            <div class="form-group">
                <label for="email">E-mailadres *</label>
                <input type="email" required="required" class="form-control" id="email" name="email" placeholder="Uw e-mailadres">
            </div>

            <div class="form-group">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" class="form-control" id="onderwerp" name="onderwerp" placeholder="Onderwerp van het bericht">
            </div>

            <div class="form-group">
                <label for="bericht">Uw bericht *</label>
                <textarea required="required" class="form-control" id="bericht" name="bericht" placeholder="Uw bericht" rows="6"></textarea>
            </div>
            <div class="help-block">Velden met een * zijn verplicht</div>
            <button type="submit" class="btn btn-primary">Verzenden</button>
        </form>
    </div>
    <div class="col-md-4">
        <address>
            {$contactSnippet}
        </address>
    </div>
</div>