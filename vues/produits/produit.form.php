<style>
    .form-produit label{
        font-size:20pt;
    }
    .form-produit h2, .form-produit h3{
        margin-left:15%;
    }
    .form-produit .h2{
        text-decoration:underline;
    }
    .form-produit .content{
        margin-left:15%;
        vertical-align:top;
        width:60%
    }
    .form-produit .content,.form-produit .image{
        display:inline-block;
    }
    .form-produit input,.form-produit textarea{
        font-size:15pt;
    }
    .form-produit textarea{
        width:70%;
        min-height:50px;
    }
    .form-produit .prix{
        margin-right:10px;
    }
    .form-produit .image{
        padding-top:20px;
    }
    .form-produit .button-container
    {
        text-align:right;
        padding-left:15%;
        padding-right:150px;
    }
</style>
<div class="form-produit">
    <h2>Edition d'un produit > id : 0</h2>
    <div class="button-container">
        <hr/>
    </div>
    <div class="content">
        <label for="titre">Titre :</label>
        <br/>
        <input type="text" name="titre">
        <br/>
        <label for="description">Description :</label>
        <br/>
        <textarea name="description" placeholder="512 car. max"></textarea>
        <br/>
        <div class="inline-block prix">
            <label for="prix">Prix :</label>
            <br/>
            <input type="number" name="prix"  class="form-control" min="0.01" max="" step="0.01">
        </div>
        <div class="inline-block">
            <label for="image">Image :</label>
            <br/>
            <input type="file" name="image">
        </div>
       
    </div>
    <div class="image">
        <img src="img/produits/0.png" alt="">
    </div>
    
    <div class="button-container">
        <hr/>
        <input type="reset" value="effacer" class="btn btn-error">
        <input type="submit" value="Enregistrer" class="btn btn-success">
    </div>
</div>
