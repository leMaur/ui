<div
    x-data="{
        init: function () {
            mapboxgl.accessToken = '{{ (string) config('services.mapbox.public_token') }}';
            var map = new mapboxgl.Map({{ json_encode($options()) }});
            @foreach ($markers as $marker)
                new mapboxgl.Marker()
                    .setLngLat({{ json_encode($marker) }})
                    .addTo(map);
            @endforeach
        }
    }"
    id="{{ $id }}"
    {{ $attributes }}
></div>

@push('body')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
@endpush
