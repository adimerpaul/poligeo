<template>
    <div class="right_col" role="main">
<!--        <div style="height: 500px; width: 100%">-->
<!--            <div style="height: 200px overflow: auto;">-->
<!--                <p>First marker is placed at {{ withPopup.lat }}, {{ withPopup.lng }}</p>-->
<!--                <p>Center is at {{ currentCenter }} and the zoom is: {{ currentZoom }}</p>-->
<!--                <button @click="showLongText">-->
<!--                    Toggle long popup-->
<!--                </button>-->
<!--                <button @click="showMap = !showMap">-->
<!--                    Toggle map-->
<!--                </button>-->
<!--            </div>-->
<!--            <l-map-->
<!--                v-if="showMap"-->
<!--                :zoom="zoom"-->
<!--                :center="center"-->
<!--                :options="mapOptions"-->
<!--                style="height: 80%"-->
<!--                @update:center="centerUpdate"-->
<!--                @update:zoom="zoomUpdate"-->
<!--            >-->
<!--                <l-tile-layer-->
<!--                    :url="url"-->
<!--                    :attribution="attribution"-->
<!--                />-->
<!--                <l-marker :lat-lng="withPopup">-->
<!--                    <l-popup>-->
<!--                        <div @click="innerClick">-->
<!--                            I am a popup-->
<!--                            <p v-show="showParagraph">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                                sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                                Donec finibus semper metus id malesuada.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </l-popup>-->
<!--                </l-marker>-->
<!--                <l-marker :lat-lng="withTooltip">-->
<!--                    <l-tooltip :options="{ permanent: true, interactive: true }">-->
<!--                        <div @click="innerClick">-->
<!--                            I am a tooltip-->
<!--                            <p v-show="showParagraph">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                                sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                                Donec finibus semper metus id malesuada.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </l-tooltip>-->
<!--                </l-marker>-->
<!--            </l-map>-->
<!--        </div>-->
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Notificaciones <small> notificaciones</small></h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Controlar reporte policial <small>Reporte del personal policial</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card-box table-responsive">
                                        <table id="datatable2" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Plan</th>
                                                <th>Inicio</th>
                                                <th>Fin</th>
                                                <th>Oficiales</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr v-for="(item,index) in notificaciones" :key="index">
                                                <td>{{index+1}}</td>
                                                <td>{{item.plan.nombre}}</td>
                                                <td>{{item.inicio}}</td>
                                                <td>{{item.fin}}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-info"@click="modificar(item)"> <i class="fa fa-eye"></i> </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <template v-if="policiales.length">
                                        <a   target="_blank" class="btn btn-sm btn-primary"  v-for="i in policiales" v-bind:href="'verlocation?nombre='+i.nombre+'&f1='+f1+'&f2='+f2" > <i class="fa fa-user"></i> {{i.nombre}}  </a>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>

// import { latLng } from "leaflet";
// import { LMap, LTileLayer, LMarker, LPopup, LTooltip } from "vue2-leaflet";

export default {
    // components: {
    //     LMap,
    //     LTileLayer,
    //     LMarker,
    //     LPopup,
    //     LTooltip
    // },
    beforeMount(){
    },
    mounted() {

    },
    data(){
        return {
            noti:{},
            notificaciones:[],
            tipo:[],
            nuevo:true,
            policiales:[],
            f1:'',
            f2:'',
            // zoom: 13,
            // center: latLng(47.41322, -1.219482),
            // url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            // attribution:
            //     '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            // withPopup: latLng(47.41322, -1.219482),
            // withTooltip: latLng(47.41422, -1.250482),
            // currentZoom: 11.5,
            // currentCenter: latLng(47.41322, -1.219482),
            // showParagraph: false,
            // mapOptions: {
            //     zoomSnap: 0.5
            // },
            // showMap: true

        }
    },
    mapa(policial){
    },
    created() {
        this.datos();
        // axios.get('/tiponotificaciones').then(res=>{
        //     // console.log(res);
        //     this.tipo=res.data;
        // })
        // console.log(this.tiponotificaiones);
    },

    methods:{
        // zoomUpdate(zoom) {
        //     this.currentZoom = zoom;
        // },
        // centerUpdate(center) {
        //     this.currentCenter = center;
        // },
        // showLongText() {
        //     this.showParagraph = !this.showParagraph;
        // },
        // innerClick() {
        //     alert("Click!");
        // },
        crear(){
            this.nuevo=true;
            this.noti={};
        },
        datos(){
            axios.get('/policeplan').then(res=>{
                // console.log(res);
                this.notificaciones=res.data;
            })
        },
        guardar(){
            let cm = this;
            if(this.nuevo){
                axios.post('/plan',this.noti).then(res=>{
                    // console.log(res);
                    // this.tiponotificaiones=res.data;
                    $('.bs-example-modal-lg').modal('hide');
                    this.datos();
                    cm.$toastr.s("Creado correctamente!!!");
                    this.noti={}
                })
            }else{
                axios.put('/plan/'+this.noti.id,this.noti).then(res=>{
                    // console.log(res);
                    // this.tiponotificaiones=res.data;
                    $('.bs-example-modal-lg').modal('hide');
                    this.datos();
                    cm.$toastr.s("Modificado correctamente!!!");
                    this.tipo={}
                })
            }

        },
        eliminar(id){
            var cm=this;
            this.$fire({
                title: "Eliminar?",
                text:"Seguro de eliminar?",
                // text: "text",
                type: "question",
                timer: 3000,
                showCloseButton: true,
                showCancelButton: true,
            }).then(r => {
                // console.log(r.value);
                if(r.value){
                    axios.delete('/plan/'+id).then(res=>{
                        // console.log(res);
                        this.datos();
                        cm.$toastr.s("Borrado correctamente!!!");
                    });
                }
            });
        },
        modificar(i){
            // console.log('aa');
            // this.noti=item;
            // // console.log(this.noti);
            // $('.bs-example-modal-lg').modal('show');
            // this.nuevo=false;
            // io(id){
            this.f1=i.inicio;
            this.f2=i.fin;
                axios.post('/buscar/',{inicio:i.inicio,fin:i.fin}).then(res=>{
                    // console.log(res.data);
                    this.policiales=res.data;
                    // this.datos();
                })
        },
        cambio(id){
            axios.get('/notificaciones/'+id).then(res=>{
                // console.log(res);
                // this.notificaciones=res.data;
                this.datos();
            })
        }
    }
}
</script>
