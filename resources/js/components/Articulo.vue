<template>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Articulos</h1> 
                <hr>
                <button type="button" class="btn btn-sm btn-primary" @click="modificar=false; abrirModal();">
                    Agregar articulo
                </button>
                <div class="modal" :class="{mostrar : modal}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{tituloModal}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="cerrarModal();">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="pt-2">
                            <label for="nombre">Articulo</label>
                            <input v-model="articulo.nombre" type="text" id="nombre" class="form-control" placeholder="Ingrese el nombre del articulo">
                            <span class="text-danger" v-if="error.nombre">{{error.nombre[0]}}</span>
                        </div>
                        <div class="pt-2">
                            <label for="nombre">Descripcion</label>
                            <textarea v-model="articulo.descripcion" name="" class="form-control" id="descripcion" cols="30" rows="4" placeholder="Ingrese la descripcion del articulo"></textarea>
                            <span class="text-danger" v-if="error.descripcion">{{error.descripcion[0]}}</span>
                        </div>
                        <div class="pt-2">
                            <label for="nombre">Stock</label>
                            <input v-model="articulo.stock" type="number" id="stock" class="form-control" placeholder="Ingrese el stock del articulo">
                            <span class="text-danger" v-if="error.stock">{{error.stock[0]}}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cerrarModal();">Cerrar</button>
                        <button type="button" class="btn btn-primary" @click="guardar();" >Guardar</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="py-2">
                    <table class="table table-striped table-hovered">
                        <tr class="bg-dark text-white">
                            <td>
                                ID
                            </td>
                            <td>
                                Articulo
                            </td>                        
                            <td>
                                Descripcion
                            </td>                        
                            <td>
                                Cantidad
                            </td>
                            <td colspan="2" class="text-center">
                                Accciones
                            </td>
                        </tr>
                        <tr v-for="articulo of articulos.data" :key="articulo.id"> 
                            <td>{{articulo.id}}</td>
                            <td>{{articulo.nombre}}</td>
                            <td>{{articulo.descripcion}}</td>
                            <td>{{articulo.stock}}</td>
                            <td>
                                <button @click="modificar=true; abrirModal(articulo)" class="btn btn-warning btn-sm">Editar</button>
                            </td>
                            <td>
                                <button @click="eliminar(articulo.id)" class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    data(){
        return {
            articulos: [],
            tituloModal : '',
            modal: 0,
            modificar: true,
            articulo: {
                nombre : '',
                descripcion : '',
                stock : 1,
            },
            id:0,
            error:{},
            pagination:{
                page : 2,
                per_page: 5,
            },
        }
    },
    methods:{
        async listar(){
            let res = await axios.get('articulos',{params: this.pagination});
            this.articulos = res.data;
        },
        async guardar(){
            try {
                 
                if(this.modificar){
                    let res = await axios.put('articulos/'+this.id,this.articulo);
                }else{
                    let res = await axios.post('articulos',this.articulo);
                }
                this.$swal('Guardado con éxito');
                this.cerrarModal();
                this.listar();
            }catch (error){ 
                if(error.response.data){
                    this.$swal({icon: 'error',title: 'Revisar correctamente'});
                    this.error = error.response.data.errors;
                }
                console.log(error.response.data);
            }
        },
        async eliminar(id){
            let res = await axios.delete('articulos/'+id);
            this.listar();
        },
        abrirModal(data={}){
            this.modal = 1;
            if(this.modificar){
                this.id=data.id;
                this.tituloModal="Actualizar articulo";
                this.articulo.nombre = data.nombre;
                this.articulo.descripcion = data.descripcion;
                this.articulo.stock = data.stock;
                
            }else{
                this.id=0;
                this.tituloModal="Nuevo articulo";
                this.articulo.nombre = '';
                this.articulo.descripcion = '';
                this.articulo.stock = 1;
            }
        },
        cerrarModal(){
            this.modal = 0;
            this.error={};
        },
    },
    created(){
        this.listar();
    },
        
}
</script>
<style>
    .mostrar{
        display: list-item;
        opacity: 1;
        background: rgba(59, 41, 66, 0.404);
    }
</style>

 
