<!DOCTYPE html>
<?php 
     // Initialize the session
	 session_start();
     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
        	  header("refresh:0; ../login.php");
         exit;


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            $_SESSION['active'] = "active";
            $active = $_SESSION['active'];
         
            include "../dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $customerID = $rowedit['ID'];

               

            }
     }



?>
<html>
<head>
	<title> booking</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="../style/style.css">

	<!-- date formatting -->
	<script src="https://momentjs.com/downloads/moment.js"></script>
	 <!-- fontawSome -->
  <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
	
</head>
<body >





<!-- modal end -->
	<!--  Header -->
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="../style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="../index.php" >Home</a></li>
    <li><a href="../pricing.php">Pricing</a></li>
    <li><a href="../gallery.php">Gallery</a></li>
    <li><a href="../About_Us.php">About Us</a></li>
    <li><a href="../booking1.php" style="color:black;" >Book Now</a></li> 
    <li>
		<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn"><i class="fas fa-caret-down"></i></button>
			<div id="myDropdown" class="dropdown-content">
				<form method="POST">
					<button type="submit" name="homeprofile" ><i class="fas fa-user"></i>  Account</button>
					<button type="submit" name="homelogout" ><i class='fas fa-sign-out-alt'></i>  Logout</button>
				</form>
			</div>
		</div>
	</li>
  </ul>
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>


<!-- Header End -->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<!-- Parallax -->
<div class="container is-fluid" id="parallax" style="height:300px;">
  <div class="container"data-aos="fade-up">
    <center>

      <a class="btn-explore button"  id="myBtn" role="button">HOW TO BOOK</a>
    </center>
  </div>
</div>
<!-- paralax end -->


<Br><br><br>
<script>

		
var price =0;
	

	
	
		
	function overnight(){
			$(function () {
     $('#daytourcontainer').removeClass('daytourcontainer');
     $("#overnightcontainer").removeClass('overnightcontainer');
     $('#confirm').removeClass('confirm');
     jQuery("#overnightcontainer").addClass('fade-in');
      jQuery("tr").addClass('fade-in');

	 });


		document.getElementById("overnightcontainer").style.display="";
	
		document.getElementById("daytourcontainer").style.display="none";
		document.getElementById("fcategory").innerHTML ="OVERNIGHT";

		document.getElementById("fstandardsmall").style.display ="";
		document.getElementById("fstandardlarge").style.display ="";
		document.getElementById("fdeluxesmall").style.display ="";
		document.getElementById("fdeluxelarge").style.display ="";
		document.getElementById("ftwinhouse").style.display ="";
		document.getElementById("fadditional").style.display ="";
		document.getElementById("dateinfo").style.display ="";
		document.getElementById("fdateplace").style.display ="";
		document.getElementById("fdatetime").style.display ="";
		document.getElementById("ftotal").style.display ="";
			document.getElementById("ftimeinout").style.display ="";
		document.getElementById("ftimeinout1").style.display ="";
		document.getElementById("checkprice").style.display ="";


		document.getElementById("fdaytour").style.display ="none";
		document.getElementById("ftotal1").style.display ="none";


		if(document.getElementById('dateno').checked){
		document.getElementById("datecontainer").style.display="none";
		document.getElementById("dateinfo").style.display="none";
		document.getElementById("fdatetime").style.display= "none";
		document.getElementById("fdateplace").style.display= "none";
		}

		
		
	}
	function daytour(){

			$(function () {
     $('#daytourcontainer').removeClass('daytourcontainer');
     $("#overnightcontainer").removeClass('overnightcontainer');
     $('#confirm').removeClass('confirm');
     jQuery("#daytourcontainer").addClass('fade-in');

	 });
		document.getElementById("overnightcontainer").style.display="none";
		document.getElementById("daytourcontainer").style.display="";
		document.getElementById("fcategory").innerHTML ="DAYTOUR";

		document.getElementById("fstandardsmall").style.display ="none";
		document.getElementById("fstandardlarge").style.display ="none";
		document.getElementById("fdeluxesmall").style.display ="none";
		document.getElementById("fdeluxelarge").style.display ="none";
		document.getElementById("ftwinhouse").style.display ="none";
		document.getElementById("fadditional").style.display ="none";
		document.getElementById("dateinfo").style.display ="none";
		document.getElementById("fdateplace").style.display ="none";
		document.getElementById("fdatetime").style.display ="none";
		document.getElementById("ftotal").style.display ="none";
		document.getElementById("ftimeinout").style.display ="none";
		document.getElementById("ftimeinout1").style.display ="none";
		document.getElementById("checkprice").style.display ="none";

		document.getElementById("fdaytour").style.display ="";
		document.getElementById("ftotal1").style.display ="";

		

	}






