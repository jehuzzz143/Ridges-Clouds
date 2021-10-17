<?php require('config.php');

?>
<!DOCTYPE html>

<html>
<head>
    <title>Calandar</title>
    
    <link href='<?=$dir;?>homecalendar/packages/core/main.css' rel='stylesheet' />
    <link href='<?=$dir;?>homecalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='<?=$dir;?>homecalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='<?=$dir;?>homecalendar/packages/list/main.css' rel='stylesheet' />

    <link href="<?=$dir;?>homecalendar/packages/jqueryui/custom-theme/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href='<?=$dir;?>homecalendar/packages/datepicker/datepicker.css' rel='stylesheet' />
    <link href='<?=$dir;?>homecalendar/packages/colorpicker/bootstrap-colorpicker.min.css' rel='stylesheet' />

    <link href='<?=$dir;?>homecalendar/style.css' rel='stylesheet'/>
    <script src='<?=$dir;?>homecalendar/packages/core/main.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/daygrid/main.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/timegrid/main.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/list/main.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/interaction/main.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/jquery/jquery.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/jqueryui/jqueryui.min.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/bootstrap/js/bootstrap.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/datepicker/datepicker.js'></script>
    <script src='<?=$dir;?>homecalendar/packages/colorpicker/bootstrap-colorpicker.min.js'></script>
    <script src='<?=$dir;?>homecalendar/calendar.js'></script>

    
</head>
<body>

<div class="modal fade" id="addeventmodal" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" style="width:800px; margin: 10 auto;">

            <div class="modal-header">
                <h5 class="modal-title"><b> Booking Id :</b> <label id="bid" name="bid" ></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="container-fluid">

                    <form id="createEvent" class="form-horizontal">
<div id="title-group" class="form-group">
                                <label class="control-label"  for="title">Title</label>
                                <input type="text" class="form-control" id="appid1" name="title">
                                <!-- errors will go here -->
                            </div>
                    <div class="row">

                        <div class="col-md-6">

                            

                            <div id="startdate-group" class="form-group">
                                <label class="control-label" for="startDate">Start Date</label>
                                <input type="text" class="form-control datetimepicker" id="startDate" name="startDate">
                                <!-- errors will go here -->
                            </div>

                            <div id="enddate-group" class="form-group">
                                <label class="control-label" for="endDate">End Date</label>
                                <input type="text" class="form-control datetimepicker" id="endDate" name="endDate">
                                <!-- errors will go here -->
                            </div>

                        </div>

                        <div class="col-md-6">

                          

                            <div id="color-group" class="form-group">
                                <label class="control-label" for="color">Colour</label>
                                <input type="text" class="form-control colorpicker" id="color"name="color" required readonly="">
                                <!-- errors will go here -->
                            </div>
                               <input type="radio" id="c1" name="optradio">C1
                               <input type="radio" id="c2" name="optradio">C2            
                               <input type="radio" id="c3" name="optradio">C3
                               <input type="radio" id="c4" name="optradio" >C4
                               <input type="radio" id="c5" name="optradio">C5           
                               <input type="radio" id="c6" name="optradio">C6
                               <input type="radio" id="c7" name="optradio" >C7            
                               <input type="radio" id="c8" name="optradio">C8
                               <input type="radio" id="tf" name="optradio">TF


                            <div id="textcolor-group" class="form-group">
                                <label class="control-label" for="textcolor">Text Colour</label>
                                <input type="text" class="form-control colorpicker" id="textcolor" name="text_color" required readonly="">
                                <!-- errors will go here -->
                            </div>

                        </div>

                    </div>

                    

                </div>

            </div>

            <div class="modal-footer">
              <button type="button"  data-dismiss="modal">Close</button>
              <button type="submit" >Save changes</button>
            </div>

            </form>
<script>

