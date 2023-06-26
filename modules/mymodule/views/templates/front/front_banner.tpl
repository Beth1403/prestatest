
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prestatest</title>
    <link rel="stylesheet" href="/mymodule/views/css/mymodule.css" />
   
</head>

<body>
<main>
{if $adminFrontBannerData}
    <div class="admin-front-banner">
        <p>Nombre total de produits actifs: {$adminFrontBannerData.totalActiveProducts}</p>
        <p>Prix du panier moyen: {$adminFrontBannerData.averageCartPrice}</p>
        <p>Produit le plus commandé: <a href="{$adminFrontBannerData.mostOrderedProductLink}">View</a></p>
    </div>
{else}
    <div class="admin-front-banner">
        <p>Bannière non disponible</p>
    </div>
{/if}
</main>
</body>

</html>