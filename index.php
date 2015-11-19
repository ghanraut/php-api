<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'curlwrap_v2.php';

        echo "<h2>Reference taken from : https://github.com/agilecrm/php-api</h2>";
        echo '<br/>';

        $contact = curl_wrap("contacts/search/email/haka@gmail.com", null, "GET",NULL);
        echo $contact;
        ?>
    </body>
</html>
