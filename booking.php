<?php
include "dbconnection/conn.php";


//adding new visitor
$visitor_ip=$_SERVER['REMOTE_ADDR'];
//below for testing
//$visitor_ip ="54:54:54:555";
$query="SELECT * FROM tbl_visitor WHERE ip_address='$visitor_ip'";
$result=mysqli_query($conn, $query);
if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}

/* ############################################################################# ^Ip addresss insertion */
//retriving existing visitors
$query="SELECT * FROM tbl_visitor";
$result=mysqli_query($conn, $query);

if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- date formatting -->
<script src="https://momentjs.com/downloads/moment.js"></script>


<!-- calendar retirction-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  still working without this-->



<!-- Script animation -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<script >

		
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
		
	var y =	document.getElementById("starttime").value =start;
		document.getElementById("endtime").value =end;
		document.getElementById("ftimein").innerHTML ="Time In:";
		document.getElementById("ftimeindate").innerHTML =  fstart +" |  2:00 PM";
		document.getElementById("ftimeout").innerHTML ="Time Out:";
		document.getElementById("ftimeoutdate").innerHTML = moment(date1).format("YYYY-MM-DD") +" |  12:00 NN";

	}
}



	function room(){
		var ssvalue = document.getElementById("standardsmall");
		

		if (ssvalue.checked == true){
	
		     $(function () {
	         $('#fstandardsmall').removeClass('fstandardsmall');
	  	     });

				document.getElementById("fstandardsmall").style.display ="";
				price += 2500;
					console.log(price);
		}else{
		  	document.getElementById("fstandardsmall").style.display ="none";
		  		price -= 2500;
		  		console.log(price);
		}

	}
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
	function room2(){
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
	}
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

				price += 5000;
				document.getElementById("ftwinhouse").style.display ="";
				console.log(price);
		  }else{
		  	document.getElementById("ftwinhouse").style.display ="none";
		  		price -= 5000;
		  		console.log(price);
		  	
		}
	}
	
	function addnumber(){
		var x = document.getElementById("addpax").value;
		  $("[type='number']").keypress(function (evt) {
		    evt.preventDefault();
		});
		if(x>0){


			document.getElementById("additional").disabled = false;

		}else{
			document.getElementById("additional").disabled = true;

		}

	}

	function additional(){
		var x = document.getElementById("addpax").value;
		console.log(x);

		if(x > 0){
			$(function () {
		        $('#fadditional').removeClass('fadditional');  
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
		if(x>0){


			document.getElementById("additional").disabled = false;

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

	function datecat(){
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
	    	document.getElementById("fdateprice").innerHTML ="500";
	    	
	    }else{
	    	document.getElementById("fdateprice").innerHTML ="1000";
	    	
	    }

	}
	function datecat1(){
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
	    	document.getElementById("fdateprice").innerHTML ="400";
	    	
	    }else{
	    	document.getElementById("fdateprice").innerHTML ="700";
	    	
	    }

	}
	function datecat2(){
		$(function () {
	        $('#fdatetime').removeClass('fdatetime');
	      
	    });
	    document.getElementById("fdatecategory").innerHTML =" Romantic Dinner";
	     document.getElementById("Sunrise").disabled=true;
	    document.getElementById("coffeedate").disabled=true;
	    document.getElementById("romanticdinnger").disabled=false;
	     var x = document.getElementById("veranda").checked;
	    if(x == true){
	    	document.getElementById("fdateprice").innerHTML ="1000";
	    	
	    }else{
	    	document.getElementById("fdateprice").innerHTML ="1500";
	    	
	    }

	}

	function changeFunc() {
    var selectBox = document.getElementById("datetime");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   		document.getElementById("fdatetimetime").innerHTML = selectedValue;
   }

   	function checkprice(){
   		
   		var date = document.getElementById("txtDate").value;
   		var r1 = document.getElementById("standardsmall");
   		var r2 = document.getElementById("standardlarge");
   		var r3 = document.getElementById("deluxesmall");
   		var r4 = document.getElementById("deluxelarge");
   		var r5 = document.getElementById("twinifugao");
   		var yes = document.getElementById("dateyes");
   		var no = document.getElementById("dateno");
   		
/* */
   		if( date == ""){
   			alert("Select Date First!");
   		}else if( r1.checked==false && r2.checked==false && r3.checked==false && r4.checked==false && r5.checked==false){

   			alert("Choose Room!");

   		}/*else if(yes.checked ==false && no.checked==false){
   			alert("are you going to date? Please select answer");

   		}*/else{
   			$(function () {
	        $('#ftotal').removeClass('ftotal');
	      
	          
	    });	

   		var dateprice = 	document.getElementById("fdateprice").innerHTML;
   		dateprice = parseInt(dateprice);
   		var addprice = document.getElementById("additionalprice").innerHTML;
   		addprice = parseInt(addprice);

   		if(no.checked){
   				price = price +  addprice;

	   				document.getElementById("ftotalprice").innerHTML = price;


	 
	   		price = price -addprice;


   		}else{
	   		if(addprice > 0){
	   			price = price + dateprice + addprice;

	   				document.getElementById("ftotalprice").innerHTML = price;


	   		price = price - dateprice;
	   		price = price -addprice;

	   		}else{
	   			price = price + dateprice;
	   				console.log(price);
	   				document.getElementById("ftotalprice").innerHTML = price;


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
<div class="container-lg" style="margin:0; padding:0;">
	<div class="row" style="margin:0; padding:0;" >
		<div class=" col" id="roomBook" >

			<div class="headerBook">
				<i class="fas fa-calendar-alt"></i>  Make Room Reservation in Minutes
			</div>
			<span class="categorylbl">Choose Booking Category</span><br>
			
				<input type="radio" class="dateyes" onclick="overnight()" id="overnight" name="service">  Overnight
				<input type="radio" class="dateyes" onclick="daytour()" id="daytour" name="service">  Daytour
		 
		 
		 <div class="overnightcontainer" id="overnightcontainer">
		 	<div class="datepick">
			<span class="categorylbl" >Choose Date</span><br>
			    <div class="row align-items-start">
				    <div class="col">
				      
				      <input id="txtDate"  class="txtDate" type="date"><br>
				      <button id="confirmdate" onclick="date2()">Confirm Date</button>
				    </div>
				    <div class="col">
				      <span class="subtitle">Time in</span>
				      <input id="starttime" type="datetime-local" readonly><br>
				  
				      <span class="subtitle">Time out</span>
				      <input id="endtime" type="datetime-local" readonly>
				    </div>
			    </div>
			</div>


		 	<span class="categorylbl">Choose Room</span><br>
			<div class="row align-items-end" >
			   <div class="col">
			      <img  class="roomimage" src="style/images/standardcabana.jpg" alt="Standard Cabana">
			      <div class="center">
				      <span class="subtitle">Standard Cabana(2pax)</span>	 
				  </div>
			   </div>
			   <div class="col">
			      <img class="roomimage"src="style/images/deluxecabana.jpg" alt="deluxe Cabana">
			      <div class="center">
				      <span class="subtitle">Deluxe Cabana(2 pax)</span>	 
				  </div>
			   </div>
			   <div class="col">
			      <img class="roomimage"src="style/images/twinifugao.jpg" alt="Twin Ifugao House">
			      <div class="center">
				      <span class="subtitle">Twin Ifugao(6pax)</span>	 
				  </div>
			      
			   </div>
		 	</div>

			<div class="row align-items-end" style="border-bottom: thick double #32a1ce; padding:0; margin:0;">

			  <div class="col">
			  	<div class="center">
			      <input class="checkroom" id="standardsmall" type="checkbox" onchange="room()"> Small</input>
			      <input class="checkroom" id="standardlarge" type="checkbox" onchange="room1()"> Large</input>
			    </div>
			  </div>
			  <div class="col">
			  	<div class="center">
			      <input class="checkroom" id="deluxesmall" type="checkbox" onchange="room2()"> Small</input>
			      <input class="checkroom" id="deluxelarge" type="checkbox" onchange="room3()"> Large</input>
			    </div> 
			  </div>
			  <div class="col">
			  	<div class="center">
			    	<input class="checkroom" id="twinifugao" type="checkbox" onchange="room4()"> Ifugao House</input>
			    </div>
			</div>

			  
			</div>
			<div class="container" style="border-bottom: thick double #32a1ce;">
				<span class="categorylbl">insufficient pax? Add-on 500 each</span><br>
				 <span class="subtitle">No. additional People</span><Br>
				<input type=number id="addpax" onclick="addnumber()" onkeyup="additional1()" style="width:60px; margin-left:20px;" min=0 max=10> 
				<button  id="additional"  onclick="additional()"> Add</button> <br>
			</div>


			<span class="categorylbl">Would You Like To do Romantic Date?</span><br>
			
				<input type="radio" id="dateyes" class="dateyes" onclick="dateyes()" name="date">  Yes
				<input type="radio" id="dateno"class="dateyes" onclick="dateno()" name="date" >  No

			
			<div class="datecontainer" id="datecontainer" style="margin:0; padding:0; ">
				<div class="headerBook" style="background-color:#FA8072; border-bottom: 3px solid #DC143C;">
					<i class="fas fa-utensils"></i>  Romantic Date Reservation <i class="fas fa-utensils"></i>
				</div>
				<span class="categorylbl" >Choose Location</span><br>
			    <div class="row align-items-start" style="border-bottom: thick double #32a1ce;">
				    <div class="col">
				     
				      <img class="roomimage" onclick="viewdeck()" src="style/images/viewdeck.jpg" alt="ViewDeck">
				       <div class="center">
				      	 <span class="subtitle" >View Deck</span>
				      	 <input type="radio" id="viewdeck"  name="viewdeck">
				   	   </div>
				    </div>
				    <div class="col">
				      
				      <img class="roomimage" onclick="veranda()" src="style/images/veranda.jpg" alt="ViewDeck">
				      <div class="center">
				      	 <span class="subtitle" >Veranda</span>
				      	 <input type="radio" id="veranda" name="viewdeck">
				   	   </div>
				      
				    </div>
			    </div>
			    <span class="categorylbl">Choose Date Available (One only)</span><br>
			    <span class="subcategorylbl">any additional dates can settle onsite</span>



			
			<div class="container" style="border-bottom: thick double #32a1ce;">
			    <div class="row align-items-start">
				    <div class="col"> 
				    	<br>
				    	<div style="margin: auto; padding-left:50px;">
					      <input type="radio" class="datecategory" name="datecategory" id="sun" onchange="datecat()" > Sunrise Breakfast <br>
					      <input type="radio" class="datecategory" name="datecategory" id="cof"onchange="datecat1()" > Coffee Date <br>
					      <input type="radio" class="datecategory" name="datecategory" id="din"onchange="datecat2()"> romantic Dinner <br>
					    </div>
				   


				    </div>
				    <div class="col">
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
		 </div>

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

	      
	    });
	    people = parseInt(people);

	    var dprice = people * 200;

		document.getElementById("fno").innerHTML = people;
		document.getElementById("ftime").innerHTML = date;
		document.getElementById("fdaytourprice").innerHTML = dprice;
		document.getElementById("ftotalprice1").innerHTML = dprice;
		


		console.log(people)
	console.log(date)
	console.log(selectedValue)
	}

	


	}




</script>
		 <div class="daytourcontainer" id="daytourcontainer">
		 	
			

			

			
			<div class="datepick">
			<span class="categorylbl">Set Visiting Schedule</span><br>
			    <div class="row align-items-start">
				    <div class="col">
				      <span class="subtitle">No of People</span><Br>
				      <input id="number" class="number" onclick="addnumber2()" onkeyup="additional2()" type="number" min=1 max=20>
				     
				    </div>
				    <div class="col">
				      <span class="subtitle">Date</span><br>
				      <input id="daytourdate" class="daytourdate" name="daytourdate" type="date" ><br>
				  
				      
				    </div>



				    <div class="col">
				      <span class="subtitle">Time Schedule</span>
				      <select name="daytour" id="datetime1" class="datetime1">
						 
						    <option value="7am to 10am">7am to 10am</option>
						    <option value="10am to 1pm">10am to 1PM</option>
						    <option value="1pm to 4pm">1pm to 4PM</option>
						    <option value="4pm to 7pm">4pm to 7PM</option>

						  
						
					  </select>
				    </div>
				  
				    
			    </div>
			    <center> <br>
				    	<button id="daytourbtn" onclick="checkday()">
				    		Check Availability
				    	</button>
				    </center>
			</div>





		 </div>

		</div>
		<!-- -->
		
		<div class="col finalcontainer" id="roomBook1" >
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
		 			  <td><p >Standard Cabana <b>SMALL</b></p></td>
		 			  <td><p>2500</p></td>
		          </tr>
		          <tr id="fstandardlarge" class="fstandardlarge">
		          	  <td><b><p >Room:</p></b></td>
		 			  <td><p ></p>Standard Cabana <b>LARGE</b></td>
		 			  <td><p >3000</p></td>
		          </tr>
		           <tr id="fdeluxesmall" class="fdeluxesmall">
		          	  <td><b><p >Room:</p></b></td>
		 			  <td><p ></p>Deluxe Cabana <b>SMALL</b></td>
		 			  <td><p >4000</p></td>
		          </tr>
		          
		           <tr id="fdeluxelarge" class="fdeluxelarge">
		          	  <td><b><p >Room:</p></b></td>
		 			  <td><p ></p>Deluxe Cabana <b>LARGE</b></td>
		 			  <td><p >5000</p></td>
		          </tr>
		          
		           <tr id="ftwinhouse" class="ftwinhouse">
		          	  <td><b><p >Room:</p></b></td>
		 			  <td><p ></p>Twin Ifugao <b>HOUSE</b></td>
		 			  <td><p >8000</p></td>
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
		      	  	<td id="fdateplace1"></Td>
		      	  	<td></td>
		      	  	<td></td>

		      	  </tr>
		      	   <tr id="fdatetime" class="fdatetime">
		      	  	
		      	  	<td id="fdatecategory"></td>
		      	  	<td id="fdatetimetime"></td>
		      	  	<td id="fdateprice"></Td>

		      	  </tr>
		      	  <tr id="ftotal" class="ftotal">
		      	  	
		      	  	<td ><b><p>TOTAL:</p></b></td>
		      	  	<td ></td>
		      	  	<td id="ftotalprice"></Td>

		      	  </tr>
		      	    <tr id="fdaytour" class="fdaytour">
		      	  	
		      	  	<td ><b>No of People:</b><p id="fno"></p ></td>
		      	  	<td ><b>Time:</b><p id="ftime"></p></td>
		      	  	<td id="fdaytourprice"></Td>

		      	  </tr >
		      	    <tr id="ftotal1" class="ftotal1">
		      	  	
		      	  	<td ><b><p>TOTAL:</p></b></td>
		      	  	<td ></td>
		      	  	<td id="ftotalprice1"></Td>

		      	  </tr>
		          
		          
		             
		         

		      </tbody>
		   

            </table>
            <input type="submit" name="daytoursubmit" value="submitday" style="position:fixed; "></input>
            <input type="submit" name="overnightsubmit" value="submitover" style="float:right;"></input>
		</div>
	</div>
</div>




<div class="container confirm" id="confirm" >
	<div class="row">
		<div class="col" >
			


				<a href="#roomBook1" id="checkprice" style="color:red;" onclick="checkprice()">Check Price</a>

			
		</div>
		<div class="col">
			




			
		</div>


	</div>
	

</div>

<p id="error">Error Message</p>
<br><br><br><br>

<script >

</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>