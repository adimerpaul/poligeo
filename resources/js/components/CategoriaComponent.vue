<template>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Categorias <small> Categorias</small></h3>
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
                            <h2>Controlar  <small>Tipos de categorias</small></h2>
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
                                            Esta funcion permitira la creacion modificacion  de categorias del sistemas <code>Control de categorias</code>
                                        </p>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" @click.prevent="crear" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Crear  categorias</button>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Crear tipo de categorias</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="guardar">
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="titulo">Nombre<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input v-model="noti.nombre" type="text" id="titulo" required="required" placeholder="Nombre" name="titulo" class="form-control ">
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
                                                <th>Nombre</th>

                                                <th>Opciones</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr v-for="(item,index) in notificaciones" :key="index">
                                                <td>{{index+1}}</td>
                                                <td>{{item.nombre}}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning"@click="modificar(item)"> <i class="fa fa-pencil"></i> </button>
                                                    <button class="btn btn-sm btn-danger" @click="eliminar(item.id,index)"> <i class="fa fa-trash"></i> </button>
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

    export default {
        beforeMount(){
        },
        mounted() {

        },
        data(){
            return {
                noti:{},
                notificaciones:[],
                tipo:[],
                nuevo:true
            }
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
            crear(){
                this.nuevo=true;
                this.noti={};
            },
            datos(){
                axios.get('/categoria').then(res=>{
                    // console.log(res);
                    this.notificaciones=res.data;
                })
            },
            guardar(){
                let cm = this;
                if(this.nuevo){
                    axios.post('/categoria',this.noti).then(res=>{
                        // console.log(res);
                        // this.tiponotificaiones=res.data;
                        $('.bs-example-modal-lg').modal('hide');
                        this.datos();
                        cm.$toastr.s("Creado correctamente!!!");
                        this.noti={}
                    })
                }else{
                    axios.put('/categoria/'+this.noti.id,this.noti).then(res=>{
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
                        axios.delete('/categoria/'+id).then(res=>{
                            // console.log(res);
                            this.datos();
                            cm.$toastr.s("Borrado correctamente!!!");
                        });
                    }
                });
            },
            modificar(item){
                // console.log('aa');
                this.noti=item;
                // console.log(this.noti);
                $('.bs-example-modal-lg').modal('show');
                this.nuevo=false;
            },
            cambio(id){
                axios.get('/categoria/'+id).then(res=>{
                    // console.log(res);
                    // this.notificaciones=res.data;
                    this.datos();
                })
            }
        }
    }
</script>
