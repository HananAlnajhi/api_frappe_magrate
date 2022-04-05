<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/siteStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="cover">
                        <h1>Enter All Data To Magrations</h1>
                        <form action="" method="post">
                            <div class="fildcover">
                                <label>Site Url</label>
                                <input class=" form-control Surl" type="text"  placeholder="Enter Site Url"  />
                            </div>
                            <div class="fildcover">
                                <label>DocType</label>
                                <input class=" form-control DocType" type="text"  placeholder="Enter DocType"  />
                            </div>
                            <div class="fildcover">
                                <label>Access Key</label>
                                <input class=" form-control AccKey" type="text"  placeholder="Enter Access Key"  />
                            </div>
                             <div class="fildcover">
                                <label>Secret Key</label>
                                <input class=" form-control SecKey" type="password"  placeholder="Enter Secret Key"  />
                            </div>
                            <div class="row fildcover">
                                <div class="col-8"></div>
                                <div class="col-2">
                                     <button type="submit" name="save" class="btn btn-danger btn_save">Magrate</button>
                                </div>
                               
                            </div>
                        </form>
                        <div class="datashow"></div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </body>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/sitejs.js" type="text/javascript"></script>
    
    
</html>
