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