$(document).ready(()=>{
    // Swal.fire("Any fool can use a computer")
    
    // limitaciones
    $('#nombre').on('input', function () {
        // permitir solo minusculas debemos tener solamente este [a-z ñ] para las mayusculas[A-Z Ñ]
        // no permitir numeros [^a-zA-Z ñÑ]
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g, '');
        // primera letra mayusculas
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#Apaterno').on('input', function () {
        // permitir solo minusculas primero la minusculas [a-z] despues las mayusculas[A-Z]
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g, '');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#Amaterno').on('input', function () {
        // permitir solo minusculas primero la minusculas [a-z] despues las mayusculas[A-Z]
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g, '');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });

    $("#btn_agregar").click(function(){});
})