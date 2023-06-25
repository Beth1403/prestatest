<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Module Template</title>
   
</head>

<body>


<pre>{$mymodule_text|var_dump}</pre>
{if isset($errors) && $errors}
    <div class="alert alert-danger">
        {foreach $errors as $error}
            <p>{$error}</p>
        {/foreach}
    </div>
{/if}

{if isset($confirmations) && $confirmations}
    <div class="alert alert-success">
        {foreach $confirmations as $confirmation}
            <p>{$confirmation}</p>
        {/foreach}
    </div>
{/if}

    <main>
        {if isset($mymodule_text) && $mymodule_text}
            <div class="mymodule-content">
                {$mymodule_text}
            </div>
        {/if}
    </main>
    
</body>

</html>