{include file="header.tpl" title=foo}

NOTIFICATION A l'ADMIN

{* les infos utilisateurs *}
<h2> utilisateur </h2>
{foreach key=key item=detail from=$user_information}
    <b>{$key} </b>: {$detail}<br />
{/foreach} 

{* l'adresse *}
<h2> adresse </h2>
{foreach key=key item=adresses from=$user_adresse}
    {foreach key=key item=adresse from=$adresses}
       {$adresse}<br />
    {/foreach} 
{/foreach} 


{foreach name=outer item=produit from=$items}

    <h2> produits </h2>
    {foreach key=key item=item from=$produit}
        {if !is_array($produit.$key)}
            <b>{$key} </b>: {$item}<br />
        {/if}
    {/foreach}

    {* les options *}
    {if isset($produit.options)}
        <h2> options </h2>
        {foreach key=key item=opts from=$produit.options}
            {foreach key=key item=opt from=$opts}
                <b>{$key} </b>: {$opt}<br />
            {/foreach}     
        {/foreach}
    {/if}

    {* les details *}
    {if isset($produit.contact)}
        <h2> details </h2>
        {foreach key=key item=detail from=$produit.contact}
            <b>{$key} </b>: {$detail}<br />
        {/foreach}  
    {/if}

    {* les fichiers *}
    {if isset($produit.files)}
        <h2> fichiers </h2>
        {foreach key=key item=files from=$produit.files}
            {foreach key=key item=file from=$files}
                <b>{$key} </b>: {$file}<br />
            {/foreach}     
        {/foreach}    
    {/if}

    <hr />
{/foreach}

{include file="footer.tpl"}
