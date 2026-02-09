@if($row->map_lat && $row->map_lng)
    <div class="y-gap-20 pt-30">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">{{ __("Location Map") }}</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">{{ __("Explore the world, one pin at a time.") }}</p>
        </div>
        <div class="location-map">
            <div id="map_content" style="height: 300px"></div>
        </div>
    </div>
@endif
