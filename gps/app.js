// default map layer
let map = L.map('map', {
    layers: MQ.mapLayer(),
    center: [52.165721556748245, 5.293717367968769],
    zoom: 8
});
    

    function runDirection(start, end) {
        
        // recreating new map layer after removal
        map = L.map('map', {
            layers: MQ.mapLayer(),
            center: [52.165721556748245, 5.293717367968769],
            zoom: 8
        });
        
        var dir = MQ.routing.directions();

        dir.route({
            locations: [
                start,
                end
            ]
        });
    

        CustomRouteLayer = MQ.Routing.RouteLayer.extend({
            createStartMarker: (location) => {
                var custom_icon;
                var marker;

                custom_icon = L.icon({
                    iconUrl: 'img/red.png',
                    iconSize: [20, 29],
                    iconAnchor: [10, 29],
                    popupAnchor: [0, -29]
                });

                marker = L.marker(location.latLng, {icon: custom_icon}).addTo(map);

                return marker;
            },

            createEndMarker: (location) => {
                var custom_icon;
                var marker;

                custom_icon = L.icon({
                    iconUrl: 'img/blue.png',
                    iconSize: [20, 29],
                    iconAnchor: [10, 29],
                    popupAnchor: [0, -29]
                });

                marker = L.marker(location.latLng, {icon: custom_icon}).addTo(map);

                return marker;
            }
        });
        
        map.addLayer(new CustomRouteLayer({
            directions: dir,
            fitBounds: true
        })); 
    }


// function that runs when form submitted
function submitForm(event) {
    event.preventDefault();

    // delete current map layer
    map.remove();

    // getting form data
    start = document.getElementById("start").value;
    end = document.getElementById("destination").value;

    // run directions function
    runDirection(start, end);

    // reset form
    document.getElementById("form").reset();
}

// asign the form to form variable
const form = document.getElementById('form');

// call the submitForm() function when submitting the form
form.addEventListener('submit', submitForm);



async function getLongLat() {
    try {
        // Haal de URL op
const url = new URL(window.location.href);

// Haal de waarde van de "id" GET-parameter op
const id = url.searchParams.get("id");

// Controleer of "id" een waarde heeft


      const response = await fetch('getlonglat.php?id=' + id);
      
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('There has been a problem with your fetch operation:', error);
    }
  }
  
  // Gebruik de functie als volgt:
  getLongLat()
    .then((data) => {
        console.log(data.beginPoint);
        document.getElementById("start").value = data.beginPoint;
        console.log(data.endPoint);
        document.getElementById("destination").value = data.endPoint;

    })
    .catch((error) => {
      // Behandel fouten hier
    });
  