function date2(){
		$(function () {
     $('#ftimeinout').removeClass('ftimeinout');
 	 $('#ftimeinout1').removeClass('ftimeinout1');

 	  jQuery("tr").addClass('fade-in');
	 });


	var date1 = document.getElementById("txtDate").value;
	var fstart = date1;
	if(date1 == ""){
		alert("Choose date first!");
	}else{

	var start = date1+'T14:00';
		date1 = new Date(document.getElementById("txtDate").value);
		date1.setDate(date1.getDate()+1);
	var date1 = moment(date1).format('YYYY-MM-DD');	
	var end = date1 +'T12:00';
		
	var y =	document.getElementById("starttime1").value =start;
		document.getElementById("endtime").value =end;
		document.getElementById("ftimein").innerHTML ="Time In:";
		document.getElementById("ftimeindate").innerHTML =  fstart +" |  2:00 PM";
		document.getElementById("ftimeout").innerHTML ="Time Out:";
		document.getElementById("ftimeoutdate").innerHTML = moment(date1).format("YYYY-MM-DD") +" |  12:00 NN";

	}
}



	
	function room1(){
		var ssvalue = document.getElementById("standardsmall1");
		var price1 = document.getElementById("price1").value;
		price1 = parseInt(price1);

		if (ssvalue.checked == true){
	
		     $(function () {
	         $('#fstandardsmall').removeClass('fstandardsmall');
	  	     });
		    document.getElementById("c1").innerHTML = price1;

			document.getElementById("fstandardsmall").style.display ="";
			price += price1;
			console.log(price);
		}else{
		  	document.getElementById("fstandardsmall").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		}

	}

	function room2(){
		var ssvalue = document.getElementById("standardsmall2");
		var price1 = document.getElementById("price2").value;
		price1 = parseInt(price1);


		if (ssvalue.checked == true){
	
		     $(function () {
	         $('#fstandardsmallsmall').removeClass('fstandardsmallsmall');
	  	     });
		     document.getElementById("c2").innerHTML = price1;
				document.getElementById("fstandardsmallsmall").style.display ="";
				price += price1;
					console.log(price);
		}else{
		  	document.getElementById("fstandardsmallsmall").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		}

	}
	function room3(){
		var ssvalue = document.getElementById("standardsmall3");
		var price1 = document.getElementById("price3").value;
		price1 = parseInt(price1);

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fstandardlarge').removeClass('fstandardlarge');
	      	  });
			  document.getElementById("c3").innerHTML = price1;
				price += price1;
				document.getElementById("fstandardlarge").style.display ="";
				console.log(price);
		  }else{

		  	document.getElementById("fstandardlarge").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room4(){
		var ssvalue = document.getElementById("standardsmall4");
		var price1 = document.getElementById("price4").value;
		price1 = parseInt(price1);
		

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fstandardlargelarge').removeClass('fstandardlargelarge');
	      	  });
			  document.getElementById("c4").innerHTML = price1;
				price += price1;
				document.getElementById("fstandardlargelarge").style.display ="";
				console.log(price);
		  }else{

		  		document.getElementById("fstandardlargelarge").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room5(){
		var ssvalue = document.getElementById("standardsmall5");
			var price1 = document.getElementById("price5").value;
		price1 = parseInt(price1);
		

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fdeluxesmall').removeClass('fdeluxesmall');
	      	  });
			document.getElementById("c5").innerHTML = price1;
				price += price1;
				document.getElementById("fdeluxesmall").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxesmall").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room6(){
		var ssvalue = document.getElementById("standardsmall6");
				var price1 = document.getElementById("price6").value;
		price1 = parseInt(price1);

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fdeluxesmallsmall').removeClass('fdeluxesmallsmall');
	      	  });
			document.getElementById("c6").innerHTML = price1;
				price += price1;
				document.getElementById("fdeluxesmallsmall").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxesmallsmall").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room7(){
		var ssvalue = document.getElementById("standardsmall7");
		var price1 = document.getElementById("price7").value;
		price1 = parseInt(price1);
		

		if (ssvalue.checked == true){
	
		 $(function () {
	          $('#fdeluxelarge').removeClass('fdeluxelarge');
	      	  });	 
			document.getElementById("c7").innerHTML = price1;
				price += price1;
				document.getElementById("fdeluxelarge").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxelarge").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room8(){
		var ssvalue = document.getElementById("standardsmall8");
			var price1 = document.getElementById("price8").value;
		price1 = parseInt(price1);
		

		if (ssvalue.checked == true){
	
		 $(function () {
	          $('#fdeluxelargelarge').removeClass('fdeluxelargelarge');
	      	  });	 
			document.getElementById("c8").innerHTML = price1;
				price += price1;
				document.getElementById("fdeluxelargelarge").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxelargelarge").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}
	function room9(){
		var ssvalue = document.getElementById("standardsmall9");
		var price1 = document.getElementById("price9").value;
		price1 = parseInt(price1);

		if (ssvalue.checked == true){
			  $(function () {
	          $('#ftwinhouse').removeClass('ftwinhouse');
	      	  });
				document.getElementById("c9").innerHTML = price1;
				price += price1;
				document.getElementById("ftwinhouse").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("ftwinhouse").style.display ="none";
		  		price -= price1;
		  		console.log(price);
		  	
		}

	}


/*
	function room1(){
		var ssvalue = document.getElementById("standardlarge");
		

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fstandardlarge').removeClass('fstandardlarge');
	      	  });

				price += 3000;
				document.getElementById("fstandardlarge").style.display ="";
				console.log(price);
		  }else{

		  	document.getElementById("fstandardlarge").style.display ="none";
		  		price -= 3000;
		  		console.log(price);
		  	
		}
	}
	*/
	/*function room2(){
		var ssvalue = document.getElementById("deluxesmall");
		

		if (ssvalue.checked == true){
	
			  $(function () {
	          $('#fdeluxesmall').removeClass('fdeluxesmall');
	      	  });

				price += 4000;
				document.getElementById("fdeluxesmall").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxesmall").style.display ="none";
		  		price -= 4000;
		  		console.log(price);
		  	
		}
	}*/
	/*
	function room3(){
		var ssvalue = document.getElementById("deluxelarge");
		

		if (ssvalue.checked == true){
	
		 $(function () {
	          $('#fdeluxelarge').removeClass('fdeluxelarge');
	      	  });	 

				price += 5000;
				document.getElementById("fdeluxelarge").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("fdeluxelarge").style.display ="none";
		  		price -= 5000;
		  		console.log(price);
		  	
		}
	}
	function room4(){
		var ssvalue = document.getElementById("twinifugao");


		if (ssvalue.checked == true){
			  $(function () {
	          $('#ftwinhouse').removeClass('ftwinhouse');
	      	  });

				price += 8000;
				document.getElementById("ftwinhouse").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("ftwinhouse").style.display ="none";
		  		price -= 8000;
		  		console.log(price);
		  	
		}
	}
	*/
	function addnumber(){
		var x = document.getElementById("addpax").value;
		  $("[type='number']").keypress(function (evt) {
		    evt.preventDefault();
		});
		if(x>=1){

			document.getElementById("additional").innerHTML = "add";
			document.getElementById("additional").disabled = false;

		}else if(x == 0){
			document.getElementById("additional").disabled = false;
			document.getElementById("additional").innerHTML = "Update";

		}else{
			document.getElementById("additional").disabled = true;
		}

	}

	function additional(){
		var x = document.getElementById("addpax").value;
		console.log(x);

		if(x >0){
			$(function () {
		        $('#fadditional').removeClass('fadditional');  
		    });
			x = parseInt(x);
			var addprice = x * 500;

			
			console.log(addprice)
			console.log(price)
		    document.getElementById("fadditionalpax").innerHTML = x;
		    document.getElementById("additionalprice").innerHTML = addprice;


		}else{
			$(function () {
		        $('#fadditional').addClass('fadditional');  
		    });
		    x = parseInt(x);
			var addprice = x * 500;
			  document.getElementById("fadditionalpax").innerHTML = x;
		    document.getElementById("additionalprice").innerHTML = addprice;
		}



	}
	function additional1(){
			var x = document.getElementById("addpax").value;
	  $("[type='number']").keypress(function (evt) {
		    evt.preventDefault();

		});
		if(x>=1){

			document.getElementById("additional").innerHTML = "add";
			document.getElementById("additional").disabled = false;

		}else if(x == 0){
			document.getElementById("additional").disabled = false;
			document.getElementById("additional").innerHTML = "Update";

		}else{
			document.getElementById("additional").disabled = true;
		}



	}

	function dateyes(){
		 $(function () {
	          $('#datecontainer').removeClass('datecontainer');
	           $('#dateinfo').removeClass('dateinfo');
	          	jQuery("datecontainer").addClass('fade-in');

	      	  });

		document.getElementById("dateinfo").style.display="";
		document.getElementById("datecontainer").style.display="";
			document.getElementById("fdatetime").style.display= "";
		document.getElementById("fdateplace").style.display= "";
		
	}

	function dateno(){
		document.getElementById("datecontainer").style.display="none";
		document.getElementById("dateinfo").style.display="none";
		document.getElementById("fdatetime").style.display= "none";
		document.getElementById("fdateplace").style.display= "none";
		

	}

	

	function viewdeck(){

 		$(function () {
	        $('#fdateplace').removeClass('fdateplace');
	      	$('.datecategory').removeClass('datecategory');
	          
	    });
	    document.getElementById("fdateplace1").innerHTML ="<b>VIEW DECK</b>";
		var x = document.getElementById("viewdeck").checked;
		console.log(x);			
		document.getElementById("viewdeck").checked = true;

		if(document.getElementById('sun').checked) {
		  document.getElementById("fdateprice").innerHTML ="1000";
		}else if(document.getElementById('cof').checked) {
		  document.getElementById("fdateprice").innerHTML ="700";
		}else if(document.getElementById('din').checked){
		  document.getElementById("fdateprice").innerHTML ="1500";
		}else{
		  document.getElementById("fdateprice").innerHTML ="";
		}
		
	}
	function veranda(){

 		$(function () {
	        $('#fdateplace').removeClass('fdateplace');
	        $('.datecategory').removeClass('datecategory');
	      
	          
	    });
	    document.getElementById("fdateplace1").innerHTML ="<b>VERANDA </b>";

		var x = document.getElementById("veranda").checked;
		console.log(x);
		document.getElementById("veranda").checked = true;
		

		if(document.getElementById('sun').checked) {
		  document.getElementById("fdateprice").innerHTML ="500";
		}else if(document.getElementById('cof').checked) {
		  document.getElementById("fdateprice").innerHTML ="400";
		}else if(document.getElementById('din').checked){
		  document.getElementById("fdateprice").innerHTML ="1000";
		}else{
		  document.getElementById("fdateprice").innerHTML ="";
		}

	}

	function datecat1(){
		$(function () {
	        $('#fdatetime').removeClass('fdatetime');
	      
	    });
	    document.getElementById("fdatecategory").innerHTML =" Sunrise Breakfast";
	    document.getElementById("Sunrise").disabled=false;
	    document.getElementById("coffeedate").disabled=true;
	    document.getElementById("romanticdinnger").disabled=true;

	    var x = document.getElementById("veranda").checked;
	    console.log(x);
	    if(x == true){
	    	var pricerate = document.getElementById("verandarate1").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }else{
	    	var pricerate = document.getElementById("viewrate1").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }

	}
	function datecat2(){
		$(function () {
	        $('#fdatetime').removeClass('fdatetime');
	      
	    });
	    document.getElementById("fdatecategory").innerHTML =" Coffee Date";
	     document.getElementById("Sunrise").disabled=true;
	    document.getElementById("coffeedate").disabled=false;
	    document.getElementById("romanticdinnger").disabled=true;


	     var x = document.getElementById("veranda").checked;
	     console.log(x)
	    if(x == true){
	    	var pricerate = document.getElementById("verandarate2").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }else{
	    	var pricerate = document.getElementById("viewrate2").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }

	}
	function datecat3(){
		$(function () {
	        $('#fdatetime').removeClass('fdatetime');
	      
	    });
	    document.getElementById("fdatecategory").innerHTML =" Romantic Dinner";
	     document.getElementById("Sunrise").disabled=true;
	    document.getElementById("coffeedate").disabled=true;
	    document.getElementById("romanticdinnger").disabled=false;
	     var x = document.getElementById("veranda").checked;
	    if(x == true){
	    	var pricerate = document.getElementById("verandarate3").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }else{
	    	var pricerate = document.getElementById("viewrate3").value;
	    	document.getElementById("fdateprice").innerHTML =pricerate;
	    	
	    }

	}

	function changeFunc() {
    var selectBox = document.getElementById("datetime");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   		document.getElementById("fdatetimetime").innerHTML = selectedValue;
   }

   	function checkprice(){
   		
   		var date = document.getElementById("txtDate").value;
   		var date1 = document.getElementById("starttime1").value;
   		
   		var r1 = document.getElementById("standardsmall1");
   		var r2 = document.getElementById("standardsmall2");
   		var r3 = document.getElementById("standardsmall3");
   		var r4 = document.getElementById("standardsmall4");
   		var r5 = document.getElementById("standardsmall5");
   		var r6 = document.getElementById("standardsmall6");
   		var r7 = document.getElementById("standardsmall7");
   		var r8 = document.getElementById("standardsmall8");
   		var r9 = document.getElementById("standardsmall9");


   		var yes = document.getElementById("dateyes");
   		var no = document.getElementById("dateno");

   		var view = document.getElementById("viewdeck");
   		var vera = document.getElementById("veranda");
   		
   		var romanticdate = document.querySelector('input[name = "date"]:checked');
/* */	console.log(date1)
   		if( date1 == ""){
   			alert("Please confirm date first");
   		}else if( r1.checked==false && r2.checked==false && r3.checked==false && r4.checked==false && r5.checked==false && r6.checked==false && r7.checked==false && r8.checked==false && r9.checked==false){

   			alert("Choose Room!");

   		


   		}else if(romanticdate == null){
   			alert("Please Choose Date Category!");
   		}/*else if(yes.checked ==false && no.checked==false){
   			alert("are you going to date? Please select answer");

   		}*/else{
   			$(function () {
	        $('#ftotal').removeClass('ftotal');
	      	 $('#btn12').removeClass('btn12');
	      	  $('#btn1').removeClass('btn1');
	          
	    });	

   		document.getElementById("btn1").style.display="none";

   		document.getElementById("btn12").style.display="";

   		var dateprice = 	document.getElementById("fdateprice").innerHTML;
   		dateprice = parseInt(dateprice);
   		var addprice = document.getElementById("additionalprice").innerHTML;
   		addprice = parseInt(addprice);

   		if(no.checked){
   			if(addprice > 0){
   				price = price +  addprice;
	   			document.getElementById("ftotalprice").value = price;
	   			price = price -addprice;
	   		}else if(addprice ==null){
	   			//addprice = addprice - addprice;
	   			//price = price + addprice;

	   			document.getElementById("ftotalprice").value = price;

	   		}else{
	   			document.getElementById("ftotalprice").value = price;

	   		}

   		}else{
   			//*********************** view deck and veranda uncheck condition check dataplace first
	   		if(addprice > 0){
	   			price = price + dateprice + addprice;

	   				document.getElementById("ftotalprice").value = price;


	   		price = price - dateprice;
	   		price = price -addprice;

	   		}else{
	   			price = price + dateprice;
	   				console.log(price);
	   				document.getElementById("ftotalprice").value = price;


	   		price = price - dateprice;
	   		

	   		}
	   	}

   		}
   	}

	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
   
    $('#txtDate').attr('min', maxDate);
	});

	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
   
    $('#daytourdate').attr('min', maxDate);
	});


