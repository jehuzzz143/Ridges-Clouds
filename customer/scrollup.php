<style type="text/css">

.scrollup {
    
    position: fixed;
    bottom: 50px;
    left: 120;
    padding: .5%;
    border-top-right-radius: 6%;
    border-bottom-right-radius: 6%;
    background-color:#E09F5B;
    color:  #F7F7F7;
    font-family: Poppins, sans-serif;
    transition-duration: 0.5s;
}
.scrollup:hover{
    background-color:#F7F7F7;
    color:  black;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #f7f7f7;
  margin: auto;
  padding: 30px;
  border: 1px solid #888;
  border-radius: 8px;
  width:400px;
}
.modal-content h1{
  font-weight: bold;
  
}
.modal-content p,.modal-content h1,.modal-content b{
  margin-top: 5px;
  font-family: 'Poppins' sans-serif;

}
</style>

<a href="#" class="scrollup" >STEPS ON BOOKING</i></a>

<script>
  $(document).ready(function () {


    $('.scrollup').click(function () {
          modal.style.display = "block";
    });

});

  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
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