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
        infoWindow.setContent(
            `<div>
                        Your position is <br/>
                        latitude: ${mapsMouseEvent.latLng.toJSON().lat} <br/>
                        altitude: ${mapsMouseEvent.latLng.toJSON().lng}
                    </div>`
            // JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
        );
        infoWindow.open(map);

    });
}

function Submit(e) {
    e.preventDefault();
    const {
        name,
        nric,
        contact,
        address1,
        address2,
        postcode,
        district,
        Agent
    } = e.target.valueOf();

    const page = `
        <p><strong>Your info:</strong></P>
        <p><strong>Name:</strong> ${name.value}</p>
        <p><strong>Nric:</strong> ${contact.value}</p>
        <p><strong>Contact:</strong> ${contact.value}</p>
        <p><strong>Address1:</strong> ${address1.value}</p>
        <p><strong>Address2:</strong> ${address2.value}</p>
        <p><strong>PostCode:</strong> ${postcode.value}</p>
        <p><strong>District:</strong> ${district.value}</p>
        <p><strong>Agent:</strong> ${Agent.value}</p>
        <p><strong>Position:</strong> latitude: ${myLatlng.lat} , longitude ${myLatlng.lng}</p>
    `;
    document.getElementById("user-info").innerHTML = page;
    document.getElementById("user-info").classList.remove("d-none");
    document.getElementById("user-info-form").classList.add("d-none");
}
// function placeMarkerAndPanTo(latLng, map) {
//     new google.maps.Marker({
//         position: latLng,
//         map: map,
//     });
//     map.panTo(latLng);
// }

$(document).ready(function () {
    $("#user-info-form").submit(function (event) {
        Submit(event);
    });
})