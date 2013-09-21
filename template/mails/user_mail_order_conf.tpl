{include file="header.tpl" title=foo}

MAIL A L'UTILISATEUR

{* les infos utilisateurs *}
<h2> utilisateur </h2>
{$user_information.fname}<br>
{$user_information.name}<br>
{$user_information.email}<br>


{* l'adresse *}
<h2> adresse </h2>
{$user_adresse.adresse1}<br>
{$user_adresse.adresse2}<br>
{$user_adresse.cp}<br>
{$user_adresse.ville}<br>
{$user_adresse.pays}<br>


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
            id : {$opts.o_id}   <br>
            qte : {$opts.o_qte}   <br>
            prix : {$opts.o_prix}   <br>   
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
