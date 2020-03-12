<style>
    .produit label{
        font-size:20pt;
    }
    .produit h2, .produit h3{
        margin-left:15%;
        padding:0;
    }
    .produit .h2{
        text-decoration:underline;
    }
    .produit .content{
        /* margin-left:15%; */
        vertical-align:top;
        width:60%
    }
    .produit .image{
        padding-top:20px;
    }
    .produit .btn{
        width : 130px;
        font-size:22pt;
    }
</style>
<?php
if(isset($_GET['idp'])){
    $result=$db->getProduit($_GET['idp']);
    if($result!=NULL){
    ?>
<div class="produit">
    <h2>Edition d'un produit > id : 0</h2>
    <div class="button-container">
        <hr/>
    </div>
    <div class="image inline-block">
        <img src="img/<?= $result['imgurl'] ?>" alt="">
        <br/>
        <button class="btn">Ajouter</button>
    </div>
    <div class="content inline-block">
        <h3>Titre :</h3>
        <br/>
        <h2><?= $result['titre']?></h2>
        <br/>
        <h3>Description :</h3>
        <br/>
        <h2>
        <?= $result['description']?></h2>
        <br/>
        <h3>Prix</h3>
        <br/>
        <h2><?= $result['prix']?>&euro;</h2>
    </div>
    
</div>
<?php 
    }
    else include('vues/404.php');
}
else include('vues/404.php'); ?>