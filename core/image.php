<?php
    include_once('mysql.php');
    //je creer l'objet sql pour ma page 
    $db=new BaseDeDonnees();  // var_dump($db);
    function getNoImage(){
        header("Content-Type: image/png");
        $im = imagecreate(200, 200);
        $background_color = imagecolorallocate($im, 200, 2500, 0);
        imagepng($im);
        imagedestroy($im);
    }
    function getCopyrigtedImage($idp){
        global $db;
        header("Content-type: image/png");
        $produitImage=$db->getProduit($idp)["imgurl"];
        $mime=mime_content_type ( '../img/'.$produitImage );
        switch ($mime) {
            case 'image/png':
                $copyrigtedImage=imagecreatefrompng('../img/'.$produitImage);
                break;
            case 'image/jpeg':
                    $copyrigtedImage=imagecreatefromjpeg('../img/'.$produitImage);
                    break;
            default:
                return ;
        }
        // Définir la variable d'environnement pour GD
        //putenv('GDFONTPATH=' . realpath('../fonts'));

        // Nommez la police à utiliser (Notez l'absence de l'extension .ttf)
        $font = '../fonts/Admiration_Pains.ttf';
        $violet = imagecolorallocate($copyrigtedImage, 250, 0, 128);
            // Ajout du texte
        imagettftext($copyrigtedImage, 30, 0, 10, 50, $violet, $font, 'MyPhpShop');  
        imagepng($copyrigtedImage);
        imagedestroy($copyrigtedImage);
    }
    if(isset($_GET["idp"]))getCopyrigtedImage($_GET["idp"]);
    else getNoImage();
?>