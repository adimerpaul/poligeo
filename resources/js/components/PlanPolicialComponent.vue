<template>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Plan <small> Policial</small></h3>
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
                            <h2>Controlar  <small>Plan policial</small></h2>
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
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            Esta funcion permitira la creacion modificacion   <code>Planes policiales</code>
                                        </p>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" @click.prevent="crear" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Crear  Plan Policial</button>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Crear Plan Policial</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="guardar">
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="inicio">Inicio<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
<!--                                                                    <datetime v-model="date"></datetime>-->

                                                                    <input v-model="dato.inicio" type="datetime-local" id="inicio" required="required" placeholder="Inicio" name="inicio" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="fin">Fin<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input v-model="dato.fin" type="datetime-local" id="fin" required="required" placeholder="Fin" name="fin" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="departamento">Departamentos<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
<!--                                                                    <input v-model="dato.fin" type="datetime-local" id="fin" required="required" placeholder="Fin" name="fin" class="form-control ">-->
                                                                    <select v-model="dato.departamento_id" class="form-control" id="departamento" required>
                                                                        <option value="">Seleccionar</option>
                                                                        <option v-for="item in departamentos" v-bind:value="item.id">{{item.nombre}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="plan">Plan<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <!--                                                                    <input v-model="dato.fin" type="datetime-local" id="fin" required="required" placeholder="Fin" name="fin" class="form-control ">-->
                                                                    <select v-model="dato.plan_id" class="form-control" id="plan" required>
                                                                        <option value="">Seleccionar</option>
                                                                        <option v-for="item in plans" v-bind:value="item.id">{{item.nombre}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align">Policiales<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <multiselect v-model="value" tag-placeholder="Add this as new tag" placeholder="Search or add a tag" label="name" track-by="code" :options="options" :multiple="true" :taggable="true" @tag="addTag"></multiselect>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cancelar</button>
                                                                <button type="submit" class="btn btn-success" ><i class="fa fa-plus"></i> Registrar</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Small modal -->
                                        <table id="datatable2" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Inicio</th>
                                                <th>Fin</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr v-for="(item,index) in datos" :key="index">
                                                <td>{{index+1}}</td>
                                                <td>{{item.inicio}}</td>
                                                <td>
                                                    {{item.fin}}
<!--                                                    <button class="btn btn-sm btn-warning"@click="modificar(item)"> <i class="fa fa-pencil"></i> </button>-->
<!--                                                    <button class="btn btn-sm btn-danger" @click="eliminar(item.id,index)"> <i class="fa fa-trash"></i> </button>-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
import Multiselect from 'vue-multiselect'
import { Datetime } from 'vue-datetime';

export default {
    components: {
        Multiselect,
        datetime: Datetime
    },
    beforeMount(){
    },
    mounted() {

    },
    data(){
        return {
            date: '2018-05-12T00:00:00.000Z',
        dato:{inicio:new Date},
            datos:[],
            departamentos:[],
            plans:[],
            users:[],
            value: [
                // { name: 'Javascript', code: 'js' }
            ],
            options: [
                // { name: 'Vue.js', code: 'vu' },
                // { name: 'Javascript', code: 'js' },
                // { name: 'Open Source', code: 'os' }
            ]
        }
    },
    created() {
        this.verdatos();
        axios.get('/plan').then(res=>{
            this.plans=res.data;
        })
        axios.get('/departamento').then(res=>{
            this.departamentos=res.data;
            // this.options=res.data;
        })
        this.users=[];
        axios.get('/user').then(res=>{
            // console.log(this.options);
            this.users=res.data;
            // console.log(this.users);
            Object.values(this.users).forEach(item => {
                // console.log(item);
                this.options.push({ name: item.name, code: item.id });
            });
        });
        // console.log(this.tiponotificaiones);
    },

    methods:{
        addTag (newTag) {
            const tag = {
                name: newTag,
                code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
            }
            this.options.push(tag)
            this.value.push(tag)
        },
        crear(){
            // this.nuevo=true;
            this.dato={};
        },
        verdatos(){
            axios.get('/policeplan').then(res=>{
                // console.log(res);
                this.datos=res.data;
            })
        },
        guardar(){
            var cm=this;
                this.$fire({
                    title: "Seguro?",
                    text:"Seguro de crear?",
                    // text: "text",
                    type: "question",
                    timer: 3000,
                    showCloseButton: true,
                    showCancelButton: true,
                }).then(r => {
                    // console.log(r.value);
                    if(r.value){
                        axios.post('/policeplan',this.dato).then(res=>{
                            // console.log(res);
                            // this.datos();
                            // cm.$toastr.s("Creado correctamente!!!");

                            cm.value.forEach(r=>{
                                axios.post('/policesplan',{user_id:r.code,policeplan_id:res.data.id}).then(res=>{
                                    // console.log(res);
                                    this.verdatos();
                                });
                            })
                            cm.$toastr.s("Creado correctamente!!!");
                            $('.bs-example-modal-lg').modal('hide');

                        });
                    }
                });


        },
        // eliminar(id){
        //     var cm=this;
        //     this.$fire({
        //         title: "Eliminar?",
        //         text:"Seguro de eliminar?",
        //         // text: "text",
        //         type: "question",
        //         timer: 3000,
        //         showCloseButton: true,
        //         showCancelButton: true,
        //     }).then(r => {
        //         // console.log(r.value);
        //         if(r.value){
        //             axios.delete('/plan/'+id).then(res=>{
        //                 // console.log(res);
        //                 this.datos();
        //                 cm.$toastr.s("Borrado correctamente!!!");
        //             });
        //         }
        //     });
        // },
        // modificar(item){
        //     // console.log('aa');
        //     this.noti=item;
        //     // console.log(this.noti);
        //     $('.bs-example-modal-lg').modal('show');
        //     this.nuevo=false;
        // },
        // cambio(id){
        //     axios.get('/notificaciones/'+id).then(res=>{
        //         // console.log(res);
        //         // this.notificaciones=res.data;
        //         this.datos();
        //     })
        // }
    }
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
