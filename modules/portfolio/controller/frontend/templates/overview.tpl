{$index = 1}
{foreach $items as $item}
    {$currentPictures = $picturesByItems[($index -1)]}
    {if $index mod 2 == 0 && $index != 1}
        <div class="row portfolio">
            <div class="col-md-5">
                {foreach $currentPictures as $picture}
                    <a href="{$url}/upload/images/{$picture->url}" data-lightbox="{$index}" title="{$picture->title|escape}">
                        <img class="pull-left" src="{$url}upload/images/{$picture->url}" height="100" alt="{$picture->title|escape}" />
                    </a>
                {/foreach}
            </div>
            <div class="col-md-7">
                <h3>{$item->title|escape}</h3>
                <p>{$item->content}</p>
            </div>
        </div>
    {else}
        <div class="row portfolio">
            <div class="col-md-7">
                <h3>{$item->title|escape}</h3>
                <p>{$item->content}</p>
            </div>
            <div class="col-md-5">
                {foreach $currentPictures as $picture}
                    <a href="{$url}/upload/images/{$picture->url}" data-lightbox="{$index}" title="{$picture->title|escape}">
                        <img class="pull-left" src="{$url}upload/images/{$picture->url}" height="100" alt="{$picture->title|escape}" />
                    </a>
                {/foreach}
            </div>
        </div>
    {/if}
    {$index = $index + 1}
{foreachelse}
    <p>Nog geen items in het portfolio.</p>
{/foreach}