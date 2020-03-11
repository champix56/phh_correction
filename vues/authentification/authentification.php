<style>
        .authentification{
            margin-top:50px;
            padding:20px;
            border:1px solid grey;
            border-radius:5px;
            width:400px;
            margin-left:auto;
            margin-right:auto;
            margin-bottom:50px;
            box-shadow:15px 15px 30px grey;
        }
        .authentification h2{
            text-decoration : underline;
        }
        .authentification table{
            width:100%;
            margin-bottom:15px;
        }
        .authentification table td>input{
            width:100%
        }
        .authentification table td:nth-child(1){
            width:50px;
        }
        .authentification .btn{
            min-height:24px;
            min-width:90px;
        }
</style>
<div class="authentification">
    <h2>Authentifiez vous :</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="login">login</label></td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <div class="align-right">
            <input type="submit" value="valider" class="btn btn-success">
        </div>
    </form>
</div>