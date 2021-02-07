<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ComplaintsPage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SC/complaints.css">
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
            <h3>Complaints</h3>
            <div class="clearfix">
                <table>
                    <thead>
                        <tr>
                            <th style="width:15%">Invoice NO.</th>
                            <th style="width:40%">Complaint</th>
                            <th style="width:35%">Photos</th>
                            <th class="align" style="width:10%">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>I654</td>
                            <td class="complaint">Provided Basin taps are not in good condition due to the bad packaging for the delivery.</td>
                            <td><img src="<?php echo URL; ?>public/img/m3.jpg" style="width:25%"/></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
                        </tr>
                        <tr>
                            <td>I233</td>
                            <td class="complaint">There are cracks in the freestanding bathtubs delivered and take a responsible action.</td>
                            <td></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
                        </tr>
                        <tr>
                            <td>I987</td>
                            <td class="complaint">Received less amount of bidget hand mixers than ordered.</td>
                            <td><img src="<?php echo URL; ?>public/img/a7.jpg" style="width:25%"/></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
                        </tr>
                        <tr>
                            <td>I786</td>
                            <td class="complaint">Some of the double hand bath mixers were broken and needed to change them.</td>
                            <td><img src="<?php echo URL; ?>public/img/m7.jpg" style="width:25%"/></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
                        </tr>
                        <tr>
                            <td>I719</td>
                            <td class="complaint">Took time more than expected to receieve the order.</td>
                            <td></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
                        </tr>
                        <tr>
                            <td>I532</td>
                            <td class="complaint">Round shower heads are not in the ordered type.</td>
                            <td><img src="<?php echo URL; ?>public/img/a4.jpg" style="width:25%"/></td>
                            <td><button><i class="fa fa-arrow-right" aria-hidden="true"></i>Forward to SE</button></td>
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