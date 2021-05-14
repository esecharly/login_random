$(document).ready(() => {
    $('#btn_generate').click(() => {
        $.ajax({
            type: "POST",
            data: 'id_session=' + parseInt(Math.random() * 10),
            url: "./control/session.php",
            success: (r) => {
              swal("",`Sesion ID: ${r}`,"success");
            }
        });
    });

    $('#btn_close').click(()=>{
        swal('','Ha cerrado sesión','info')
    });
});