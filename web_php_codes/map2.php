

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Afet.Gen.Tr</title>
   <style type="text/css">

html { height: 100% }

body { height: 100%; margin: 0; padding: 0 }

#map_canvas { height: 100% ; float:left;border:solid 1px black  }
/*#Siddet { float:left}*/
ul { list-style-type:none; float:left; border:solid 1px black; width:150px; height:400px;margin-top:0;  font-weight:bold
     }
     ul li { line-height:60px}
      .InfoWindow 
      {
          color:Black;
   
      }

</style>

<!--<script type="text/javascript" src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAMHqw85_gyECgfBuiOSh1zDAEC-8aOEaM&sensor=false">-->
<script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script> 




<script type="text/javascript">
    var markers = JSON.parse('<%=ConvertDataTabletoString() %>');
    var lasteartquake2 = markers[0];
    var infoWindow = new google.maps.InfoWindow();
    var infoWindow1 = new google.maps.InfoWindow();
    var mymark = new google.maps.LatLng(lasteartquake2.Enlem, lasteartquake2.Boylam);

    var mark;

    function initialize() {


      

        var mapOptions = {


            // center: new google.maps.LatLng(markers[1].Enlem, markers[1].Boylam),
            center: new google.maps.LatLng(38.905996, 35.529785),
          
            zoom: 6,


            mapTypeId: google.maps.MapTypeId.ROADMAP


        };
     
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
         mark = new google.maps.Marker({

            position: mymark,

            map: map,

            draggable: true,

            animation: google.maps.Animation.DROP,

            icon:'images/target.png'
        });
          


          

            for (i = 1; i < markers.length; i++) {

                var data = markers[i];

                var myLatlng = new google.maps.LatLng(data.Enlem, data.Boylam);
                var markerimage = getMarkerImage(data.Siddet);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                 
                     map: map,
                    icon: markerimage,

                    title: 'Deprem Detay'
                });
                //                
               
               


              (function (marker, data) {
               // Attaching a click event to the current marker

                  google.maps.event.addListener(marker, "click", function (e) {
                        
                        infoWindow.setContent(" <font color='black',background-color :'#ccc'><b>Yer : </b></font> " + data.Yer + " <br><font color='black'><b> Siddet :</b></font>" + data.Siddet + "<br><font color='black'><b> Derinlik : </b></font> " + data.Derinlik);

                        infoWindow.open(map, marker);

                    });

                })(marker, data);

              


            }
            google.maps.event.addListener(mark, 'mouseover', function () {

                toggleBounce();

                //infowindow.open(map, mark);

                setTimeout(toggleBounce, 500);

            });
            google.maps.event.addListener(mark, 'click', function () {

                infoWindow1.setContent(" <font color='black',background-color :'#ccc'><b>Yer : </b></font> " + lasteartquake2.Yer + " <br><font color='black'><b> Siddet :</b></font>" + lasteartquake2.Siddet + "<br><font color='black'><b> Derinlik : </b></font> " + lasteartquake2.Derinlik);

                infoWindow1.open(map, mark);

            });

        }
        
        function toggleBounce() {




            if (mark.getAnimation() != null)
             {

                mark.setAnimation(null);

            }
             else
             {

                mark.setAnimation(google.maps.Animation.BOUNCE);

            }
            }


            function getMarkerImage(Büyüklük) 
        {


            if (Büyüklük< 2) 
                {

                    image = 'images/green[1].png';

                }
                else if (Büyüklük < 3) 
                {

                    image = 'images/blue[1].png';

                }
                else if (Büyüklük < 4)
                 {

                    image = 'images/yellow[1].png';

                }
                else
                 {

                    image = 'images/red[1].png';


                }

            
                return image;

            
        }
        
       
    
    
</script>

</head>

<body onload="initialize()">
<h1>MUĞLA SITKI KOÇMAN ÜNİVERSİTESİ JEOLOJİ MÜHENDİSLİĞİ GÖL ÇALIŞMASI</h1>
<form id="form1" runat="server">

<div id="map_canvas" style="width: 960px; height: 400px"> </div>
<div id = "Siddet">  

 
        <ul>Siddet:<br />
       <li><img alt="" src="http://maps.google.com/mapfiles/ms/icons/red.png" /> 
        Siddet : m>=4<br /></li>
       <li> <img alt="" src="http://maps.google.com/mapfiles/ms/icons/blue.png" />
         Siddet : m>=2<br /></li>
      <li>  <img alt="" src="http://maps.google.com/mapfiles/ms/icons/yellow.png" />
         Siddet : m>=3<br /></li>
      <li>  <img alt="" src="http://maps.google.com/mapfiles/ms/icons/green.png" />
         Siddet : m>=1<br /></li>
         
        </ul>

   
   
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            <asp:GridView ID="GridView1" runat="server" AllowPaging="True" 
                onpageindexchanging="GridView1_PageIndexChanging">
            </asp:GridView>
        </p>
        <p>
            <asp:ImageButton ID="ImageButton1" runat="server" 
                ImageUrl="~/images/geributon.png" PostBackUrl="~/AnaSayfa.aspx" Width="39px" />
&nbsp;</p>
        <p>
            <asp:LinkButton ID="LinkButton1" runat="server" 
            
        </p>

   
   
    </div>
    
</form>

</body>

</html>

