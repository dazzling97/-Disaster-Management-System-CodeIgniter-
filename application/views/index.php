<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>



<title>Disaster management system</title>

        
        
        

		<!-- Latest compiled and minified CSS -->
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
        <script src="js/java.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/c.css">


</head>

<body>


                <!--navigation-->


<div id="mynavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">D M SYSTEM</a>
		</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
					<li><a href="#service">ABOUT</a></li>
					
					
					<li><a href="<?php echo base_url('Welcome/loging');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

					</ul>
					
				</div>
	</div>
</div>

          <!--end navigation-->


          <!-- Header -->


<div class="Header" style="

    background-image: url(<?php echo base_url();?>img/ddd.jpg);
    margin-top:30px; 
    background-size: cover;
    background-repeat:no-repeat;
    
">

<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="intro" style="background-color:rgba(179, 204, 204,0.3); padding-left:30px; padding-right: 30px; padding-bottom:40px; border-radius:10px; 
   "

>
    

                <h2 style=" padding-top:20px;  margin-top:90px; color:#003366;">
                    <strong> Disaster Management System</strong> <br>
                    <strong>Westen Province</strong></h2> 
                    <hr>

                    <p>The national land of Japan is located under natural conditions where natural disasters such as earthquakes and tsunamis are likely to occur, and in addition to the occurrence of large-scale accidents (accident disasters) accompanying sophistication of society and industry Further enhancement and strengthening of disaster prevention measures is required so that it can deal with it.</p>
                    <hr>
                    <p> In order to protect the lands, bodies and property of the country and the people from disasters, establish necessary systems through national government, local governments and other public agencies concerning disaster prevention, clarify the location of responsibility, create a disaster prevention plan , Disaster prevention, disaster recovery emergency measures, fiscal and financial measures concerning disaster recovery and disaster prevention, and other necessary disaster measures, to develop and promote comprehensive and systematic disaster prevention administration, thereby maintaining social order and public welfare It is necessary to secure it. In particular, for disaster prevention measures, information is the most fundamental in order to properly prepare for disasters from normal times, to carry out emergency response and restoration etc. that respond quickly to the situation at the time of a disaster</p>


                    <button style="margin-right:50px;" class="btn btn-danger"><a style="color:#fff; " href="#Warnings"> Warnings</a> </button>

                    <button style="margin-right:50px; " class="btn btn-success"><a href="#Forecasts" style="color: #fff;">Forecasts</a></button>
                    
                    <button style= "margin-right:50px;" type="button" class="btn btn-info"> <a style="color:#fff;" href="#disasters"> Disasters</a ></button>

                    <button  type="button" class="btn btn-warning"><a style="color:#fff;" href="#map"> Map</a ></button>
                    
                    
            </div>
            </div>

        <div class="col-md-6">
     

                <video id="video1"  style="width:110%; height:100%; margin-top:110px; border-radius: 3px; " autoplay loop>
                    <source src="<?php echo base_url();?>img/we.mp4" type="video/mp4">
                    <source type="video/webm" src="<?php echo base_url();?>img/we.mp4.webm">
                    <source type="video/ogg" src="<?php echo base_url();?>img/we.mp4.ogv">
                    Your browser does not support HTML5 video.
                </video>


                <p style="color:#fff; margin-top:10px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a target="blank" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.windy.com%2F%3Fgust%2C9.232%2C82.837%2C5%2Ca%3AFIxFR&h=ATOGTLWgkSskYQ5Rbyc4t1urTfpoLZQ6ehGyZ8rALiGwh-vzHvPrPA5NVvp1JxIdNlyepZ7GeMjlZsZ0rV2wjyg2NrIlB3f3JgFx0FVjxq5OLdlhdec1xClxth1heHxECGrwnPYj_jlzeagK0vgscDJ21QDZ67VX8WrcS7OXVcJzqdSdzF7CF1Nt3g2JVsvdopTlCJmC-VtRbU_8TZHSbbdx4KMOJzwUfc-JcSx09ZqSfnWmzjT-pW6cDvGGRTgK5CFRGSXjwfknfcaBrhq_yfCkZzOvG_tQ4MQgev9xyYSrPte0SQ">Click for more </a></p>



                <marquee><p style="color:red; font-size:25px;  ">Disaster Emergency Hotline 117 </p></marquee>
       
            </div>
        </div>
      </div>
  </div>



     <!--End Header -->




    <!--WEATHER FORECAST-->


        <div class="Forecasts" id="Forecasts" style="padding: 40px 0 50px;
             text-align: center;">
            <div class="container">


              <h2 style="text-align: center;">WEATHER FORECAST FOR DECEMBER 2017</h2>
                  <h5 style="text-align: center;">

                  The Disaster Information Management System is a sustainable arrangement within an institution for the systematic collection.
                   </h5>
                  <div class="row">
                  <div class="col-lg-3 wow fadeInLeft" data-wow-delay="2s">
                        <i style="height: 75px;
                        weight:75px;
                         font-size: 30px;
                         padding: 25px 20px;
                         border-radius: 150px;
                         background-color: #6699cc;
                         color: #fff; "     class="fa fa-low-vision" aria-hidden="true"></i>


             <H4>Our Vision</H4>

              <p>A Centre of Excellence in weather and climate related services and   Safer communities and sustainable development in Sri Lanka,<br> westen province </p>
            </div>
                      <div class="col-lg-3 wow fadeInLeft" data-wow-delay="1.6s">
                      <i style="height: 75px;
                          weight:75px;
                          font-size: 30px;
                          padding: 25px 20px;
                          border-radius: 150px;
                          background-color: #6699cc;
                          color: #fff;" class="fa fa-hand-paper-o" aria-hidden="true"></i>
           

            <H4>Our Mission</H4>

            <p>To provide services pertaining to Meteorology, Aeronautical Meteorology, Ocean Meteorology, Hydro Meteorology, private sector and the general public in keeping with national interest and international standards</p>
           </div>

                    <div class="col-lg-3 wow fadeInLeft" data-wow-delay="1.2s">
                    <i style="height: 75px;
                          weight:75px;
                          font-size: 30px;
                          padding: 25px 20px;
                          border-radius: 150px;
                          background-color: #6699cc;
                          color: #fff;" class="fa fa-certificate" aria-hidden="true"></i>


        <H4>Objectives</H4>

        <p>The objectives of the Department are
        To observe and collate weather elements in conformity with the World Meteorological Organization (WMO) standards,and maintenance of climatological<br>  databases.
        </p>
           </div>

                  <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.8s">
                   <i style="height: 75px;
                    weight:75px;
                    font-size: 30px;
                    padding: 25px 20px;
                    border-radius: 150px;
                    background-color: #6699cc;
                    color: #fff;" class="fa fa-university" aria-hidden="true"></i>


        <H4>Services</H4>


        <p>Provision of aviation meteorological services
            Maintenance of climatological databases
          Provision of meteorological and climatological services and data for national development and research purposes.</p>

           </div>
      </div>
    </div>
  </div>
