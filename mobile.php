<!DOCTYPE html>
<html>
 
<head>
    
    
    
    
    <link rel="shortcut icon" href="http://d-bird.org/images/nyca-fav-icon.ico">
    
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0' >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>

        
	<title>D-Bird: Audubon Bird Mortality Database</title>
        
    <meta charset="utf-8">

        
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    
    
    <link rel="stylesheet" href="foundation.css" />
    <link rel="stylesheet" href="foundation-icons.css">
    <link rel="stylesheet" href="mobiapps.css" />
    <link rel="stylesheet" href="site_navbar.css" />
    <link rel="stylesheet" href="radio.buttons.css" />
    <link rel="stylesheet" href="map_popup.css" />

        
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>

        
    <script src="l.control.geosearchmobi.js"></script>
    <script src="l.geosearch.provider.google.js"></script>
    <link rel="stylesheet" href="http://smeijer.github.io/GeoSearch/css/l.geosearch.css" />
            

	
	<!-- NEW DATEPICKER	-->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
	<script>
		$(function() {
		$( "#entry_1089406598" ).datepicker({maxDate: "+0D" , dateFormat: "yy-mm-dd"});
		});
	</script>
	<!-- NEW DATEPICKER -->

	
	<!-- NEW TIMEPICKER -->
	<script type="text/javascript" src="jquery.timepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
	

	<script>
		$(function() {
		$( "#entry_1322686028" ).timepicker();
		});
	</script> 
	<!-- NEW TIMEPICKER -->		
        

	<!-- THANK YOU REDIRECT -->
    <script type="text/javascript">var submitted=false;</script>
    
    
   
    <!--STOPS FORM SUBMISSION WHEN ENTER KEY IS PRESSED (SUCH AS ADDRESS SEARCH)-->          
    <script type="text/javascript"> 
        function stopRKey(evt) { 
            var evt = (evt) ? evt : ((event) ? event : null); 
            var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
            if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
            } 

        document.onkeypress = stopRKey; 
    </script>
    

    
    <style>
        .animated { 
                -webkit-animation-duration: 2.5s; 
                animation-duration: 2.5s; 
                -webkit-animation-fill-mode: both; 
                animation-fill-mode: both; 
                -webkit-animation-timing-function: ease-in-out; 
                animation-timing-function: ease-in-out; 
                animation-iteration-count:infinite; 
                -webkit-animation-iteration-count:infinite; 
           } 

            @-webkit-keyframes flash { 
                0%, 50%, 100% {opacity: 1;} 
                25%, 75% {opacity: 0;} 
                } 

            @keyframes flash { 
                0%, 50%, 100% {opacity: 1;} 
                25%, 75% {opacity: 0;} 
            } 

            .flash { 
                -webkit-animation-name: flash; 
                animation-name: flash; 
            }
    </style>
    

        
</head>
    
 
    
    
       
