

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://shivshaktiedu.org/donation/edu/public/css/material.css">
    <link rel="stylesheet" href="https://shivshaktiedu.org/donation/edu/public/css/newtheme.css">
    <link rel="stylesheet" href="https://shivshaktiedu.org/donation/edu/public/css/change.css">
    <title>Shivshakti Donation</title>
        <style>
        footer{
            padding:10px;
            text-align:center;
        }
        .razorpay-payment-button{
            padding: 18px;
    line-height: 1.5px;
 
    background: #fd7e14d1;
    color: #fff;
    border-color: #fd7e14d1 !important;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
        }
        .razorpay-payment-button:hover{
            cursor: pointer;
            background: #3f51b5;
            color: #fff;
            border-color:#3f51b5 !important;
        }
        .text-help{
            color:red;
        }
       

    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--white mdl-color-text--grey-600">
          <div class="mdl-layout__header-row">
            <a href="https://www.shivshaktiedu.org/donation/wellcome" class="mdl-layout-title" >
                 <img src="https://shivshaktiedu.org/donation/edu/public/images/SSSES.png" alt="" srcset="" style="width:50px">
            </a>
            <div class="mdl-layout-spacer"></div>
           
              
            <a href="https://shivshaktiedu.org" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" >
                <i class="material-icons">home</i> 
            </a>&nbsp;
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
              <i class="material-icons">help</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
             
              <li class="mdl-menu__item">Contact</li>
              <li class="mdl-menu__item">Legal information</li>
            </ul>
          </div>
        </header>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="jumbotron mdl-shadow--2dp" >
    <img src="https://i.pinimg.com/originals/63/7a/4b/637a4be189b5b5db494e66940df579e7.gif"  height="630"alt="Donate to shivshakti" srcset="">
    <section>
        <div class="donationtype">
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_honor.php">Donation in honor</a>
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_memory.php">Donation in memory</a>
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_occassion.php">Donation in occasion</a>
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_transfer.php">Donation through wire tranfer/check/DD</a>
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_sponsor.php">Sponsor school for year</a>
            <a href="http://localhost/project/ShriShiv-ShaktiEdu111/donation_anganwadi.php">Anganwadi Feeding</a>
        </div>
                <div class="bannercontent">
            <div>
                <h1 class="display-4">Donate in honour of someone and ensure nutritious food for children.</h1>
                    <p>Donating to The Shivshakti Education Society in honour of someone is a thoughtful contribution. By this you honour an individual and you honour the cause of ensuring that a child/children somewhere is not deprived of education due to hunger. Honouring someone with this donation reflects on your traits and your desire to make a difference.</p>
                   
            </div>
            
        </div>
            </section>
   

  </div>