</script>

<!-- ########################################################################################### DAY TOUR -->
<script type="text/javascript">
	function addnumber2(){
		var x = document.getElementById("addpax").value;
		console.log(x);

		



	}
	function additional2(){
	var x = document.getElementById("addpax").value;
	$("[type='number']").keypress(function (evt) {
	    evt.preventDefault();
	});
	


	}

	function checkday(){
		
	var people = document.getElementById("number").value;
	var date = document.getElementById("daytourdate").value;
	var selectBox = document.getElementById("datetime1");
	var selectedValue = selectBox.options[selectBox.selectedIndex].value;

	
	
	if( people == "" || date == null || selectedValue == "" ){
		alert("Make an input first");
	}else{
		$(function () {
	        $('#fdaytour').removeClass('fdaytour');
	         $('#ftotal1').removeClass('ftotal1');
	         $('#btn12').removeClass('btn12');
	      	  $('#btn1').removeClass('btn1');
	          

	      
	    });


   		document.getElementById("btn1").style.display="";
   		document.getElementById("btn12").style.display="none";

	    people = parseInt(people);

	    var dprice = people * 200;

		document.getElementById("fno").innerHTML = people;
		document.getElementById("ftime").innerHTML = date;
		document.getElementById("fdaytourprice").innerHTML = dprice;
		document.getElementById("ftotalprice1").value = dprice;
		


		console.log(people)
	console.log(date)
	console.log(selectedValue)
	}

	


	}




