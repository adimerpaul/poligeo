<template>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Notificaciones <small>Tipos de notificaciones</small></h3>
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
                            <h2>Controlar  <small>Tipos de notificaciones</small></h2>
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
                                            Esta funcion permitira la creacion modificacion de tipos de notificaciones del sisetmas <code>Control de tipo de notificaciones</code>
                                        </p>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-cog"></i> Crear tipo de notificacion</button>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Crear tipo de notificacion</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="guardar">
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nombre<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input v-model="user.name" type="text" id="name" required="required" placeholder="Nombre" name="name" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="color">Color<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input v-model="user.color" type="color" id="color" required="required" placeholder="Color" name="color" class="form-control ">
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
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Estado</th>
                                                <th>Tipo</th>
                                                <th>Categoria</th>
                                                <th>Opciones</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr v-for="(item,index) in users" :key="index">
                                                <td>{{item.name}}</td>
                                                <td>{{item.email}}</td>
                                                <td><div v-bind:class="item.estado|active">{{item.estado}}</div></td>
                                                <td>{{item.tipo}}</td>
                                                <td>{{item.subcategoria.nombre}}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning"@click="modificar(item)"> <i class="fa fa-pencil"></i> </button>
                                                    <button class="btn btn-sm btn-dark"@click="modificarkey(item)"> <i class="fa fa-key"></i> </button>
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
        <div class="modal fade " id="update" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" >Modificar user</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="actualizar">
                            <div class="item form-group">
                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="name2">Nombre<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input v-model="user2.name" type="text" id="name2" required="required" placeholder="Nombre" name="name" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email2">Gmail<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input v-model="user2.email" type="email" id="email2" required="required" placeholder="Gmail" name="email" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo2">Tipo User<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select v-model="user2.tipo" id="tipo2" required="required" name="tipo" class="form-control">
                                        <option value="">Seleccionar..</option>
                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                        <option value="GERENTE">GERENTE</option>
                                        <option value="POLICIAL">POLICIAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="categoria2">Categoria<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select @change="subcat($event)"  v-model="categoria2" id="categoria2" required="required" name="categoria" class="form-control">
                                        <option value="">Seleccionar..</option>
                                        <option v-for="item in categorias" v-bind:value="item.id">
                                            {{item.nombre}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="subcategoria2">Sub categoria<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select v-model="user2.subcategoria_id" id="subcategoria2" required="required" name="categoria" class="form-control">
                                        <option v-for="item in subcategorias" v-bind:value="item.id">
                                            {{item.nombre}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="estado2">Estado<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select v-model="user2.estado" id="estado2" required="required" name="categoria" class="form-control">
                                        <option value="ACTIVO">ACTIVO</option>
                                        <option value="INACTIVO">INACTIVO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cancelar</button>
                                <button type="submit" class="btn btn-warning" ><i class="fa fa-pencil"></i> Modificar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " id="key" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" >Modificar user</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="demo-formkey" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="actualizarkey">
                            <div class="item form-group">
                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="password12">Password<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input v-model="user3.password" autocomplete="off" type="password" id="password12" required="required" placeholder="Password" name="password" class="form-control" minlength="5">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="password22">Confirm password<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input v-model="password22" type="password" id="password22" autocomplete="off" required="required" placeholder="Confirm password" name="password2" class="form-control" minlength="5">
                                    <span class="badge badge-danger " v-show="!registrar2"> las contraseñas no coinciden</span>
                                    <span hidden>{{registrar2=user3.password==password22}}</span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cancelar</button>
                                <button type="submit" :disabled="!registrar2" class="btn btn-warning" ><i class="fa fa-key"></i> Modificar</button>
                            </div>
                        </form>
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
                user:{tipo:''},
                user2:{tipo:''},
                user3:{},
                users:[],
                categoria:'',
                categoria2:'',
                categorias:[],
                subcategorias:[],
                registrar:true,
                registrar2:true,
                password2:'',
                password22:'',
                t:'',

            }
        },
        created() {}
    }
</script>
