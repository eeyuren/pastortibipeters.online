<div id="paypal-button-container-P-6HU738169J165992GMKICY2Y"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AQaSLoxfTATuiFELF3J9rgrHnfulgCgvwo5tq99KpBfk1lkGabcYqIU-HgT1HmiK19k7ADhzJ7NsFpH2&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'subscribe'
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          /* Creates the subscription */
          plan_id: 'P-6HU738169J165992GMKICY2Y'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
        window.location('sub-detaila.php');
      }
  }).render('#paypal-button-container-P-6HU738169J165992GMKICY2Y'); // Renders the PayPal button
</script>