</script>


<form method="POST" >
<div class="columns is-mobile" style="padding:50px; background-color: ;">

  <div class="column" style="background-color:;">
    

  	<!-- -->
  	<div class="headerBook">
		<i class="fas fa-calendar-alt"></i>  Make Room Reservation in Minutes
	</div>
	
	<span class="categorylbl">Choose Booking Category</span><br>
		<label onclick="overnight()">
		<input type="radio" class="dateyes"  id="overnight" name="service">  Overnight
		</label>
		<label onclick="daytour()">
		<input type="radio" class="dateyes"  id="daytour" name="service">  Daytour
		</label>
		

	<div class="overnightcontainer" id="overnightcontainer" style="background-color:;" >
		<div class="datepick">
		<span class="categorylbl" >Choose Date</span><br>
			<div class="columns is-mobile">
				<div class="column">

					<input id="txtDate"  class="txtDate" name="txtDate" type="date"><br>
					<label onclick="date2()">		
					<button type="button" id="confirmdate" >Confirm Date</button>
					</label>

				</div>
				<div class="column">
					<span class="subtitle">Time in</span>
					<input id="starttime1" type="datetime-local" name="timein" readonly><br>

					<span class="subtitle">Time out</span>
					<input id="endtime" type="datetime-local" name="timeout" readonly>
				</div>
			</div>
		</div>
		<!-- -->
		<span class="categorylbl">Choose Room</span><br>
		<div class="columns is-mobile" style="background-color: ; padding:0px;margin:0px;">
			<div class="column">
			<img  class="roomimage" src="../style/images/standardcabana.jpg" alt="Standard Cabana">
				<div class="center">
					<span class="subtitle">Standard Cabana(2pax)</span>	 
				</div>
			</div>
			<div class="column">
			<img class="roomimage"src="../style/images/deluxecabana.jpg" alt="deluxe Cabana">
				<div class="center">
					<span class="subtitle">Deluxe Cabana(2 pax)</span>	 
				</div>
			</div>
			<div class="column">
			<img class="roomimage"src="../style/images/twinifugao.jpg" alt="Twin Ifugao House">
				<div class="center">
					<span class="subtitle">Twin Ifugao(6pax)</span>	 
				</div>

			</div>
	 	</div>
	 	<!-- -->

		<div class="columns is-mobile" style="border-bottom: thick double #32a1ce; padding:0; margin:0;">
			<div class="column">
				<div class="center">
					<?php
					$sqlroom = "SELECT * FROM tbl_price WHERE category ='room' AND accomodation = 'Standard Couple Cabana' ORDER BY size DESC";
					$resultroom = $conn->query($sqlroom);
					$count =0;

					while($rowroom = $resultroom->fetch_assoc()) {
					$count += 1;

					if ($count % 2 != 0){

						echo "<br>";		
					}
					?>
						<input class="standardsmall"  id="<?php echo"standardsmall".$count; ?>" value="<?php echo "C".$count; ?>" type="checkbox" onchange="<?php echo 'room'.$count.'()'; ?>" name="room[]"> 

						<input type="hidden" id="<?php echo"price".$count; ?>" name="<?php echo "price".$count; ?>" value="<?php echo "".$rowroom['rate'];?>">

						<?php echo"C".$count." ".$rowroom['size'];?>

						</input>

						<!--   id="standardsmall" onchange="room()" <input class="checkroom" id="standardlarge" name="c3" type="checkbox" onchange="room1()"> Large</input> -->

						<?php

					}

					?>


				</div>
			</div>

				

			<div class="column">
				<div class="center">
					<?php
					$sqlroom = "SELECT * FROM tbl_price WHERE category ='room' AND accomodation = 'De luxe Couple Cabana' ORDER BY size DESC";
					$resultroom = $conn->query($sqlroom);


					while($rowroom = $resultroom->fetch_assoc()) {
					

					
						if($rowroom['size'] != ""){
							$count += 1;
								if ($count % 2 != 0){

									echo "<br>";		
								}
							?>

							<input class="checkroom" id="<?php echo"standardsmall".$count; ?>" value="<?php echo "C".$count; ?>" type="checkbox" onchange="<?php echo 'room'.$count.'()'; ?>" name="room[]"> 

							<input type="hidden" id="<?php echo"price".$count; ?>" name="<?php echo "price".$count; ?>" value="<?php echo "".$rowroom['rate'];?>">

							<?php echo"C".$count." ".$rowroom['size'];?>

							</input>

							<!-- <input class="checkroom" id="standardlarge" name="c3" type="checkbox" onchange="room1()"> Large</input> -->

							<?php
						}
					}

					?>

					<!-- <input class="checkroom" id="deluxesmall" name="c5" type="checkbox" onchange="room2()"> Small</input>
					<input class="checkroom" id="deluxelarge" name="c7" type="checkbox" onchange="room3()"> Large</input> -->
				</div> 
			</div>
			<div class="column">
				<div class="center">
					<?php
					$sqlroom = "SELECT * FROM tbl_price WHERE category ='room' AND accomodation = 'Twin Ifugao House' ORDER BY size DESC";
					$resultroom = $conn->query($sqlroom);


					while($rowroom = $resultroom->fetch_assoc()) {
					

					
						if($rowroom['size'] != ""){
							$count += 1;
								if ($count % 2 != 0){

									echo "<br>";		
								}
							?>


							<input class="checkroom" id="<?php echo"standardsmall".$count; ?>" value="<?php echo "C".$count; ?>" type="checkbox" onchange="<?php echo 'room'.$count.'()'; ?>" name="room[]"> 

							<input type="hidden" id="<?php echo"price".$count; ?>" name="<?php echo "price".$count; ?>" value="<?php echo "".$rowroom['rate'];?>" >

							<?php echo"C".$count." ".$rowroom['size'];?>

							</input>

							<!-- <input class="checkroom" id="standardlarge" name="c3" type="checkbox" onchange="room1()"> Large</input> -->

							<?php
						}
					}

					?>
					
					<!-- <input class="checkroom" id="twinifugao" name="c9" type="checkbox" onchange="room4()"> Ifugao House</input> -->
				</div>
			</div>


		</div>
		<!-- -->
		<div class="container" style="border-bottom: thick double #32a1ce;">
			<span class="categorylbl">insufficient pax? Add-on 500 each</span><br>
	 		<span class="subtitle">No. additional People</span><Br>
			<input type=number id="addpax" onclick="addnumber()" onkeyup="additional1()" style="width:60px; margin-left:20px;" min=0 max=10 name="additionalpax"> 
			<label onclick="additional()"	>
			<button  type="button" id="additional"   > Add</button> <br>
			</label>
		</div>
		<!-- -->
		<span class="categorylbl">Would You Like To do Romantic Date?</span><br>
		
			<label onclick="dateyes()">
			<input type="radio" id="dateyes" class="dateyes"  name="date" valu="date">  Yes
			</label>
			<label onclick="dateno()"><input type="radio" id="dateno"class="dateyes"  name="date" value="nodate">  No
			</label>

		<!-- -->
		<div class="datecontainer" id="datecontainer" style="margin:0; padding:0; ">
			<!-- -->
			<div class="headerBook" style="background-color:#FA8072; border-bottom: 3px solid #DC143C;">
				<i class="fas fa-utensils"></i>  Romantic Date Reservation <i class="fas fa-utensils"></i>
			</div>	
			<span class="categorylbl" >Choose Location</span><br>
			<!-- -->
		    <div class="columns is-mobile" style="border-bottom: thick double #32a1ce; padding:0px; margin:0px;">
			    <div class="column">
			     	<label onclick="viewdeck()">
			     		<img class="roomimage"  src="../style/images/viewdeck.jpg" alt="ViewDeck">	
			     	
			      	
			     	<div class="center">
			      		<span class="subtitle" >View Deck</span>
			      		<input type="radio"  name="viewdeck12"  id="viewdeck" value="View Deck">
			   	    </div>
			   	    </label>
			    </div>
			    <div class="column">
			      	<label onclick="veranda()">
			      	<img class="roomimage"  src="../style/images/veranda.jpg" alt="Veranda">
			      	
			    	<div class="center">
			      		<span class="subtitle" >Veranda</span>
			      		<input type="radio" name="viewdeck12" id="veranda"  value="Veranda">
			   	  	</div>
			   	  	</label>
			      
			    </div>
		    </div>	
		    <span class="categorylbl">Choose Date Available (One only)</span><br>
			<span class="subcategorylbl">any additional dates can settle onsite</span>
			<!-- -->
			<div class="container" style="border-bottom: thick double #32a1ce;">
				<div class="columns is-mobile">
					<div class="column"> 
						<br>
						<div style="margin: auto; padding-left:50px;">
						<?php
							$sqldate = "SELECT * FROM tbl_price WHERE category='date'";
							$resultdate = $conn->query($sqldate);
							$countdate = 0;
							 while($rowdate = $resultdate->fetch_assoc()) {
							 	$countdate += 1;
							    ?>
							    <input type="radio" class="datecategory" name="datecategory" id="<?php echo"date".$countdate; ?>" onchange="<?php echo 'datecat'.$countdate.'()'; ?>" value="<?php echo"".$rowdate['accomodation']; ?> "><?php echo"".$rowdate['accomodation']; ?> <br>

							    <input type="hidden" id="<?php echo"viewrate".$countdate; ?>" value="<?php echo''.$rowdate['viewrate'];?>" />
							     <input type="hidden" id="<?php echo"verandarate".$countdate; ?>" value="<?php echo''.$rowdate['verandarate'];?>" />
							    <?php

							  }

						?>