<body>
    
    
    
    
    <div class="contain-to-grid nav-container">
        <nav class="top-bar" data-topbar role="navigation">
            
            <ul class="title-area">
                <li class="name show-for-small-only">
                    <h1><a href="#">D-Bird.org/tx</a></h1>
                        <div class="powered-by">
                        <span>Powered by </span><a href="http://www.nycaudubon.org/index.php" target="blank"><img src="http://d-bird.org/images/nyca-banner.jpg"  style="width: 111px; height: 30px; vertical-align: middle;"/></a>
                        </div>
                </li>
            </ul>
            
            
            <ul class="title-area">
                <li class="name show-for-medium-up">
                    <h1><a href="#">D-Bird.org/tx</a></h1>
                        <div class="powered-by">
                    <span>Powered by </span><a href="http://www.nycaudubon.org/index.php" target="blank"><img src="http://d-bird.org/images/nyca-banner.jpg"  style="width: 144px; height: 39px; vertical-align: middle;"/></a>
                        </div>
                </li>
            </ul>
            
        </nav>
    </div>
    
    
    
    
    
    
    
    
    
    
    <div class="row" id="hero">
        


        <div class="small-12 medium-6 large-6 columns info">


            <div style="padding: 0px 20px 0px 20px;">

                <p style="text-align:justify;"><strong style="color:rgba(100,100,100,1.0);">If you find a dead or injured bird, you can make an important contribution to <a href="http://tx.audubon.org/urban-conservation" target="blank">Audubon Texas' conservation work</a> by submitting the information through D-Bird.</p>
                    <a href="http://tx.audubon.org/birds/injured-sick-or-orphaned-birds-wildlife" target="_blank">Click here</a> for information on wildlife rehabilitators.</p>
                    
                    <div style="font-size: 22px">Scroll down to start a report.</div></strong>
                </p>
    
            </div>

        </div>
    </div>
    
    
    
    
    


    
        <div id="mainDReport"><br/>
    
    
            <div class="row" style="text-align:center;">
                <h2>D-BIRD REPORT</h2>
            </div><br/>
                
   

          <form action="D-Bird.php" method="POST" enctype="multipart/form-data" id="ss-form" name="form">
          
             
              <input type="text" id="honey" name="honey"></input>

          

            <div class="row">
                <span style="font-weight:bold;color:rgba(170,170,170,1.0);margin-left:20px;"><i>* indicates required field</i></span>
            </div>
              
              
    
              
                          <div class="row">
                <div class="small-12 medium-12 large-12 columns">
                    <div class="panel">
                
                        <h4>1. Select Location *</h4>
                            <div class="show-for-small-up"><label>Tell us where you found the bird - search by address or zoom and click the location</label></div><br/>
                    
                            <div id="map"></div>
                        

                            <fieldset form="ss-form">    
                        
                                <div class="ss-form-question errorbox-good" role="listitem" style="display: none">
                                    <div dir="ltr" class="ss-item ss-item-required ss-text">
                                        <div class="ss-form-entry">
                                            <label class="ss-q-item-label" for="entry_563161073">
                                                <div class="ss-q-title">Lati
                                                    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                                    <span class="ss-required-asterisk" aria-hidden="true">*</span>
                                                </div>
                                                <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                            </label></br>
                                        <input type="text" name="latitude" value="" class="ss-q-short" id="entry_563161073" dir="auto" aria-label="Lati  " aria-required="true" required="" title="">
                                        <div class="error-message" id="539929646_errorMessage"></div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="ss-form-question errorbox-good" role="listitem" style="display: none">
                                    <div dir="ltr" class="ss-item ss-item-required ss-text">
                                        <div class="ss-form-entry">
                                            <label class="ss-q-item-label" for="entry_195156901">
                                                <div class="ss-q-title">Longi
                                                    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                                    <span class="ss-required-asterisk" aria-hidden="true">*</span>
                                                </div>
                                                <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                            </label></br>
                                            <input type="text" name="longitude" value="" class="ss-q-short" id="entry_195156901" dir="auto" aria-label="Longi  " aria-required="true" required="" title="">
                                            <div class="error-message" id="2126906813_errorMessage"></div>
                                        </div>
                                    </div>
                                </div>

                        </fieldset>

                    </div>
                </div>
            </div>
              
              
              
              
              
              
              
              <div class="row">
                  <div class="small-12 medium-6 large-6 columns">
                    <div class="panel">
              
                        <h4>2. About the bird</h4>
                  
                  <div class="row collapse foundation-radio-button-row">
                    <fieldset form="ss-form" class="radios" data-role="controlgroup" data-type="horizontal">
                                    <label class="ss-q-item-label" for="entry_221032589">
                                        <div class="ss-q-title">Dead or injured *
                                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                        </div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                <div class="small-6 medium-6 large-6 columns foundation-radio-button">
                                            <input type="radio" name="deadinjured" value="Dead" id="group_1760098207_1" role="radio" class="button expand first_radio" aria-label="Dead" required="" aria-required="true" checked>
                                            <label for="group_1760098207_1">Dead</label>
                                </div>
                                    
                                <div class="small-6 medium-6 large-6 columns foundation-radio-button">
                                            <input type="radio" name="deadinjured" value="Injured" id="group_1760098207_2" role="radio" class="button expand first_radio" aria-label="Injured" required="" aria-required="true">
                                            <label for="group_1760098207_2">Injured</label>
                                </div>
                                <div class="error-message" id="221032589_errorMessage"></div>
                    </fieldset>
                  </div>
                  

                  
                  <div class="row collapse foundation-radio-button-row">
                      <fieldset form="ss-form" class="radios" data-role="controlgroup" data-type="horizontal">
                            <div class="ss-form-question errorbox-good" role="listitem">
                                <div dir="ltr" class="ss-item  ss-radio">
                                    <div class="ss-form-entry">
                                        <label class="ss-q-item-label" for="entry_1834684349">
                                            <div class="ss-q-title">Sex</div>
                                            <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                        </label>
                                    <div class="small-4 medium-4 large-4 columns foundation-radio-button">
                                                <input type="radio" name="sex" value="Male" id="group_1162522983_1" role="radio" class="button expand first_radio" aria-label="Male">
                                                <label for="group_1162522983_1">Male</label>
                                    </div>
                                    <div class="small-4 medium-4 large-4 columns foundation-radio-button">  
                                                <input type="radio" name="sex" value="Female" id="group_1162522983_2" role="radio" class="button expand first_radio" aria-label="Female">
                                                <label for="group_1162522983_2">Female</label>  
                                    </div>
                                    <div class="small-4 medium-4 large-4 columns foundation-radio-button">
                                                <input type="radio" name="sex" value="Unknown" id="group_1162522983_3" role="radio" class="button expand first_radio" aria-label="Unknown" checked>
                                                <label for="group_1162522983_3">Unknown</label>  
                                    </div>  
                                    <div class="error-message" id="1834684349_errorMessage"></div>
                                </div>
                            </div>
                        </div> 
          
                    </fieldset>
              </div>
          

            <div class="row collapse foundation-radio-button-row">
                <fieldset form="ss-form" class="radios" data-role="controlgroup" data-type="horizontal">
                    <div class="ss-form-question errorbox-good" role="listitem">
                        <div dir="ltr" class="ss-item  ss-radio">
                            <div class="ss-form-entry">
                                <label class="ss-q-item-label" for="entry_1772754323">
                                    <div class="ss-q-title">Age</div>
                                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                </label>
                                <div class="small-4 medium-4 large-4 columns foundation-radio-button">
                                    <input type="radio" name="age" value="Adult" id="group_968826813_1" role="radio" class="button expand first_radio" aria-label="Adult">
                                    <label for="group_968826813_1">Adult</label>  
                                </div>
                                <div class="small-4 medium-4 large-4 columns foundation-radio-button">    
                                    <input type="radio" name="age" value="Juvenile" id="group_968826813_2" role="radio" class="button expand first_radio" aria-label="Juvenile">
                                    <label for="group_968826813_2">Juvenile</label>    
                                </div>
                                <div class="small-4 medium-4 large-4 columns foundation-radio-button">
                                    <input type="radio" name="age" value="Unknown" id="group_968826813_3" role="radio" class="button expand first_radio" aria-label="Unknown" checked>
                                    <label for="group_968826813_3">Unknown</label>  
                                </div>
                                <div class="error-message" id="1772754323_errorMessage"></div>
                            </div>
                        </div>
                    </div>
          
                </fieldset>
            </div>
                        
                        
                <fieldset form="ss-form">
                    <div class="ss-form-question errorbox-good" role="listitem">
                        <div dir="ltr" class="ss-item ss-item-required ss-select">
                            <div class="ss-form-entry">
                                <label class="ss-q-item-label" for="entry_212797529">
                                    <div class="ss-q-title">Species *
                                        <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                    </div>
                                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                </label>
                                <div class="textInput">
                                    <select name="species" id="entry_212797529" aria-label="Species  " aria-required="true" required="">
                                        <option value="" disabled selected>Select species</option>
                                        
                                        
                                        <?php
    
                                            $servername = "localhost";
                                            $username = "***";
                                            $password = "***";
                                            $dbname = "******";

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "SELECT species_value, species_display from Texas";
                                            $result = mysqli_query($conn, $query);

                                            while($row = mysqli_fetch_array($result)) {
                                                    echo "<option value='".$row['species_value']."'>".$row['species_display']."</option>";
                                            }

    				                    ?>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                  </fieldset>


                    <div class="show-for-small-only">
                        <label>Upload an image of the bird</label>
                        <input type="file" name="fileToUploadMobile" id="fileToUploadMobile">
                        <div id="clearMobile">Remove image</div>
                    </div>
                

            </div><!--PANEL-->
        </div>
    
    
    

                
                <div class="small-12 medium-6 large-6 columns">
                    <div class="panel">
                
                        <fieldset form="ss-form">
                            <h4>3. Details</h4>
                            
                            
                                <div class="ss-form-question errorbox-good" role="listitem">
                                        <label for="entry_1089406598">Date found *</label>
                                                <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>

                                        <div class="textInput">
                                            <input type="text" name="date" value="" class="ss-q-short" id="entry_1089406598" dir="auto" aria-label="Datefound  " aria-required="true" required="" title="" readonly="true">
                                            <div class="error-message" id="1349885659_errorMessage"></div>
                                        </div>
                                </div>
                            
                            
                            
                                <div class="ss-form-question errorbox-good" role="listitem">
                                        <label for="entry_1322686028">Time found *</label>
                                                <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                        <div class="textInput">
                                            <input type="text" name="time" value="" class="ss-q-short" id="entry_1322686028" dir="auto" aria-label="Time Found  " aria-required="true" required="" title="">
                                            <div class="error-message" id="730570887_errorMessage"></div>
                                        </div>
                                    
                                </div>
                            

                            
                                <div dir="ltr" class="ss-item  ss-text">
                                        <label for="entry_583437283">Your name</label>
                                        <div class="textInput">
                                            <input type="text" name="name" value="" class="ss-q-short" id="entry_583437283" dir="auto" aria-label="Your name  " title="">
                                            <div class="error-message" id="648750362_errorMessage"></div>
                                        </div>
                                </div>
                            
                    
                                <div dir="ltr" class="ss-item  ss-text">
                                        <label for="entry_1267380138">Contact info</label>
                                        <div class="textInput">
                                            <input type="text" name="contact_info" value="" class="ss-q-short" id="entry_1267380138" dir="auto" aria-label="Contact info  " title="">
                                            <div class="error-message" id="633149000_errorMessage"></div>
                                        </div>
                                </div>
                            
                        </fieldset>

                    </div><!--PANEL-->
                </div>

            </div><!--ROW-->



                



                



                <div class="row">
                    <div class="small-12 medium-8 large-8 columns"> 
                        <div class="panel">
              
                            <fieldset form="ss-form">
                                <h4>4. Additional Observations</h4>
                    
                                    <div class="ss-form-question errorbox-good" role="listitem">
                                        <div dir="ltr" class="ss-item  ss-text">
                                            <div class="ss-form-entry">
                                                <label class="ss-q-item-label" for="entry_389816901">
                                                    <div class="ss-q-title">Notes</div>
                                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                                </label>
                                                <div class="textInput">
                                                    <textarea name="notes" value="" class="ss-q-short" id="entry_389816901" dir="auto" aria-label="Notes  " title=""></textarea>
                                                    <div class="error-message" id="534155811_errorMessage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </fieldset>
                
                        </div>
                    </div>              
                </div>











          
        
          
            <div class="row">
                <div id="submitDiv" class="small-12 medium-4 large-4 columns">
    
                    
                                      <input form="ss-form" type="submit" name="submit" value="Submit" id="ss-submit" class="button expand">
                                  
              
                </div>
            </div>
          
          
            </form>
  
        </div>









   
    <div style="font-size: 12px">
    Created by Darren Klein for NYC Audubon</br>
    Design by <a href="http://patrickharry.com/" target="blank">Patrick Harry UX</a></br>
    Special thanks to Eric Brelsford
    </div>








    <script>
        
        $("#honey").hide()
        
        
        //MAP FUNCTIONS
        var map;
        
        var marker;
        
        var geosearchControl;

            $(document).ready(function () {
                
                map = L.map('map', {scrollWheelZoom: true}).setView([31.364162, -99.018081], 5);

                geosearchControl = new L.Control.GeoSearch({
                    provider: new L.GeoSearch.Provider.Google({
                        componentRestrictions: {"administrativeArea":"TX"}
                    }),
                    position: 'topcenter'
                }).addTo(map);
                
                map.on('geosearch_showlocation', function(e) {
                    if (marker){
                        map.removeLayer(marker)
                        marker=undefined
                        }
                    $('#entry_563161073').val(e.Location.Y); 
				    $('#entry_195156901').val(e.Location.X);
                });
                
                               
                L.tileLayer('https://{s}.tiles.mapbox.com/v3/ebrelsford.ho06j5h0/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery &copy; <a href="http://mapbox.com">Mapbox</a>'
                }).addTo(map);
             
				function onMapClick(e) {
                    if(geosearchControl._positionMarker){
                        map.removeLayer(geosearchControl._positionMarker)
                        geosearchControl._positionMarker=undefined
                    }
                    if (marker){
                        map.removeLayer(marker);
                    }
                    marker=L.marker(e.latlng).addTo(map);
						$('#entry_563161073').val(e.latlng.lat)
						$('#entry_195156901').val(e.latlng.lng)
						}	

					map.on('click', onMapClick);        
            });
        
        
        
        
        
        $("#ss-submit").click(function() {
            
            var latField = document.forms["form"]["latitude"].value;
            var speciesField = document.forms["form"]["species"].value;
            var dateField = document.forms["form"]["date"].value;
            var timeField = document.forms["form"]["time"].value;
            
            if (latField === "" || speciesField === "" || dateField === "" || timeField === ""){
            
            if (latField === ""){
                alert("Please provide a location");
                }
            
            if (speciesField === ""){
                alert("Please select a species");
                }
            
            if (dateField === ""){
                alert("Please select a date");
                }
            
            if (timeField === ""){
                alert("Please select a time");
                }

                return false;
            }
            
            else{
                $("#ss-submit").hide();
                $("#submitDiv").append('<div id="submitting" class="animated flash small-12 columns">Submitting...</div>');
            };
        });
        
        
        var mobile_file = $("#fileToUploadMobile");

        $("#clearMobile").on("click", function () {
            mobile_file.replaceWith(mobile_file = mobile_file.clone(true));
        });
        
                        
    </script>





</body>
</html>