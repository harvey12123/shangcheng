<?php

echo "<style type=\"text/css\">\n<!--\ndiv.minifiche\n{\n    position:    relative;\n    overflow:    hidden;\n    width:       454px;\n    height:      138px;\n    padding:     0;\n    font-size:   11px;\n    text-align:  left;\n    font-weight: normal;\n    background-image: url(./res/exemple10a.gif);\n}\ndiv.minifiche img.icone    { position: absolute; border: none; left: 5px;   top: 5px;  width: 240px; height: 128px;overflow: hidden; }\ndiv.minifiche div.zone1    { position: absolute; border: none; left: 257px; top: 8px;  width: 188px; height: 14px; padding-top: 1px; overflow: hidden; text-align: center; font-weight: bold; }\ndiv.minifiche div.zone2    { position: absolute; border: none; left: 315px; top: 28px; width: 131px; height: 14px; padding-top: 1px; overflow: hidden; text-align: left; font-weight: normal; }\ndiv.minifiche div.zone3    { position: absolute; border: none; left: 315px; top: 48px; width: 131px; height: 14px; padding-top: 1px; overflow: hidden; text-align: left; font-weight: normal; }\ndiv.minifiche div.zone4    { position: absolute; border: none; left: 315px; top: 68px; width: 131px; height: 14px; padding-top: 1px; overflow: hidden; text-align: left; font-weight: normal; }\ndiv.minifiche div.zone5    { position: absolute; border: none; left: 315px; top: 88px; width: 131px; height: 14px; padding-top: 1px; overflow: hidden; text-align: left; font-weight: normal; }\ndiv.minifiche div.download { position: absolute; border: none; left: 257px; top: 108px;width: 188px; height: 22px; overflow: hidden; text-align: center; font-weight: normal; }\n-->\n</style>\n<page>\n    <div style=\"position: absolute; width: 10mm; height: 10mm; left:    0; top:     0; border: solid 2px #0000EE; background: #AAAAEE\"></div>\n    <div style=\"position: absolute; width: 10mm; height: 10mm; right:    0; top:     0; border: solid 2px #00EE00; background: #AAEEAA\"></div>\n    <div style=\"position: absolute; width: 10mm; height: 10mm; left:    0; bottom:    0; border: solid 2px #EE0000; background: #EEAAAA\"></div>\n    <div style=\"position: absolute; width: 10mm; height: 10mm; right:    0; bottom:    0; border: solid 2px #EEEE00; background: #EEEEAA\"></div>\n    <table style=\"width: 100%\">\n        <tr>\n            <td style=\"text-indent: 10mm; border: solid 1px #007700; width: 80%\">\n                <p>\n                    Ligne dans un paragraphe,\n                    test de texte assez long pour engendrer des retours à la ligne automatique... a b c d e f g h i j k l m n o p q r s t u v w x y z a b c d e f g h i j k l m n o p q r s t u v w x y z\n                    test de texte assez long pour engendrer des retours à la ligne automatique... a b c d e f g h i j k l m n o p q r s t u v w x y z a b c d e f g h i j k l m n o p q r s t u v w x y z\n                </p>\n                <p>\n                    Ligne dans un paragraphe,\n                    test de texte assez long pour engendrer des retours à la ligne automatique... a b c d e f g h i j k l m n o p q r s t u v w x y z a b c d e f g h i j k l m n o p q r s t u v w x y z\n                    test de texte assez long pour engendrer des retours à la ligne automatique... a b c d e f g h i j k l m n o p q r s t u v w x y z a b c d e f g h i j k l m n o p q r s t u v w x y z\n                </p>\n            </td>\n            <td style=\"border: solid 1px #000077; width: 20%\">\n                Test de paragraphe :)\n            </td>\n        </tr>\n    </table>\n    <hr>\n    <div class=\"minifiche\" >\n        <img class=\"icone\"    src=\"./res/exemple10b.jpg\" alt=\"HTML2PDF\" >\n        <div class=\"zone1\">HTML2PDF</div>\n        <div class=\"zone2\">PHP</div>\n        <div class=\"zone3\">Utilitaire</div>\n        <div class=\"zone4\">1.00</div>\n        <div class=\"zone5\">01/01/1901</div>\n        <div class=\"download\"><img src=\"./res/exemple10c.gif\" alt=\"\" style=\"border: none;\"></div>\n    </div>\n    <hr>\n    <div style=\"border: solid 1px #000000; margin: 0; padding: 0; background: rgb(255, 255, 255); width: 400px; height: 300px; position: relative;\">\n        <div style=\"border-style: solid; border-color: transparent rgb(170, 34, 34) rgb(170, 34, 34) transparent; border-width: 39.5px 59px;    position: absolute; left: 101px; top: 52px; height: 0pt; width: 0pt;\"></div>\n        <div style=\"border-style: solid; border-color: rgb(34, 170, 34) rgb(34, 170, 34) transparent transparent; border-width: 59px 39.5px;    position: absolute; left: 101px; top: 131px; height: 0pt; width: 0pt;\"></div>\n        <div style=\"border-style: solid; border-color: rgb(34, 34, 170) transparent transparent rgb(34, 34, 170); border-width: 39.5px 59px;    position: absolute; left: 180px; top: 170px; height: 0pt; width: 0pt;\"></div>\n        <div style=\"border-style: solid; border-color: transparent transparent rgb(170, 170, 34) rgb(170, 170, 34); border-width: 59px 39.5px;    position: absolute; left: 219px; top: 52px; height: 0pt; width: 0pt;\"></div>\n        <div style=\"position: absolute; left: 10px; top: 10px; font-size: 20px; font-family: Arial;\">Exemple</div>\n    </div>\n    <hr>\n    <pre>";
ob_start();
readfile(dirname(__FILE__) . '/../exemple10.php');
echo htmlentities(ob_get_clean());
echo "</pre>\n</page>\n<page orientation=\"paysage\" >\n<style type=\"text/css\">\n<!--\n\ndiv.main\n{\n    padding:     0;\n    margin:      0;\n    position:    relative;\n    left:        50%;\n    margin-left: -80mm;\n    width:       160mm;\n    height:      100mm;\n    text-align:  center;\n    border:      solid 10px #111111;\n    background:  #222222;\n    color:       #FFFFFF;\n    font-size:   10pt;\n    font-weight: bold;\n    text-align:  center;\n}\n\ndiv.main a\n{\n    text-decoration: none;\n    color: #EEEEEE;\n}\n\ndiv.main a:hover\n{\n    text-decoration: underline;\n    color: #FFFFFF;\n}\n-->\n</style>\n    <div class=\"main\">\n        <div style=\"position: absolute; top: 5mm; left: 5mm; font-size:12pt;text-align: left;\">Spipu.net</div><br>\n        <div style=\"position: absolute; bottom: 5mm; right: 5mm; font-size:12pt; text-align: right; \">(c)2011 Spipu</div>\n        <br><br><br>\n        <a href=\"http://cineblog.spipu.net/\" >Cineblog by Spipu           </a><br><br>\n        <a href=\"http://html2pdf.fr/\"        >HTML2PDF                    </a><br><br>\n        <a href=\"http://lambda.spipu.net/\"   >Lambda Finder               </a><br><br>\n        <a href=\"http://open.spipu.net/\"     >Gestion des Opens - Yaronet </a><br><br>\n        <a href=\"http://perso.spipu.net/\"    >A propos de moi             </a><br><br>\n        <a href=\"http://prgm.spipu.net/\"     >Programmes by Spipu         </a><br><br>\n        <br><br><br>\n    </div>\n</page>";

?>