<!-- 
						<input type="radio" class="datecategory" name="datecategory" id="sun" onchange="datecat()" > Sunrise Breakfast <br>
						<input type="radio" class="datecategory" name="datecategory" id="cof" onchange="datecat1()" > Coffee Date <br>
						<input type="radio" class="datecategory" name="datecategory" id="din" onchange="datecat2()"> romantic Dinner <br>
					-->

						</div>



					</div>
					<div class="column">
						<span class="subtitle">Date Time Schedule</span>
						<select name="datetime" id="datetime" class="datetime" onchange="changeFunc()">
						<option disabled="disabled" selected="selected">Select Appropriate Time</option>
						<optgroup label="Sunrise Breakfast" id="Sunrise">

						<option value="6am to 7am" >6AM to 7AM</option>

						</optgroup>
						<optgroup label="Coffee Date" id="coffeedate">
						<option value="3pm to 4pm">3PM - 4PM</option>
						<option value="4pm to 5pm">4PM - 5PM</option>

						</optgroup>
						<optgroup label="Romantic Dinner" id="romanticdinnger">
						<option value="4pm to 5pm">4PM - 5PM</option>
						<option value="5pm to 6pm">5PM - 6PM</option>
						<option value="6pm to 7pm">6PM - 7PM</option>
						</optgroup>
						</select>
					</div>
					
						
					
				</div>
				
			</div>



		 </div>
		 <div class="columns is-mobile">
			<div class="column" style="text-align: center;" >
				<label id="checkprice" style="color:red;" onclick="checkprice()">
				<button type="button"  > Check Price</button>
				</label>

			</div>
					
		</div>





	</div>
	
		
  	<!-- -->

			<div class="daytourcontainer" id="daytourcontainer">






				<div class="datepick">
					<span class="categorylbl">Set Visiting Schedule</span><br>
					<div class="columns is-mobile">
						<div class="column">
							<span class="subtitle">No of People</span><Br>
							<input id="number" class="number" onclick="addnumber2()" onkeyup="additional2()" type="number" min=1 max=20 name="peopleno">

						</div>
						<div class="column">
							<span class="subtitle">Date</span><br>
							<input id="daytourdate" class="daytourdate" name="daytourdate" type="date" ><br>


						</div>



						<div class="column">
							<span class="subtitle">Time Schedule</span>
							<select name="daytourtime1" id="datetime1" class="datetime1">

								<option value="7am to 10am">7am to 10am</option>
								<option value="10am to 1pm">10am to 1PM</option>
								<option value="1pm to 4pm">1pm to 4PM</option>
								<option value="4pm to 7pm">4pm to 7PM</option>



							</select>
						</div>


					</div>

					<center> <br>
					<button type="button" id="daytourbtn" onclick="checkday()">
					Check Availability
					</button>
					</center>
				</div>





			</div>

  </div>

  <div class="column is-4" style="background-color:;">
    <!-- -->
		<div class="finalcontainer" id="roomBook1" >
		<table class="styled-table" id="bookingtable">
			<thead>
				<tr >
				<th colspan=3>Booking information</th>



				</tr>
			</thead>



			<tbody>

				<tr >
					<td><b><p id="fcategory" ></p></b></td>
				</tr>
				<tr id="ftimeinout" class="ftimeinout">
					<td><b><p id="ftimein"></p></b></td>
					<td><p id="ftimeindate"></p></td>
					<td></td>
				</tr>
				<tr id="ftimeinout1" class="ftimeinout1">
					<td><b><p id="ftimeout"></p><b/></td>
					<td><p id="ftimeoutdate"></p></td>
					<td></td>
				</tr>
				<tr id="fstandardsmall" class="fstandardsmall">
					<td><b><p >Room:</p></b></td>
					<td><p >Standard Cabana <b>SMALL (C1)</b></p></td>
					<td><p id="c1"></p></td>
				</tr>
				<tr id="fstandardsmallsmall" class="fstandardsmallsmall">
					<td><b><p >Room:</p></b></td>
					<td><p >Standard Cabana <b>SMALL (C2)</b></p></td>
					<td><p id="c2"></p></td>
				</tr>
				<tr id="fstandardlarge" class="fstandardlarge">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Standard Cabana <b>LARGE(C3)</b></td>
					<td><p id="c3"></p></td>
				</tr>
				<tr id="fstandardlargelarge" class="fstandardlargelarge">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Standard Cabana <b>LARGE(C4)</b></td>
					<td><p id="c4"></p></td>
				</tr>
				<tr id="fdeluxesmall" class="fdeluxesmall">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Deluxe Cabana <b>SMALL(Cad5)</b></td>
					<td><p id="c5"></p></td>
				</tr>
				<tr id="fdeluxesmallsmall" class="fdeluxesmallsmall">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Deluxe Cabana <b>SMALL(C6)</b></td>
					<td><p id="c6"></p></td>
				</tr>

				<tr id="fdeluxelarge" class="fdeluxelarge">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Deluxe Cabana <b>LARGE(C7)</b></td>
					<td><p id="c7"></p></td>
				</tr>
				<tr id="fdeluxelargelarge" class="fdeluxelargelarge">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Deluxe Cabana <b>LARGE(C8)</b></td>
					<td><p id="c8"></p></td>
				</tr>

				<tr id="ftwinhouse" class="ftwinhouse">
					<td><b><p >Room:</p></b></td>
					<td><p ></p>Twin Ifugao <b>HOUSE</b></td>
					<td><p id="c9">8000</p></td>
				</tr>
				<tr id="fadditional" class="fadditional">
					<td><b><p >Additiona Pax</p></b></td>
					<td><p id="fadditionalpax"></p ></td>
					<td><p id="additionalprice"></p></td>
				</tr>

				<thead class="dateinfo" id="dateinfo">
				<tr >
					<th colspan=3>Date information</th>



				</tr>
				</thead>
				<tr id="fdateplace" class="fdateplace">
					<td id="fdateplace1"></td>
					<td></td>
					<td></td>

				</tr>
				<tr id="fdatetime" class="fdatetime">

					<td id="fdatecategory"></td>
					<td id="fdatetimetime"></td>
					<td id="fdateprice"></td>

				</tr>
				<tr id="ftotal" class="ftotal">

					<td ><b><p>TOTAL:</p></b></td>
					<td ></td>
					<td >
						<input type="text" id="ftotalprice" name="ftotalprice" readonly></input >
					</td>

				</tr>
				<tr id="fdaytour" class="fdaytour">

					<td ><b>No of People:</b><p id="fno"></p ></td>
					<td ><b>Time:</b><p id="ftime"></p></td>
					<td id="fdaytourprice"></td>

				</tr >
				<tr id="ftotal1" class="ftotal1">

					<td ><b><p>TOTAL:</p></b></td>
					<td ></td>
					<td > <input type="text" id="ftotalprice1" name="ftotalprice1" readonly></input ></td>

				</tr>





			</tbody>


		</table>
			<input type="submit" name="daytoursubmit" value="submitday" id="btn1"class="btn1" style="float:right; "></input>
			<input type="submit" name="overnightsubmit" value="submitover" id="btn12" class="btn12" style ="float:right;"></input>
		</div>
	







