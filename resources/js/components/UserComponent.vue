<template>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users <small>Usuarios del sistema</small></h3>
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
                            <h2>Controlar usuarios <small>Users</small></h2>
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
                                            Esta funcion permitira la creacion de usuario al sistema y rango policial <code>Control de usuarios</code>
                                        </p>
                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user"></i> Crear nuevo usuario</button>
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Registrar user</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" @submit.prevent="guardar">
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-1 col-sm-1 label-align" for="name">Nombre<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input v-model="user.name" type="text" id="name" required="required" placeholder="Nombre" name="name" class="form-control ">
                                                                </div>
                                                                <label class="col-form-label col-md-1 col-sm-1 label-align" for="email">Gmail<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input v-model="user.email" type="email" id="email" required="required" placeholder="Gmail" name="email" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-1 col-sm-1 label-align" for="categoria">Categoria<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <select @change="subcat($event)"  v-model="categoria" id="categoria" required="required" name="categoria" class="form-control">
                                                                        <option value="">Seleccionar..</option>
                                                                        <option v-for="item in categorias" v-bind:value="item.id">
                                                                            {{item.nombre}}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-form-label col-md-1 col-sm-1 label-align" for="subcategoria">Sub categoria<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <select v-model="user.subcategoria_id" id="subcategoria" required="required" name="categoria" class="form-control">
                                                                        <option v-for="item in subcategorias" v-bind:value="item.id">
                                                                            {{item.nombre}}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label  class="col-form-label col-md-1 col-sm-1 label-align" for="password">Password<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input v-model="user.password" autocomplete="off" type="password" id="password" required="required" placeholder="Password" name="password" class="form-control" minlength="5">
                                                                </div>
                                                                <label  class="col-form-label col-md-1 col-sm-1 label-align" for="password2">Confirm password<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input v-model="password2" type="password" id="password2" autocomplete="off" required="required" placeholder="Confirm password" name="password2" class="form-control" minlength="5">
                                                                    <span class="badge badge-danger " v-show="!registrar"> las contraseñas no coinciden</span>
                                                                    <span hidden>{{registrar=user.password==password2}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-1 col-sm-1 label-align" for="tipo">Tipo User<span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <select v-model="user.tipo" id="tipo" required="required" name="tipo" class="form-control">
                                                                        <option value="">Seleccionar..</option>
                                                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                                                        <option value="GERENTE">GERENTE</option>
                                                                        <option value="POLICIAL">POLICIAL</option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-form-label col-md-1 col-sm-1 label-align" for="imagen">Fotografia<span class="required">*</span>
                                                                </label>
                                                                <input type="file" name="image" @change="getImage" id="imagen" accept="image/*" required>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cancelar</button>
                                                                <button type="submit" :disabled="!registrar" class="btn btn-success" ><i class="fa fa-plus"></i> Registrar</button>

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
            window.onload=function () {
                // this.t=$('#datatable2').DataTable();
            }
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
                imagen : null,

            }
        },
        created() {
            this.datos();
            axios.get('/categoria').then(res=>{
                // console.log(res.data);
                this.categorias=res.data;
                // console.log(res);

            });
        },
        methods: {
            getImage(event){
                //Asignamos la imagen a  nuestra data
                this.imagen = event.target.files[0];
            },
            datos(){
                this.users=[];
                axios.get('/user').then(res=>{
                    // console.log(res.data);
                    this.users=res.data;
                    // console.log(this.users);
                });
            },
            async modificar(item) {
                // console.log(item);
                this.categoria2 = item.subcategoria.categoria_id;
                await axios.get('/subcategoria').then(  res => {
                    res.data.forEach( datos => {
                        if(datos.categoria_id == this.categoria2) {
                             this.subcategorias.push(datos);
                        }
                    });
                    this.user2 = {id: item.id,name: item.name,estado:item.estado, email: item.email, tipo: item.tipo, subcategoria_id: item.subcategoria_id};
                    $('#update').modal('show');
                });
            },
            modificarkey(item){
                this.user3 = {id: item.id};
                $('#key').modal('show');
            },
            actualizar(){
                let cm=this;
                axios.put('/user/'+this.user2.id,this.user2).then(  res => {
                    this.datos();
                    cm.$toastr.s("Modificado correctamente!!!");
                    $('#update').modal('hide');
                });
            },
            actualizarkey(){
                let cm=this;
                axios.post('/userkey/'+this.user3.id,this.user3).then(  res => {
                    // this.datos();
                    cm.$toastr.s("Modificado correctamente!!!");
                    $('#key').modal('hide');
                    // console.log(res);
                });
            },
            guardar()
            {
                // console.log(this.user);
                var cm=this;
                var data = new  FormData();
                data.append('image', this.imagen);
                data.append('name', this.user.name);
                data.append('email', this.user.email);
                data.append('password', this.user.password);
                data.append('subcategoria_id', this.user.subcategoria_id);
                data.append('tipo', this.user.tipo);
                axios.post('./user',data).then(res=>{
                    // console.log(res);

                    console.log(res.data);
                    if(res.data=="0"){
                        cm.$toastr.e("Error al crear usuario","porfavor contacte con el administrador");
                    }else{
                        $('.bs-example-modal-lg').modal('hide');
                        this.datos();
                        cm.$toastr.s("Creado correctamente!!!");
                    }

                    // console.log(res.data);
                    // this.users.push(res.data);
                    // t.row.add( [
                    //     res.data.name,
                    //     res.data.email,
                    //     '<div class="badge badge-success">'+res.data.estado+'</div>',
                    //     res.data.tipo,
                    //     res.data.subcategoria.nombre,
                    //     '<button class="btn btn-sm btn-warning"> <i class="fa fa-pencil"></i> </button>\n' +
                    //     '<button class="btn btn-sm btn-danger" v-on:click="eliminar"> <i class="fa fa-trash"></i> </button>',
                    // ] ).draw( false );
                });
            },
            eliminar(id,index){
                // console.log('a');
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
                        axios.delete('/user/'+id).then(res=>{
                            // this.users.splice(index,1);
                            this.datos();
                            cm.$toastr.s("Borrado correctamente!!!");
                        });
                    }
                });

            },
            subcat(e){
                // console.log(e.target.value);
                axios.get('/subcategoria').then(res=>{
                    // console.log(res.data);
                    // this.users=res.data;
                    this.subcategorias=[];
                    res.data.forEach(datos=>{
                        // console.log(e);
                        if (datos.categoria_id==e.target.value){
                            this.subcategorias.push(datos);
                        }
                    });
                    // console.log(this.subcategorias);
                });
            }
        }
    }
</script>