</div>
<div class="container">

<div class="tabl" style="margin-top:30px; margin-bottom:30px; ">

<div class="re" style="margin-top:20px; ">
 <h1 style=" text-align: center; margin-top:18px; color: #006666 " > REPORTS</h1>

 </div>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Date</th>
      <th scope="col">Location</th>
      <th scope="col">Number of Deth</th>
      <th scope="col">Gross Dammage</th>
    </tr>
  </thead>
  <tbody>
    <?php

            if($fetch_aproved->num_rows()>0){

                foreach($fetch_aproved->result() as $row)
                {
                                         ?> 
                <tr>
                  <th scope="row"><?php echo $row->ID; ?></th>
                  <td><?php echo $row->Type; ?></td>
                  <td><?php echo $row->Date_Time; ?></td>
                  <td><?php echo $row->Location; ?></td>
                  <td><?php echo $row->Number_of_death; ?></td>
                  <td><?php echo $row->Gross_Damage; ?></td>                  
                </tr>
                <?php  
                }
            }

             ?>
                
  </tbody>
</table>

</div>
</div>
</div>



<!--end WEATHER FORECAST-->


              <!---disasters-->


                    <div class="disasters" id="disasters" style="background-color:#333; padding-top:50px; padding-bottom:60px; ">

        <div class="container">
              <div class="row">

              <h1 style="text-align:center; padding-bottom:8px;  margin-top:5px; color:#3399ff;">Disasters</h1>
                  <div class="col-md-6">
                    
                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item">
           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Floods</a>

          </li>


          <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tsunami</a>
           </li>


          <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tropical Storms</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Land Slides</a>
          </li>


          </ul>

          <div class="tab-content" id="pills-tabContent">


          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <br>
          <p style="color: #fff;">
          Naturally occurring flash, river and coastal flooding from intense rainfall or innundation associated with seasonal weather patterns Human manipulation of watersheds, drainage basins and floodplains.
          General characteristics and effects
          Flash floods Accelerated runoff, dam failure, breakup of ice jam . River floods Slow buildup, usually seasonal in river systems. Coastal floods Associated with tropical cyclones, tsunami waves, storm surges Factors affecting.</p>

            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <br>
            <p style="color: #fff;">
            Fault movement on sea floor, accompanied by an earthquake A landslide occurring underwater or above the sea, then plunging into the water. Volcanic activity either underwater or near the shore.
            General characteristics and effects
            Tsunami waves are barely perceptible in deep water and may measure 160 km between wave crests May consist of ten or more wave crests Move up to 800 km per hour in deep water of ocean, diminishing in speed as the wave approaches shore May strike shore in crashing waves or may inundate the land Flooding effect depends on shape of shoreline and tides.</p>

            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <br>
            <p style="color: #fff;">
            Mixture of heat and, moisture forms a low pressure center over oceans in tropical latitudes wherewater temperatures are over 26 degrees C. Wind currents spin and organize around deepening low pressure over accelerating toward the center and moving along track pushed by trade winds. Depression becomes a tropical cyclone when winds reach gale force or 117 km per hour.
            General characteristics and effects</p>

            </div>


            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <br>
            <p style="color: #fff;">
              Down slope transport of soil and rock resulting from naturally occurring vibrations, changes in direct water content, removal of lateral support, loading with weight, and weathering, or human manipulation of water courses and slope
              General characteristics and effects
              Landslides vary in types of movement (falls, slides, topples, lateral spread, flows), and may be secondary effects of heavy storms, earthquakes, and volcanic eruptions. Landslides are more widespread than any othe</p>
 
            </div>

        </div>

                  </div>

                    <div class="col-md-6">
                        

                           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>
                
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>img/flo.jpg" alt="First slide">
                       
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>img/land.jpg" alt="Second slide">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>img/cyc.jpg" alt="Third slide">
                        
                    </div>
                    
                     
                     <div class="item">
                        <img src="<?php echo base_url(); ?>img/fir.jpg" alt="Second slide">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>img/tsu.jpg" alt="Third slide">
                        
                    </div>

                </div>
                
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                    </span>
                </a>
            
                
            </div>
                </div>
            </div>

        <div id="push">
      </div>
          
          <div class="container-fluid"> 
              
             
    
          <div class="row"> <div style="position:responsive; right:220px;"> <div class="col-md-4"  >
                  
  </div>   </div> 



                    </div>


                  </div>
         
      </div>
  </div>

  <!---end disasters-->