<!-- 
<label  id="count12" ><?php //echo''.$count; ?> </label>
-->
<script type="text/javascript">
	var count = document.getElementById("count12").innerHTML;
			console.log(count);
	count = parseInt(count);
	for(var i = 1; i <= count ; i++){
		console.log("dsdsds"+i)



	}

</script>


  </div>

</div> <!-- columns end-->
</form>

<div class="columns is-mobile" style="padding-left:20px;">
	<div class="column">

		<img src="images/booking.jpg" class="imagedesign">
	</div>
	<div class="column">
		<img src="images/rules.jpg" class="imagedesign">
		

	</div>
	<div class="column">
		<img src="images/daytour.jpg" class="imagedesign">
		

	</div>


</div>




<br><br><br><br>
<!-- FOOTER -->
<div class="container is-fluid" style="background-color: #292b2c">
  <div class="container">
    <div class="columns is-desktop">
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">IMPORTANT</li>
            <li class="text-footer-sub">Prior Booking is <b>REQUIRED</b></li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">FOLLOW US</li>
            <li class="text-footer-sub"><a href="#"><i class="fab fa-facebook fa-2x"></i></a> <a href="#"><i class="fab fa-twitter fa-2x"></i></a> <a href="#"><i class="fab fa-instagram fa-2x"></i></a> </li>
            <li class="text-footer-sub"></li>
            <li class="text-footer-sub"></li>
          </ul>
        </div>
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">VISIT</li>
            <li class="text-footer-sub"><b>ADDRESS: </b>Sitio Naysawa, Brgy Cuyambay Tanay, Rizal</li>
            <li class="text-footer-sub"><b>VIA COMMUTE: </b>Cogeo Gate2-Sampaloc Jeep (V/V) along Marilaque Highway. Alight at Magsawa Then Tricycle to Ridges</li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">CONTACT US </i></li>
            <li class="text-footer-sub"><b>(GLOBE): </b>0917322445599<br>/09550438152</li>
            <li class="text-footer-sub"><b>(SMART): </b>09214772797</li>
          </ul>
        </div>
    </div>
  </div>
