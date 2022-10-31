var map;

let myLatlng = {
    lat: -25.363,
    lng: 131.044
};

navigator.geolocation.getCurrentPosition(showPosition);

function showPosition(position) {
    console.log(position.coords.latitude);
    myLatlng = {
        lat: position.coords.latitude,
        lng: position.coords.longitude,
    }
    initMap();
}

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: myLatlng,
    });
    // map.addListener("click", (e) => {
    //     placeMarkerAndPanTo(e.latLng, map);
    // });

    // Create the initial InfoWindow.
    let infoWindow = new google.maps.InfoWindow({
        content: "Click the map to get Lat/Lng!",
        position: myLatlng,
    });

    infoWindow.open(map);

    // Configure the click listener.
    map.addListener("click", (mapsMouseEvent) => {
        // Close the current InfoWindow.
        infoWindow.close();

        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
        });
        // myLatlng = mapsMouseEvent.latLng;
        infoWindow.setContent(
            `<div>
                        Your position is <br/>
                        latitude: ${mapsMouseEvent.latLng.toJSON().lat} <br/>
                        altitude: ${mapsMouseEvent.latLng.toJSON().lng}
                    </div>`
            // JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
        );
        infoWindow.open(map);
        setLatlng(mapsMouseEvent.latLng);
    });

    function setLatlng(position){
        document.getElementById("latitude").value = position.lat;
        document.getElementById("longitude").value = position.lng;
    }

    setLatlng(myLatlng);
}