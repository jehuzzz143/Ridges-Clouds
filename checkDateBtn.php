
<script type="text/javascript">
	function checkday(){

		var c = document.getElementById("categ").value;
		var d = document.getElementById("date").value;
		if (c == ""){
			Swal.fire({
                
                  text: 'Please select category',
                  confirmButtonColor:'#292B2C',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {

                  // location.href = 'index.php';
                }
              });
        

		}else if( c == "daytour"){
				if(d==""){
					Swal.fire({
                
		                  text: 'Please select date',
		                  confirmButtonColor:'#292B2C',
		                  confirmButtonText: 'OK'
		                  
		                }).then((result) => {
		                if (result.isConfirmed) {

		                  // location.href = 'index.php';
		                }
		              });
				}else{

					var e = document.getElementById("time_arriaval");
    			var time_value = e.options[e.selectedIndex].value;
    				console.log(time_value);
					$.post('checkJason.php',{valuetime:time_value,date:d},
			    function(data1){
			      $('#result').html(data1)
			    });
				



				}
			
			console.log(c +' '+' '+ d);
		}else if(c == "overnight"){
			if(d==""){
					Swal.fire({
                
		                  text: 'Please select date',
		                  confirmButtonColor:'#292B2C',
		                  confirmButtonText: 'OK'
		                  
		                }).then((result) => {
		                if (result.isConfirmed) {

		                  // location.href = 'index.php';
		                }
		              });
				}else{
				$.post('checkOvernightDate.php',{date:d},
			    function(data2){
			      $('#result1').html(data2)
			    });





				}

		}


	  
	}
</script>