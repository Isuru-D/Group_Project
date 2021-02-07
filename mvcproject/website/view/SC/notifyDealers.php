<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notify_DealersPage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SC/notifyDealers.css">
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
            <div class="clearfix">
                <form>
                    <fieldset>
                        <label>Dealer ID.: </label>
                        <input type="text" name="id" size="50">
                        
                        <label>Dealer Name: </label>
                        <input type="text" name="name" size="50">
                        
                        <label>Message: </label>
                        <textarea name="message" placeholder="Enter your message here..."></textarea>
                        
                        <input type="submit" value="Send">
                    </fieldset>
                </form>
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