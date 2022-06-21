<?php
require_once    "../config/config.php";
require_once    "../config/auth.php";
$PlanID = $_GET['PlanID'];
$token = $_GET['access_token'];

?>

<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    </head>

    <body>
      <script src="https://www.paypal.com/sdk/js?client-id=AZILBYtJB9f2RnCctv8NfSjv3daqLNzweLxkfJRUZyz6HBL00XTtxPkFQv-OPBQTGx4Bk_z3h4jJT6vR&vault=true&intent=subscription"></script>
      <!-- Add your client_id -->

      <div id="paypal-button-container"></div>

      <script> var token = '<?php echo $token; ?>' </script>

        <script>
          paypal.Buttons({
            createSubscription: function(data, actions) {
              return actions.subscription.create({
                'plan_id': '<?php echo $PlanID; ?>' // Creates the subscription
              });
            },
            onApprove: function(data, actions) {
              alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
              window.location = "sub-details.php?subscriptionID=" + data.subscriptionID + "&access_token=" + token;
            }
          }).render('#paypal-button-container'); 
      </script>
    </body>
  </html>