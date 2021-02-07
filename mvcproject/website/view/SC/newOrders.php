<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New_OrdersPage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SC/newOrders.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <style>
          body {
            background-color: white;
            background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
          }
		    </style>
    </head>
    <body>
        <input type="checkbox" id="check">
        <header>
          <?php require_once(realpath(dirname(__FILE__) . '/../Common/header.php'));?>
        </header>
        <?php include 'navBar.php';?>

        <div class="content">
            <h3>New Orders</h3>
            <div class="clearfix">
                <table>
                    <thead>
                        <tr>
                            <th style="width:10%">Order NO.</th>
                            <th style="width:10%">Dealer ID</th>
                            <th style="width:30%">Items</th>
                            <th style="width:15%">Quantity</th>
                            <th style="width:15%">Availability</th>
                            <th class="align" style="width:20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2010</td>
                            <td>I008</td>
                            <td class="cross">
                                Basin Tap<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Faucet Shower<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Embassy Shower Head<i class="fa fa-times-circle" aria-hidden="true"></i>
                            </td> 
                            <td>100<br/>50<br/>150</td>
                            <td>Available<br/>Available<br/>Available</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1753</td>
                            <td>I654</td>
                            <td class="cross">
                                Conceal Shower Mixer<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Bidget Hand Mixer<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Single Faucet<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Koy Wall Mounted WC<i class="fa fa-times-circle" aria-hidden="true"></i>  
                            </td>
                            <td>100<br/>150<br/>250<br/>20</td>
                            <td>Available<br/>Available<br/>Available<br/>Available</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1508</td>
                            <td>I767</td>
                            <td class="cross">
                                Aquastore<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Verdi-DE<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Verdi-SE<i class="fa fa-times-circle" aria-hidden="true"></i>
                            </td>
                            <td>100<br/>50<br/>50</td>
                            <td>Available<br/>-<br/>Available</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1443</td>
                            <td>I434</td>
                            <td class="cross">
                                Concealed 2 Way Diverter<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Double Handle Bath Mixer<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Bip Tap<i class="fa fa-times-circle" aria-hidden="true"></i>
                            </td>
                            <td>300<br/>50<br/>50</td>
                            <td>Available<br/>-<br/>-</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1234</td>
                            <td>I555</td>
                            <td class="cross">
                                Wall Mounted Soap Basket<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Wall Mounted Tumbler<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                            </td>
                            <td>100<br/>50</td>
                            <td>-<br/>-</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1311</td>
                            <td>I653</td>
                            <td class="cross">
                                Shower Head<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Single Handle Mixer<i class="fa fa-times-circle" aria-hidden="true"></i><br/>
                                Koy Wall Mounted WC<i class="fa fa-times-circle" aria-hidden="true"></i>
                            </td>
                            <td>100<br/>150<br/>20</td>
                            <td>Available<br/>Available<br/>Available</td>
                            <td>
                              <div class="option">
                                <button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward</button>
                                <button><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                <button class="btnfloat"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                              </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="footercontent">
                <?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
            </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function(){
            $('.nav_btn').click(function(){
              $('.mobile_nav_items').toggleClass('active');
            });
          });
		    </script>
    </body>
</html>