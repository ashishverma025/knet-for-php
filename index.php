<?php
/* Created by saqib 18-08-2009 */
//print_r($_GET);
if (!empty($_GET)) {
    $amount = $_GET['amount'];
    $currency = $_GET['currency'];
    $qty = $_GET['qty'];
    $product = $_GET['product'];
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

    <html>
        <head>
            <title>Knet Merchant Demo</title>
            <meta http-equiv="pragma" content="no-cache">
            <link href="st.css" rel="stylesheet" type="text/css" />
        </head>

        <body>
            <table width="100%" border="0" cellpadding="1" cellspacing="1" class="text">
                <tr>
                    <td align="center" >

                        <table width="70%" border="0" > 
                            <tr><td align=center class="heading">
                                    <img src=knet.gif>
                                </td>
                                <td align="left" width="70%" class="heading"><strong>Knet Merchant Demo Shopping Center-php</strong></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <form action="details.php" method="post">
                            <input type="hidden" id="product" name="product" value="Internet Card">
                            <input type="hidden" id="price" name="price" value="<?=@$amount?>">
                            <table width="70%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" >
                                <tr>
                                    <td colspan="2" class="tdwhite">
                                        <p>Use our Internet Cards and enjoy the fastest, most cost-effective, easiest way to serve the web with our special offer. Now you can register for the exact number of days you want. Our prices and performance are the execuse to buy from us.<br>
                                            <br>
                                        </p> 
                                    </td>
                                </tr>
                                <tr>
                                    <td width="241" class="tdfixed"><strong>Prices/Day</strong></td>
                                    <td width="533" class="tdwhite"><?=$amount?> <?=$currency?></td>
                                </tr>
                                <tr>

                                    <td class="tdfixed"><strong>Number of days you wish to subscribe</strong></td>
                                    <td class="tdwhite"><input type="text" id="qty" name="qty" value="5">
                                        day(s)</td>
                                </tr>
                                <tr>
                                    <td class="tdwhite"></td>
                                    <td class="tdwhite"><input type="submit" name="submit" value="Purchase"></td>
                                </tr>

                            </table>
                        </form></td>
                </tr>
            </table>
            <p/>
        </font>
    </body>
    </html>

    <script>
        jQuery(function () {
            jQuery('#submit').click();
        });
    </script>
<?php } else { ?>
    <div> <img src ="<?= IMG ?>access-denied.jpg" width="200px" > </div>
<?php } ?>
