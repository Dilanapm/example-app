import Dropzone from "dropzone";

Dropzone.autoDiscover = false; // nosotros queremos darle el comportamiento a que rutas se hagan laas peticiones

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true, // esto permite al usuario eliminar su imagen
    dictRemoveFile: 'Borrar archivo',
    maxFiles: 1,
    uploadMultiple: false,
})

dropzone.on('sending', function(file,xhr,formdata){
    console.log(formdata);
});

dropzone.on('success', function(file, response){
    console.log(response);    
});

dropzone.on('error', function(file, message){
    console.log(message);    
});

dropzone.on('removedfile', function(){
    console.log('Archivo eliminado');    
});