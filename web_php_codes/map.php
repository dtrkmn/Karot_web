<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=API_KEY">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: -34.397, lng: 150.644},
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
<div id="map-canvas"></div>
  </body>
</html>
View example (map-simple.html)

Even in this simple example, there are a few things to note:

We declare the application as HTML5 using the <!DOCTYPE html> declaration.
We include the Maps API JavaScript using a script tag.
We create a div element named "map-canvas" to hold the Map.
We create a JavaScript object literal to hold a number of map properties.
We create a JavaScript "map" object, passing it the div element and the map properties.
We use an event listener to load the map after the page has loaded.
These steps are explained below.

Declaring Your Application as HTML5

We recommend that you declare a true DOCTYPE within your web application. Within the examples here, we've declared our applications as HTML5 using the simple HTML5 DOCTYPE as shown below:

<!DOCTYPE html>
Most current browsers will render content that is declared with this DOCTYPE in "standards mode" which means that your application should be more cross-browser compliant. The DOCTYPE is also designed to degrade gracefully; browsers that don't understand it will ignore it, and use "quirks mode" to display their content.

Note that some CSS that works within quirks mode is not valid in standards mode. In specific, all percentage-based sizes must inherit from parent block elements, and if any of those ancestors fail to specify a size, they are assumed to be sized at 0 x 0 pixels. For that reason, we include the following <style> declaration:

<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0; padding: 0 }
  #map-canvas { height: 100% }
</style>