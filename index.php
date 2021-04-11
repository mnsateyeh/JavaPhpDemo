<!DOCTYPE html>

<html>
    <head>
        <style>
            h1 {
                text-align: center;
                font-size: 70pt;
                color: white;
                background-color: #31B404;
            }
            footer {
                text-align: center;
                background-color: #31B404;
            }
            #eingabe {
                text-align: center;
                font-size: 25pt;
                color: skyblue;
            }
            .eingabe {
                width: 35.5%;
                margin: auto;
                margin-top: 20pt;
            }
        </style> 
        <meta charset="utf-8">
        <title> Wie sortiere ich meinen Müll </title>
    </head>
    <body style="background-image:">
        
<!--        <header id="masthead" class="site-header" role="banner" >
            <ul>
                
            </ul>
        </header>-->
        
        <?php
//            include_once 'config_dp.php';
//            $db = get_link();
            
            $dummy = '';
            $dummy = '<h1> 
                     Wie sortiere ich meinen Müll 
                     </h1>';
            $dummy = $dummy . '<div id = "eingabe"> 
                              Geben sie hier eine Beschreibung ihres Mülles ein: 
                              </div>';
             
            echo $dummy;
            
            include 'abfrage.php';
            include 'fußzeile.php';
            
         ?>
        
    </body>
</html>