</div>
<!-- END OF FOOTER -->


<!-- The Modal -->
<div id="myModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content">
  	<h1>Step by Step Booking <span class="close">&times;</span></h1>
    <hr>
    <p><b>Step 1: </b> Create an Account</p>
    <p><b>Step 2: </b> Login the Account</p>
    <p><b style=" text-decoration:underline; color:red;">Step 3:</b>  Choose Room Reservation</p>
    <p><b>Step 4: </b> Submit the Booking Request</p>
    <p><b>Step 5: </b> Pay 50% of Booking Cost</p>
    <p><b>Step 6: </b> Wait for the SMS Confirmation of Booking</p>
    <p><b>Step 7: </b> After Receving a text, Print the Booking Receipt Under Account Profile and present it to the camp</p>
  </div>

</div>




	<!-- how to book MODAL -->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>





</body>
</html>
<?php 

if(isset($_POST['daytoursubmit'])){

	$sql = "SELECT * FROM tbl_user WHERE ID = '$customerID' ";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);

	//echo "<script>alert('$row['ID']);</script>";
	$fname = $row['Userfname'];
	$lname =  $row['Userlname'];
	$fullname = $fname . $lname;
	$price = $_POST['ftotalprice1'];

	$nopeople = $_POST['peopleno'];
	$date = $_POST['daytourdate'];
	$time = $_POST['daytourtime1'];
	
	$type ="Daytour";

	$sql = "INSERT INTO tbl_booking (customerID, bpax, bname, btype, bdate, bdaytourtime, bprice)
	VALUES ('$customerID', $nopeople, '$fullname', '$type', '$date', '$time' ,$price)";
	if ($conn->query($sql) === TRUE) {
	  ?>
	  	<script >
	  		
	  		alert("Your booking request has been delivered to  ridges and clouds server, wait for SMS notification for booking confirmation, Thank you!");
	  	</script>

	  <?php
	}else{
		?>
		<script >
	  		
	  		alert("Error!");
	  	</script>

		<?php


	  echo "Error: " . $sql . "<br>" . $conn->error;
	}



}else if(isset($_POST['homelogout'])){

	 session_unset();
  session_destroy();

 ?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php
}else if(isset($_POST['overnightsubmit'])){

$sql = "SELECT * FROM tbl_user WHERE ID = '$customerID' ";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$fname = $row['Userfname'];
$lname =  $row['Userlname'];
$fullname = $fname . $lname;
$date = $_POST['txtDate'];
$type ="Overnight";
$timein = $_POST['timein'];
$timeout = $_POST['timeout'];
$room ="";


	if(!empty($_POST['room'])){
	// getting the checkbox room values
		foreach($_POST['room'] as $selected){
		 
		 $room = $room." ".$selected;
		}
	}
	$additionalpax = $_POST['additionalpax'];
	if( $additionalpax == ""){
		$additionalpax=0;
	}

$dateplace =$_POST['viewdeck12'];
$datetime =$_POST['datetime'];
$datecategory =$_POST['datecategory'];
$price = $_POST['ftotalprice'];
$datecondition = $_POST['date'];
 echo '<script type="text/javascript">alert("'.$datecondition.'")</script>';

	if($datecondition != "nodate"){

		$sql = "INSERT INTO tbl_booking (customerID, bname, bdate, btype, btime_in, btime_out , broom, bpax,btable_date,btable_time, datecategory,bprice)
	VALUES ('$customerID', '$fullname', '$date' ,'$type', '$timein', '$timeout', '$room' ,$additionalpax, '$dateplace','$datetime','$datecategory',$price)";

	}else{
		$sql = "INSERT INTO tbl_booking (customerID, bname, bdate, btype, btime_in, btime_out , broom, bpax,bprice)
	VALUES ('$customerID', '$fullname', '$date' ,'$type', '$timein', '$timeout', '$room' ,$additionalpax,$price)";

	}
	
	



	if ($conn->query($sql) === TRUE) {
	   echo '<script type="text/javascript">alert("successfullll")</script>';
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

 
}

?>