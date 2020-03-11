<style>
    /* Section produits */
.produits{

}
.produits>table{
    width: 100%;
}
.produits>table .idp{
    width:50px;
}
.produits>table .image{
    width:75px;
}
.produits>table .image img{
    width: 100%;
}
.produits>table .titre {
    vertical-align: top;
    font-size: 14pt;   
}
.produits>table .titre h3{
    padding: 0;
    margin: 0;
    font-size: 17pt;
    text-decoration: underline;
    margin-bottom: 2;
}    
.produits>table .panier{
    width:100px;
}
.produits>table .panier>*{
    width: 100%;
}
.produits>table .image,.produits>table .idp,.produits>table .prix,.produits>table .panier{
    text-align: center;
}
</style>
<div class="produits">
    <h2>Liste des produits</h2>
    <table>
        <thead>
            <tr class="header">
                <th class="idp">idp</th>
                <th class="image">image</th>
                <th class="titre">titre</th>
                <th class="prix">prix</th>
                <th class="panier">panier</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="5"><hr/>   </td></tr>
            <tr>
                <td class="idp">0</td>
                <td class="image"><img src="img/produits/0.png" alt=""></td>
                <td class="titre"><h3>produit 0</h3>Description courte</td>
                <td class="prix">0.00&euro;</td>
                <td class="panier">
                    <button type="button" class="btn btn-primary">Voir</button>
                    <button type="button" class="btn btn-success">Ajouter</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>