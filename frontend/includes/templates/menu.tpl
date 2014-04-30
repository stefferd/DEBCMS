{foreach $menuitems as $menuitem}
    <li><a href="{$url}?module={$menuitem->technical}" title="{$menuitem->title|escape}">{$menuitem->title|escape}</a></li>
{/foreach}