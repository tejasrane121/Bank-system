<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Online digital Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-4">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>US BANK</h1>
                  <div class="logo"><img src="https://logos-world.net/wp-content/uploads/2021/02/US-Bank-Logo.png" alt="logo"></div>
                </div>
                </div>
                
              </div>
            </div>
            
            

      <!-- Activity section -->
      <section>
            <div class="row activity text-center">
                  <div class="col-md act">
                  
                    <span class="user-icon"><i class="fas fa-user fa-10x"></i></span>
                    <br>
                    <a href="createuser.php"><button style="background-color :#AA2EE6;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-rupee-sign fa-10x"></i></span>
                    <br>
                    <a href="transfermoney.php"><button style="background-color :#AA2EE6;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-money-check fa-10x"></i></span>
                    <br>
                    <a href="transactionhistory.php"><button style="background-color :#AA2EE6;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      </section>
      <br>
      <section>
      <div class="saikiran">
        <p class="sectionTag text-big">US Bank</p>
        <p class="sectionSubTag text-small" > Historically, commercial bank came into being for its commercial purpose. The inception of modern banking is the
            outcome of commercial bank. In the words of Professor Roger, “ the bank which deals with money and money‟s worth
            with a view to earning profit is known as ``Commercial bank.”
            Professor Hart says, “ A banker is one who, in the ordinary course of business, honours cheques drawn upon him by
            persons for and for whom he receives money on current account.”
            Bank means Commercial Bank and its functions. Central Bank is a separate entity and plays
            distinctive roles. The function of a Bank is to collect deposits from the public and lend those deposits for the
            development of Agriculture, Industry, Trade and Commerce. Bank pays interest at lower rates to the depositors and
            receives interests on loans and advances from them at higher rates. In modern banking, Bank carries out many other
            activities, e.g. creation of debts and money, transmission of money from one country to another country, increase of
            foreign trade, preservation of valuables in safe custody etc. Thus, Bank earns profits through executing various types
            of activities
            </p>
        </div>
        </section>
        
        <footer class="text-center mt-5">
      <p><a href="https://github.com/sanketpal8108"><span class="git"><i class="fab fa-github"></i></span></a> <b> Sanket Pal</b> <br> The Sparks Foundation</p>
      <p>
        Copyright &copy;2021 www.usbank.com - All Rights Reserved
    </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

body {
  background-image:url('https://thumbs.dreamstime.com/z/row-coins-bank-book-graph-business-finance-background-row-coins-bank-book-graph-business-139446654.jpg');
  background-size: cover ;
  }

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
  font-family: 'Ubuntu', sans-serif;
}

.container-f{
  background:rgba(0,0,0,0.5);
}
.intro{
	background: rgba(0,0,0,0);
  text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
}
.saikiran{
    width: 80%;
    margin-top: 150px;
    padding: 0 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color:  black;
    font: size 50px;
    
}
.user-icon{
  color:  #FF79CD;

}
.logo{
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin:20px;
    padding:10px;
}
.logo img{
    width: 33%;
    border: 3px solid white;
    margin-left: 550px;
    margin-top: -150px;

}
.row activity text-center{
  margin:150px;
  
}

.col-md act{
  margin:100px;
}
h1{
  font-size:7vh;
	color:  #72147E;
	font-weight: bold;
	
}
h3{
	color: #72147E;
}
button{
	border:none;
	border-radius: 8px;
  margin-top : 10px;
	padding: 10px;
	background:#7B8788; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
  font-family: 'Ubuntu', sans-serif;
}
button:hover{
  background-color:white;border:1px solid white;
  color:black;
	transform: scale(1.1);
}
button:hover{
	background-color:#4C4B4B;
}
footer{
	color:#EAF0F1;
	background-color:rgba(0,0,0,0.99);
	letter-spacing: 0.5px;
  padding: 30px;
}
footer p{
	margin: 0;
	font-size: 15px;

.git i{
  color: #fff;
  font-size: 18px;
}
span i{
  color: #	FFEBCD;
  font-size: 240px;
  text-shadow: 2px 5px 5px rgba(0,0,0,0.8);
}

@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
} 
</style>
</html>