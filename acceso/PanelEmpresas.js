var Panel = {
    usuarioActivo: true,
    tipoHistory: 2,
    statusAudio: 1,
    idUser: $('#idclienteupdatedatapanel').val(),
    init: function(){
        alert();
    },
    update: function(opcion, info1, info2, req, id){
        console.log(opcion+" - "+info1+" - "+info2+" - "+req+" "+id);
        $.ajax({
            type: 'POST',
            url: '../Config/opciones.php',
            data: {
                "option": "update_request_new_empresas",
                "data1": info1,
                "data2": info2,
                "req": req,
                "id": id
            },
            beforeSend: function () {
                console.log("Enviando...");
            },
            success: function (resp) {
                console.log(resp);
                //Panel.insertHistory();
            },
            error: function (request, textStatus, errorThrown) {
                console.log('Error al Enviar los Datos');
            }
        });
    },
    insertHistory(opcion, hora, history, tipo, id){
        console.log(opcion+" "+hora+" "+history+" "+tipo+" "+id);
        $.ajax({
            type: 'POST',
            url: '../Config/opciones.php',
            data: {
                "option": opcion,
                "hora": hora,
                "history": history,
                "tipo": tipo,
                "id": id
            },
            beforeSend: function () {
                console.log("Enviando...");
            },
            success: function (resp) {
                console.log('Enviados los datos en history')
                //console.log(resp);
                //Panel.insertHistory();
                //window.location.reload();
            },
            error: function (request, textStatus, errorThrown) {
                console.log('Error al Enviar los Datos');
            }
        });
    }
};