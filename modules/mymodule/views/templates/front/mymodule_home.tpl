{* Assigner le chemin du fichier CSS à une variable *}
{assign var="mymoduleCssPath" value=$module_dir|cat:"views/css/mymodule.css"}

<head>
    <link rel="stylesheet" href="{$mymoduleCssPath}">

</head>



{* Affichage des erreurs s'il y en a *}
{if isset($errors) && $errors}
    <div class="alert alert-danger">
        {foreach $errors as $error}
            <p>{$error}</p>
        {/foreach}
    </div>
{/if}

{* Affichage du "paramètres mis à jour" si succès lors de l'enregistrement des nouvelles saisies *}
{if isset($confirmations) && $confirmations}
    <div class="alert alert-success">
        {foreach $confirmations as $confirmation}
            <p>{$confirmation}</p>
        {/foreach}
    </div>
{/if}

{* Affichage du texte selon le mode connecté ou non sur le front *}
{if isset($mymodule_text) && $mymodule_text}
    <div class="mymodule-content">
        {$mymodule_text}
    </div>
{/if}