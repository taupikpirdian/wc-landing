@extends('layouts.app2')
@section('title-bar')
<!-- Title Bar Start -->
@php($banner = \App\Models\BannerSetting::where('page', 'area-layanan')->first())
@php($bannerImage = $banner && $banner->image_url ? asset(str_replace('public/', '', $banner->image_url)) : null)
<div class="pbmit-title-bar-wrapper" @if($bannerImage) style="background-image:url('{{ $bannerImage }}');background-size:cover;background-position:center;" @endif>
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Area Layanan</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="" href="{{ url('/') }}" class="home"><span>HOME</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item"> Area Layanan</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection
@section('content')
<!-- Service Area List -->
<section class="section-xl">
    <div class="container">
        <div class="row pbmit-element-posts-wrapper">
            @foreach($serviceAreas as $area)
                <article class="pbmit-portfolio-style-1 col-md-4">
                    <div class="pbminfotech-post-content">
                        <div class="pbminfotech-image-wapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    @php($imageUrl = $area->image ? \Illuminate\Support\Facades\Storage::url($area->image) : null)
                                    @if($imageUrl)
                                        <img src="{{ $imageUrl }}" class="img-fluid" alt="{{ $area->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbminfotech-titlebox">
                                <h3 class="pbmit-portfolio-title">
                                    {{ $area->title }}
                                </h3>
                                <div class="pbmit-portfolio-category">
                                    {{ $area->address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        
        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Lokasi Layanan Kami</h3>
                <div id="map" style="height: 500px; width: 100%; z-index: 1; border-radius: 10px;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Default to Jakarta if no points
        var defaultLat = -6.200000;
        var defaultLng = 106.816666;
        var map = L.map('map').setView([defaultLat, defaultLng], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var serviceAreas = @json($serviceAreas);
        var bounds = [];

        serviceAreas.forEach(function(area) {
            if(area.latitude && area.longitude) {
                var lat = parseFloat(area.latitude);
                var lng = parseFloat(area.longitude);
                
                var markerOptions = {};
                if(area.icon_pin_map) {
                     var icon = L.icon({
                        iconUrl: '/storage/' + area.icon_pin_map, // Assuming storage link is working
                        iconSize: [32, 32], // Adjust size as needed
                        iconAnchor: [16, 32],
                        popupAnchor: [0, -32]
                    });
                    markerOptions.icon = icon;
                }

                var marker = L.marker([lat, lng], markerOptions).addTo(map);
                marker.bindPopup("<b>" + area.title + "</b><br>" + (area.address || ""));
                bounds.push([lat, lng]);
            }
        });

        if(bounds.length > 0) {
            map.fitBounds(bounds);
        }
    });
</script>
@endsection