document.getElementById("c1").onclick =function(){
    document.getElementById("color").value = "#006400";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c2").onclick =function(){
    document.getElementById("color").value = "#006400";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c3").onclick =function(){
    document.getElementById("color").value = "#00008B";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c4").onclick =function(){
    document.getElementById("color").value = "#00008B";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c5").onclick =function(){
    document.getElementById("color").value = "#8B0000  ";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c6").onclick =function(){
    document.getElementById("color").value = "#8B0000  ";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c7").onclick =function(){
    document.getElementById("color").value = "#2F4F4F";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("c8").onclick =function(){
    document.getElementById("color").value = "#2F4F4F";
    document.getElementById("textcolor").value = "#FFFFFF"
}
document.getElementById("tf").onclick =function(){
    document.getElementById("color").value = "#000000";
    document.getElementById("textcolor").value = "#FFFFFF"
}




</script>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="editeventmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width:800px; margin: 10 auto; background-color: white;">

            <div class="modal-header">
                <h5 class="modal-title">Update Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="container-fluid">

                    <form id="editEvent" class="form-horizontal">
                    <input type="hidden" id="editEventId" name="editEventId" value="">
                        <div id="edit-title-group" class="form-group">
                            <label class="control-label" for="editEventTitle">Title</label>
                            <input type="text" class="form-control" id="editEventTitle" name="editEventTitle">
                                
                        </div>

                    <div class="row">

                        <div class="col-md-6">

                            

                            <div id="edit-startdate-group" class="form-group">
                                <label class="control-label" for="editStartDate">Start Date</label>
                                <input type="text" class="form-control datetimepicker" id="editStartDate" name="editStartDate">
                                <!-- errors will go here -->
                            </div>

                            <div id="edit-enddate-group" class="form-group">
                                <label class="control-label" for="editEndDate">End Date</label>
                                <input type="text" class="form-control datetimepicker" id="editEndDate" name="editEndDate">
                                <!-- errors will go here -->
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div id="edit-color-group" class="form-group">
                                <label class="control-label" for="editColor">Colour</label>
                                <input type="text" class="form-control colorpicker" id="editColor" name="editColor" readonly>
                                <!-- errors will go here -->
                            </div>
                                <input type="radio" id="ec1" name="optradio">C1
                                <input type="radio" id="ec2" name="optradio">C2            
                                <input type="radio" id="ec3" name="optradio">C3
                                <input type="radio" id="ec4" name="optradio" >C4
                                <input type="radio" id="ec5" name="optradio">C5           
                                <input type="radio" id="ec6" name="optradio">C6
                                <input type="radio" id="ec7" name="optradio" >C7            
                                <input type="radio" id="ec8" name="optradio">C8
                                <input type="radio" id="etf" name="optradio">TF

                            <div id="edit-textcolor-group" class="form-group">
                                <label class="control-label" for="editTextColor">Text Colour</label>
                                <input type="text" class="form-control colorpicker" id="editTextColor" name="editTextColor" readonly>
                                <!-- errors will go here -->
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
              <button type="button"  data-dismiss="modal">Close</button>
              <button type="submit" >Save changes</button>
              <button type="button"  id="deleteEvent" data-id>Delete</button>
            </div>

            </form>
            <script>
                document.getElementById("ec1").onclick =function(){
                    document.getElementById("editColor").value = "#006400";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec2").onclick =function(){
                    document.getElementById("editColor").value = "#006400";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec3").onclick =function(){
                    document.getElementById("editColor").value = "#00008B";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec4").onclick =function(){
                    document.getElementById("editColor").value = "#00008B";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec5").onclick =function(){
                    document.getElementById("editColor").value = "#8B0000  ";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec6").onclick =function(){
                    document.getElementById("editColor").value = "#8B0000  ";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec7").onclick =function(){
                    document.getElementById("editColor").value = "#2F4F4F";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("ec8").onclick =function(){
                    document.getElementById("editColor").value = "#2F4F4F";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
                document.getElementById("etf").onclick =function(){
                    document.getElementById("editColor").value = "#000000";
                    document.getElementById("editTextColor").value = "#FFFFFF"
                }
            </script>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container" id="calendarsection"style="margin-top:20px;background-color:white; width:100%; background-color: ;">
    <center> <h2 style="font-weight: bold; letter-spacing: 5px; font-size:3em;">Business Calendar </h2></center>
    <hr>
    

    

    <div id="calendar" style="pointer-events: none;  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);

  background-color: #ccc;"></div>
  
</div>

</body>
</html>
