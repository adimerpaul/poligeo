<template>
    <div style="height: 100vh; width: 100%">
        <div style="height: 200px overflow: auto;">
            <p>Personal: {{dato.nombre}} desde: {{dato.f1}} hasta: {{dato.f2}} </p>
<!--            <p>First marker is placed at {{ withPopup.lat }}, {{ withPopup.lng }}</p>-->
<!--            <p>Center is at {{ currentCenter }} and the zoom is: {{ currentZoom }}</p>-->
<!--            <button @click="showLongText">-->
<!--                Toggle long popup-->
<!--            </button>-->
<!--            <button @click="showMap = !showMap">-->
<!--                Toggle map-->
<!--            </button>-->
        </div>
        <l-map
            v-if="showMap"
            :zoom="zoom"
            :center="center"
            :options="mapOptions"
            style="height: 80%"
            @update:center="centerUpdate"
            @update:zoom="zoomUpdate"
        >
            <l-tile-layer
                :url="url"
                :attribution="attribution"
            />
<!--            <l-marker :lat-lng="withPopup">-->
<!--                <l-popup>-->
<!--                    asdas-->
<!--                    <div @click="innerClick">-->
<!--                        I am a popup-->
<!--                        <p v-show="showParagraph">-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                            sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                            Donec finibus semper metus id malesuada.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </l-popup>-->
<!--            </l-marker>-->

<!--            <l-marker :lat-lng="withPopup">-->

<!--                <l-tooltip :options="{ permanent: true, interactive: true }">-->
<!--                    aa-->
<!--                    <div @click="innerClick">-->
<!--                        I am a tooltip-->
<!--                        <p v-show="showParagraph">-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                            sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                            Donec finibus semper metus id malesuada.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </l-tooltip>-->
<!--            </l-marker>-->

<!--            <l-marker v-for="(marker, index) in markers" :key="index" :lat-lng="marker.location" >-->
<!--                <l-tooltip :options="{ permanent: true, interactive: true }">-->
<!--                    {{marker.created_at}}-->
<!--                </l-tooltip>-->
<!--            </l-marker>-->

            <l-polyline
                :lat-lngs="polyline.latlngs"
                :color="polyline.color"
            />

        </l-map>
    </div>

</template>

<script>
// import $ from 'jquery'
import { latLng } from "leaflet";
import { LMap, LTileLayer, LMarker, LPopup, LTooltip,  LPolyline } from "vue2-leaflet";

export default {
    name: "Example",
    created() {



        let uri = window.location.href.split('?');
        if (uri.length == 2) {
            let vars = uri[1].split('&');
            let getVars = {};
            let tmp = '';
            vars.forEach(function (v) {
                tmp = v.split('=');
                if (tmp.length == 2)
                    getVars[tmp[0]] = tmp[1];
            });
            this.dato.nombre=getVars.nombre.replace(/%20/g, " ");
            this.dato.f1=getVars.f1.replace(/%20/g, " ");
            this.dato.f2=getVars.f2.replace(/%20/g, " ");
            axios.post('/puntos',this.dato).then(res=>{
                // console.log(res.data);
                // this.puntos=res.data;
                this.markers=[];
                this.polyline.latlngs=[
                    // [-17.969815, -67.115186],
                    // [-17.969215, -67.114942],
                    // [-17.968327, -67.114674]
                ];
                let con=0;
                let d1=[];
                let distance;
                res.data.forEach(r=>{
                    if (con==0){
                        d1=[r.lat,r.lng];
                    }else {
                        d2=[r.lat,r.lng];
                        distance = this.getDistance([lat1, lng1], [lat2, lng2]);
                        console.log(distance);
                        d1=d2;
                    }
                    this.markers.push({location:L.latLng(r.lat,r.lng),created_at:r.created_at})
                    this.polyline.latlngs.push([r.lat,r.lng]);

                    // console.log({location:L.latLng(-17.976961,-67.109801),created_at:r.created_at});
                });
            });
            // console.log();
        }


    },
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LPopup,
        LTooltip,LPolyline
    },
    data() {
        return {
            polyline: {
                latlngs: [
                    [-17.969815, -67.115186],
                    [-17.969215, -67.114942],
                    [-17.968327, -67.114674]
                ],
                color: "green"
            },
            markers:[],
            puntos:[],
            dato:{},
            zoom: 13,
            center: latLng(-17.976961, -67.109801),
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution:
                '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            withPopup: latLng(-17.976961, -67.109801),
            withTooltip: latLng(47.41422, -1.250482),
            currentZoom: 11.5,
            currentCenter: latLng(47.41322, -1.219482),
            showParagraph: false,
            mapOptions: {
                zoomSnap: 0.5
            },
            showMap: true
        };
    },
    methods: {
        getDistance(origin, destination) {
    // return distance in meters
            var lon1 = toRadian(origin[1]),
                lat1 = toRadian(origin[0]),
                lon2 = toRadian(destination[1]),
                lat2 = toRadian(destination[0]);

            var deltaLat = lat2 - lat1;
            var deltaLon = lon2 - lon1;

            var a = Math.pow(Math.sin(deltaLat/2), 2) + Math.cos(lat1) * Math.cos(lat2) * Math.pow(Math.sin(deltaLon/2), 2);
            var c = 2 * Math.asin(Math.sqrt(a));
            var EARTH_RADIUS = 6371;
            return c * EARTH_RADIUS * 1000;
        },
        zoomUpdate(zoom) {
            this.currentZoom = zoom;
        },
        centerUpdate(center) {
            this.currentCenter = center;
        },
        showLongText() {
            this.showParagraph = !this.showParagraph;
        },
        innerClick() {
            alert("Click!");
        }
    }
};
</script>

<style>

</style>
