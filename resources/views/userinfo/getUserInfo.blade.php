@extends('layout.index')

@section('style')
<link rel="stylesheet" href="../../css/app.css">
<style>
    #map {
        height: 30vw;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-lg-6 col-md-8 col-sm-12">
        <form class="" id="user-info-form">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="nric">NRIC</label>
                <input type="text" class="form-control" id="nric">
            </div>
            <div class="mb-5">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact">
            </div>
            <div class="mb-3">
                <label for="address1">Address 1</label>
                <input type="text" class="form-control" id="address1">
            </div>
            <div class="mb-3">
                <label for="address2">Address 2</label>
                <input type="text" class="form-control" id="address2">
            </div>
            <div class="mb-3">
                <label for="postcode">Postcode</label>
                <input type="text" class="form-control" id="postcode">
            </div>
            <div class="mb-3">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district">
            </div>
            <div class="mb-3">
                <label for="map">Pin Location</label>
                <div id="map"></div>
            </div>
            <div class="mb-3">
                <label for="Agent">Agent</label>
                <input type="text" class="form-control" id="Agent">
            </div>
            <button class="btn btn-primary w-100" type="submit">SUBMIT</button>
        </form>
        <div class="user-info d-none" id="user-info">
        </div>
    </div>
</div>
@endsection


@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNwKg1Go4dxn6xm2gVkGaEXqrJ5B9eAi4" async defer>
    </script>
    {{-- <script src="../../js/google_map.js"></script> --}}
    {{!! Html::script('js/google_map.js') !!}}
@endsection