<!-- save Button script -->
<script type="text/javascript">
    var input = document.querySelectorAll(".reviewID");
    var save_review_post = document.querySelectorAll(".reviewBtnSave");
    for (var i = 0; i < save_review_post.length; i++) {
      save_review_post[i].onclick = function(e) {
        $tr = $(this).closest('.review-row').find("p");
        var data = $tr.map(function(){
         return $(this).text();
         }).get();
        console.log(data);
          $( ".reviewID" ).each(function( index ) {
          $(this).val(data[0]);
        });
      }

    }

    var disable_review_post = document.querySelectorAll(".reviewBtnDisabled");
    for (var i = 0; i < disable_review_post.length; i++) {
      disable_review_post[i].onclick = function(e) {
        $tr = $(this).closest('.review-row').find("p");

        var data = $tr.map(function(){
         return $(this).text();
         }).get();
        console.log(data);
        // console.log(disable_review_post[i]);
        // document.getElementById("reviewID").value = data[0];

        $( ".reviewID" ).each(function( index ) {
          $(this).val(data[0]);
        });
      
      }
     

    }
   

  

</script>
<!-- save Button end script -->