<div class="mdl-grid mdl-color--green">


	<form action="https://www.shivshaktiedu.org/donation/donationnew" method="post" id="donate">
        <input type="hidden" name="_token" value="g8DJj2oiwpOcA8N8bzyZ9eJZzNLgI4v1mR8f7HLh">        <h4 >Personal Details</h4>
        <div>
            <div class="mdl-grid" style="padding:0px">
                <div class="mdl-cell mdl-cell--4-col form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" value="" class="form-control" required data-pristine-required-message="Name field is requried">
                </div>
                <div class="mdl-cell mdl-cell--4-col form-group">
                    <label for="">Pan Card</label>
                    <input type="text" name="pan" id="pan" value="" class="form-control" required data-pristine-required-message="Pan field is requried" >
                </div>
                <div class="mdl-cell mdl-cell--4-col form-group">
                    <label for="">Mobile</label>
                    <input type="text" name="mobile" id="mobile" value="" id="" required data-pristine-required-message="Mobile field is requried"  data-pristine-type="number" data-pristine-minlength="10" data-pristine-maxlength="10" class="form-control">
                </div>
                
            </div>
            <div class="mdl-grid" style="padding:0px">
               
                <div class="mdl-cell mdl-cell--4-col form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" value="" id="" class="form-control" required data-pristine-required-message="Email field is requried" data-pristine-type="email">
                </div>
                <div class="mdl-cell mdl-cell--4-col form-group">
                    <label for="">Amount</label>
                    <input type="text" name="amount" id="amount" value="" class="form-control" required data-pristine-required-message="Amount field is requried" data-pristine-type="number">
                    <input type="text" name="kittext" id="kittext" value="" readonly hidden>
                </div>
            </div>
            
            <input type="text" name="transactionid" value="" id="transactionid" hidden>
            <div class="row" style="flex-direction: row;justify-content:center;text-align: center;padding:10px">
                <label> <input type="checkbox" name="terms" value="" id="" checked /> &nbsp; I have read through the website's <a href="#" style="cursor: pointer">Privacy Policy & Terms and Conditions</a> to make a donation.</label>
            </div>

        </div>
        <div style="text-align:center;padding:10px;">
            <button id="rzp-button1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Donate Now !</button>&nbsp; &nbsp;&nbsp;
            <a href="https://www.shivshaktiedu.org/donation/recipt" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored " >
                <i class="material-icons">cloud_download</i> &nbsp; Recipt 
            </a>
            
            
        </div>
        <h5>Note : </h5>
        <div>
            * Each Happiness Kit costs Rs. 550 and contains nutritious food items, immunity boosters, hygiene kit, and learning materials.<br>
            * School Reopen Sanitisation Project aims at providing a safe school environment for children and teachers. The project implementation cost is Rs. 12,000 per school.<br>
            * We thank the Central Government and various State Governments for supporting us in distributing the kits to our mid-day meal beneficiaries.<br>
            * If you are a citizen of the US or the UK and prefer to avail tax exemption, please click here.<br>
            * Support towards deficit funding for nutritious meal over & above Government subsidies.<br>
            * If you are an account holder of Indian banks and have debit/credit cards issued by Indian banks then please select Indian Donors as your donation mode.<br>
            * If you are an account holder of International banks and have debit/credit cards issued by International banks such as Diner's Card, Master Card, Amex or Visa then please select NRI / FOREIGN DONORS as your donation mode.<br>
            * Select Wire Transfer mode if you want to make account to account transfer (in India/Abroad)<br>
            * Avail tax exemption under Section 80G
        </div>
        <br>
    </form>
    

    
</div>
<footer>
    @Shivshaktiedu.org 
</footer>
            
        </main>
    </div>

    <script src="https://shivshaktiedu.org/donation/edu/public/js/material.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <script src="https://shivshaktiedu.org/donation/edu/public/js/pristine.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options={
    "key": "rzp_live_qVSV9ZzBPwwTax", // Enter the Key ID generated from the Dashboard
    "amount": "", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Shivshakti Education Society",
    "description": "Donation",
    "image": "https://shivshaktiedu.org/donation/edu/public/images/SSSES.png",
    "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        $('#transactionid').val(response.razorpay_payment_id);
        $('#donate').submit();
       
    },
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "theme": {
        "color": "#3399cc"
    }};
    // console.log('old option:',options);
       var rzp1;
      
      
       // rzp1.on('payment.failed', function (response){
        //         alert(response.error.code);
        //         alert(response.error.description);
        //         alert(response.error.source);
        //         alert(response.error.step);
        //         alert(response.error.reason);
        //         alert(response.error.metadata.order_id);
        //         alert(response.error.metadata.payment_id);
        // });

        document.getElementById('rzp-button1').onclick = function(e){
            var result=validateOptions(options);
            if(result == true){
                rzp1.open();
            }
            e.preventDefault();
        }
       
        var donate=document.getElementById('donate');
        
        var pristine =new Pristine(donate);

        var elem = document.getElementById("name");
        pristine.addValidator(elem, function(value, el) {

            if (value.length){

                return true;
            }
            return false;
        }, "The first character must be capitalized", 2, false);
       
       
        function validateOptions(options){
           var valid = pristine.validate();
           if(valid){
               var actualammount=$('#amount').val() * 100;
               options.amount=actualammount;
               options.prefill.name=$('#name').val();
               options.prefill.email=$('#email').val();
               options.prefill.contact=$('#mobile').val();
               rzp1=new Razorpay(options);
               return true;
           }
        }
</script>

</body>
</html>