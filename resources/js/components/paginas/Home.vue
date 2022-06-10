<template>

    <div class="row">
        <div class="col-md-8">
            <h5 class="pt-2" style="color: #611a14"><b>ÚLTIMOS COMUNICADOS</b></h5>
            <hr>
            <transition-group name="fade">
                  
                <div v-for="comment in comments" :key="comment.id" class="border-bottom bloque-a border-top my-2 py-3">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive  center" v-bind:src="'https://ie42003cgalbarracin.edu.pe/web/'+comment.foto"  alt="">
                        </div>
                        <div class="col-md-9">
                            <h5><b>{{ comment.titulo }}<span class="  float-right" style="color: #611a14;"> </span></b></h5>
                            <p><span v-html="comment.cuerpo"></span></p>
                            <a href="#/" class="e-vercomunicado" style="text-decoration: none;" id=" "><i class="bi-link" style="font-size: 1.0rem;  color: #611a14;"></i> Visualizar</a>
                                
                            <i class="bi-calendar pl-2" style="font-size: 1.0rem;  color: #611a14;"></i> Publicado el  
                            {{ comment.registro }}
                                
                        </div>
                    </div>
                 
                </div>
            </transition-group>          
        </div>
        <div class="col-md-4">
                    
                    <h5 class="pt-2" style="color: #611a14"><b>SISTEMA DE SOLICITUD POR CONCEPTOS INSTITUCIONALES</b></h5>
                    <hr>
                     
                    <div class="border-bottom bloque-a border-top my-2 py-3">
                        <h5><b> ENLACE AL FUT </b></h5>
                        <p class="text-justify">PARA REALIZAR LA SOLICITUD POR CONCEPTOS DE Certificado de estudios (duplicado), Examen de aplazados, Examen de subsanación, Exoneración asignatura
                        , Rectificación nombre/apellido, Traslado, Constancia de estudios y Certificado de comportamiento DEBE LLENAR Y ADJUNTAR EL VOUCHER O DNI(SI EL CONCEPTO NO TIENE COSTO) AL SIGUIENTE FORMULARIO DE MESA DE PARTES:
                        <br> <a href="https://solicitud.ie42003cgalbarracin.edu.pe" target="_BLANK"> https://solicitud.ie42003cgalbarracin.edu.pe</a>  PARA LOS DEMÁS CONCEPTOS QUE NO ESTAN EN EL ANTERIOR LISTADO DEBE USAR EL LINK DE MESA DE PARTES</p>                         
                    </div>  
                     
                    <h5 class="pt-2" style="color: #611a14"><b>MESA DE PARTES VIRTUAL</b></h5>
                    <hr>
                     
                    <div class="border-bottom bloque-a border-top my-2 py-3">
                        <h5><b> ENLACE AL FORMULARIO </b></h5>
                        <p class="text-justify">PARA REALIZAR LA SOLICITUD QUE DESEA HACER A LA INSTITUCION DEBE LLENAR Y ADJUNTAR LOS DOCUMENTOS NECESARIOS AL SIGUIENTE FORMULARIO:
                        <br> <a href="https://forms.gle/UtQrEcJTWEX5GiFJ7" target="_BLANK"> * LINK DE FORMULARIO</a></p>                         
                    </div>  
                     
                    <h5 class="pt-2" style="color: #611a14"><b class=""> NOTICIAS DE CIENCIAS </b></h5>
                    <hr>
                    <div class="border-bottom bloque-a border-top my-2 py-3">
                                           <h5><b>EXPERIMENTOS SENCILLOS CASEROS.</b></h5>
                   <p class="text-justify"><b>Experimentos científicos sencillos que puedes hacer en casa.</b></p>
                   <hr>
                                        <h5><b>25 CIUDADES SON RESPONSABLES DE LAS 50% DE LAS EMISIONES URBANAS.</b></h5>
                   <p class="text-justify"><b>Mientras que algunas ciudades han disminuido drásticamente sus emisiones, 23 de estas 25 ciudades son Chinas.    </b></p>
                   <hr>
                                          <a href="laboratorio"><b>Presionar aquí para ver más</b></a>
                    </div>
                      
                    <h5 class="pt-2" style="color: #611a14"><b>ACCESOS DIRECTOS</b></h5>
                    <hr>
                    <div class="border-bottom bloque-a border-top my-2 py-3">
                        <h5><b>LINKS PARA ACCEDER DE FORMA DIRECTA <span class="  float-right" style="color: #611a14;"></span></b></h5>
                        <p class="text-justify">LOS SIGUIENTES ENLACES SON PARA ACCEDER A LAS DISTINTAS APLICACIONES DE LA PLATAFORMA ALBARRACIN EDUCA: <br></p>
                        <a href="https://aula.ie42003cgalbarracin.edu.pe/login.php" class="my-3 btn   btn-block text-white" style="background: #611a14;">
                            <i class="bi-wallet2 px-1" style="font-size: 1.0rem;"></i> Sistema de apoyo pedagogico y administrativo
                        </a>
                        <a href="cr_login.php" class="my-3 btn   btn-block text-white" style="background: #611a14;">
                            <i class="bi-wallet2 px-1" style="font-size: 1.0rem;"></i> Sistema de carpeta de recuperación
                        </a>
                        <a   href="https://aula.ie42003cgalbarracin.edu.pe/plataforma_login" class="my-3 btn  btn-block text-white" style="background: #f4c50b;;">
                            <i class="bi-cloud-check px-1" style="font-size: 1.0rem;"></i> Aula virtual de estudiante
                        </a>
                        
                    </div>
        </div>
    </div> 
</template>


<script>
export default{
    data(){
        return{
        comments: {}
        }
    },
    mounted(){
        this.getResults();
        // before pagination
        // axios.get('/api/comments').then(response => {
        //   this.comments = response.data.data;
        // });
    },
    methods: {
        getResults(page = 1) {
			axios.get('https://ie42003cgalbarracin.edu.pe/web/ajax/comunicado/api_mostrar.php')
				.then(response => {
					this.comments = response.data;
				});
		},
         
        // Our method to GET results from a Laravel endpoint
        
    }
}
</script>