<div class="container">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<div id="piechart"></div>
 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Flood', <?php echo $countuser; ?>],
  ['cyclone', <?php echo $countmanager;?>],
  ['Road Accident', <?php echo $countaprove;?>],
  ['Landslide', 3],
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Number Of death According to Ditasters', 'width':800, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script> 
</div>

<!--mapp-->

<div class="mapp" id="Map">

<h1 style="text-align: center; margin-top: 20px;">MAP</h1>

<div class="container">
          
  <div class="row">



    <div class="col-md-4">
      <h3>Disasters</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>



<div class="col-md-8">
<!--mapppp-->

          <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
   
    <div id="map"></div>
    <script>



      function initMap() {

  
        var uluru = {lat: 7.08994, lng: 79.9994};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        var town = {lat: 7.940338, lng: 81.018798};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: town
        });
        var town = new google.maps.Marker({
          position: town,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzb3QFwbwr23tjuX8ZSbYsZeJmI_C173Q&callback=initMap">
    </script>

</div>


</div>
</div>





<!--div class="container">

<h1>

<?php

       $results =$this->db->query('SELECT * FROM approved');

       foreach ($results->result_array() as $row) {

        echo $row['Lat'];
        echo "<br>"; 
        echo $row['lon'];
      }
        
?>

    </h1>

     </div-->

<!--end map-->











<!--warning-->



  <div class="Warnings"  id="Warnings" style="background-color: #333; padding-bottom: 30px;  ">


<h1 style="text-align: center; color: red; margin-top:40px; padding-top:20px;">Warnings..!</h1>
  <h4 style="text-align: center; color: #fff;">Safe your life is the best thig.save your life..</h4>

<!--div class="container"-->
<div class="row">
          
          <div class="col-md-3" style="margin-top:20px;">
            
              <h4 style=" color:#fff;">Tsunami Warnings</h4>

           <img src="<?php echo base_url();?>img/ts.png">


           <p style="color: #fff; margin-top:10px;">A tsunami warning is issued when a tidal wave with the possibility to create far reaching immersion is inescapable, expected, or happening. Notices caution general society that hazardous beach front flooding joined by capable streams is conceivable and may proceed for a few hours after starting entry. Notices ready crisis administration authorities to make a move for the whole wave risk zone.Suitable moves to be made by neighborhood authorities may incorporate the clearing of low-lying coastal zones, and the repositioning of boats to profound waters when there is a great opportunity to securely do as such. Notices might be refreshed, balanced topographically, minimized, or scratched off. To give the soonest conceivable alarm, beginning notices are regularly construct just in light of seismic data.
</p>

          </div>

      

          <div class="col-md-3" style="margin-top:20px;">

                

                <h4 style=" color:#fff;">Flood Warnings</h4>

           <img src="<?php echo base_url();?>img/fll.png">

               <p style="color: #fff;margin-top:10px;">The major flood events affecting Sri Lanka are directly related to monsoon rains. There is a threat of floods in the Western and Sabaragamuwa provinces during May - September, where the southwest monsoons are in May - September and floods are threatening in the North and North Central Provinces during December - February.

During these periods the rivers and rivers of the western slopes of the hill country have increased due to floods in Kalu and Kelani river areas.

</p>

          </div>

          <div class="col-md-3" style="margin-top:20px; ">


            <h4 style=" color: #fff;">Cyclone Warnings</h4>

            <img src="<?php echo base_url();?>img/qq.png"> 

               <p style="color: #fff;margin-top:10px;">Cyclone is a system with low air pressure near the center of growth in the tropics and has a strong wind range from the center up to 100 km. When the wind is near the center, the wind is more than 119 miles per hour and sometimes the maximum is over 170 km / hr, it is called strong (strong) tropical cyclone winds.
</p>

          </div>

          <div class="col-md-3" style="margin-top:20px; ">

          <h4 style="color: #fff;" >Landslide Warnings</h4>
            
            <img src="<?php echo base_url();?>img/rrrr.png">
             <p style="color: #fff; margin-top:10px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


          </div>

          <!--div class="col-md-2" style="margin-top:20px; ">

            <h4 style="color: #fff;">Tsunami Warnings</h4>

            <img src="<?php echo base_url();?>img/tttt.png">

          </div-->

          </div>

      </div>
  
</div>


<!--end warning-->








<!--vision-->


    <div class="service" id="service" style="padding: 40px 0 50px;
             text-align: center;">
            <div class="container">


              <h1 style="text-align: center;">About Us</h1>
                  <p style="text-align: center;">
                  Disaster Management System westen province , Sri lanka  </p>
                  <div class="row">
                  <div class="col-lg-3 wow fadeInLeft" data-wow-delay="2s">
                        <i style="height: 75px;
                        weight:75px;
                         font-size: 30px;
                         padding: 25px 20px;
                         border-radius: 150px;
                         background-color: #6699cc;
                         color: #fff; "     class="fa fa-low-vision" aria-hidden="true"></i>


             <H4>Our Vision</H4>

              <p>A Centre of Excellence in weather and climate related services and   Safer communities and sustainable development in Sri Lanka,<br> westen province </p>
            </div>
                      <div class="col-lg-3 wow fadeInLeft" data-wow-delay="1.6s">
                      <i style="height: 75px;
                          weight:75px;
                          font-size: 30px;
                          padding: 25px 20px;
                          border-radius: 150px;
                          background-color: #6699cc;
                          color: #fff;" class="fa fa-hand-paper-o" aria-hidden="true"></i>
           

            <H4>Our Mission</H4>

            <p>To provide services pertaining to Meteorology, Aeronautical Meteorology, Ocean Meteorology, Hydro Meteorology, private sector and the general public in keeping with national interest and international standards</p>
           </div>

                    <div class="col-lg-3 wow fadeInLeft" data-wow-delay="1.2s">
                    <i style="height: 75px;
                          weight:75px;
                          font-size: 30px;
                          padding: 25px 20px;
                          border-radius: 150px;
                          background-color: #6699cc;
                          color: #fff;" class="fa fa-certificate" aria-hidden="true"></i>


        <H4>Objectives</H4>

        <p>The objectives of the Department are
        To observe and collate weather elements in conformity with the World Meteorological Organization (WMO) standards,and maintenance of climatological<br>  databases.
        </p>
           </div>

                  <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.8s">
                   <i style="height: 75px;
                    weight:75px;
                    font-size: 30px;
                    padding: 25px 20px;
                    border-radius: 150px;
                    background-color: #6699cc;
                    color: #fff;" class="fa fa-university" aria-hidden="true"></i>


        <H4>Services</H4>


        <p>Provision of aviation meteorological services
            Maintenance of climatological databases
          Provision of meteorological and climatological services and data for national development and research purposes.</p>

           </div>
      </div>
    </div>
  </div>
</div>



<!--end vision-->





<!--footer-->





<div id="footer" class="footer" style="background-color:#333; padding-top:20px; padding-bottom: 20px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-4">
        <h3 style="color: #fff; padding-top:10px;">contact us</h3>

        <hr>

        <p style="color: #fff; margin-top:10px;"><i class="fa fa-home" aria-hidden="true" style="color: #fff;"></i> No.490/2 Church Rode,Gampaha.</p>

          <hr>

        <p style="color: #fff; margin-top:10px;"><i class="fa fa-envelope-o" aria-hidden="true" style="color: #fff;"></i> DsGampaha.coreunit@gmail.com</p>

        <hr>

        <p style="color: #fff; margin-top:10px;"><i class="fa fa-phone" aria-hidden="true" style="color: #fff;"></i> 0773343976</p>

        <hr>

        <p style="color: #fff;margin-top:10px;"><i class="fa fa-globe" aria-hidden="true" style="color: #fff;"></i> WWW.Disaster Mgt.com</p>

      </div>

      <div class="col-lg-4">

        <h3 style="color: #fff; padding-top:10px;">Quic links</h3>

        <hr>

        <p style="color: #fff;"><i class="fa fa-square-o" aria-hidden="true" style="color: #fff;"></i></i> About Us</p>
        <hr>
        <p style="color: #fff;"><i class="fa fa-square-o" aria-hidden="true" style="color: #fff;"></i></i> Privacy</p>

        <hr>

        <p style="color: #fff;"><i class="fa fa-square-o" aria-hidden="true" style="color: #fff;"></i></i> Team and condition</p>


      </div>  

      <div class="col-lg-4">

        <h3 style="color: #fff; padding-top:10px;">Stay In Tuch</h3>

        <hr>

        <i class="fa fa-facebook-official" aria-hidden="true" style="color: #fff;"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-skype" aria-hidden="true" style="color: #fff;"></i> <i class="fa fa-instagram" aria-hidden="true" style="color: #fff;"></i> <i class="fa fa-youtube" aria-hidden="true"></i> <i class="fa fa-linkedin-square" aria-hidden="true" style="color: #fff;"></i>

        <hr>

        <input type="text" placeholder="Subscribe For Update">  <button class="btn btn-info" style="color: #fff; "> SUBSCRIBE</button>

        

        <h5 style="color: #fff;padding-top:50px;">All Right Recived &copy Disaster Management Department</h5>

      </div>  
      
      </div>
    </div>
  
</div>



<!--endfooter-->


     


     
	
<!-- Latest compiled and minified JavaScript -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
     <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/1.12.4/jquery.min.js/bootstrap.min.js"></script>
	
<script src="js/boostrap.min.js"></script>

	</script>
	</body>

	</html>