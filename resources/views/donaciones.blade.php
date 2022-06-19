
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Add meta tags for mobile and IE -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration | Client Demo </title>

    <style>
 #app{
    text-align: center;
    margin: 158px;
    font-size: 25px;
}

input{
    padding: 0;
    line-height: inherit;
    color: inherit;
    margin-bottom: 30px;
    margin-right: 15px;
}

button{
    margin: 25px;
}
}


    </style>
</head>

<body  class="bg-gradient-to-r from-yellow-200 to-green-100 h-screen antialiased leading-none font-sans">
<div id="app">

5€     <input  type="radio" class="cantidad" name="valor" value="5"> 

10€    <input type="radio" class="cantidad2" name="valor" value="10">

15€    <input type="radio" class="cantidad3" name="valor" value="15">

20€    <input type="radio" class="cantidad4" name="valor" value="20">

25€    <input type="radio" class="cantidad5" name="valor" value="25">

50€    <input type="radio" class="cantidad6" name="valor" value="50">


    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    
       <script>
    var valor;
$(document).ready(function(){
    
       $("input[type='radio']").click (function(){
    valor= $("input[name='valor']:checked").val();
       })

       
        
})
  
        paypal.Buttons({

            fundingSource: paypal.FUNDING.PAYPAL,
            createOrder: function (data, actions) {
                return actions.order.create({
                    application_context: {
                        shipping_preference: "NO_SHIPPING"
                    },
                    payer: {
                        email_address: 'sb-ct9vo16073228@personal.example.com',
                        name: {
                            given_name: 'John',
                            surname: 'Suarez '
                        },

                        address: {
                            address_line_1: "Musterstrasse 18",
                            address_line_2: "Test",
                            admin_area_1: "",
                            admin_area_2: "Wien",
                            postal_code: "10109",
                            country_code: "ES"

                        }
                    },
                    purchase_units: [{
                        amount: {
                            value:valor
                        }
                    }]
                });
            },


            onApprove: function (data, actions) {
                window.location.href = 'http://adopcion.test/';
                // return actions.order.capture().then(function (orderData) {

                //     console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                //     var transaction = orderData.purchase_units[0].payments.captures[0];

                  
                    
                // });
                
            },
        
            
    onError: function (err) {
    console.error(err);
    }
    }).render('#paypal-button-container');
        
                    
    
   

   
   </script>

<button class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" ><a href="{{url('/')}}">Volver al inicio </a></button>  
</body>

</html>