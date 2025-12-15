$(document).ready(function () {

    // Escuchar el SUBMIT del formulario (NO el click del botón)
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        if (!validarCamposVacios("loginForm")) {
            return;
        }

        const email = $('#email').val().trim();
        const password = $('#password').val().trim();

        fetch("/EDUTASK_1/login/controller/LoginController.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email, password })
        })
        .then(res => res.json())
        .then(data => {

            console.log("RESPUESTA:", data);

            if (data.status === "ok") {

                Swal.fire({
                    icon: 'success',
                    title: 'Inicio correcto',
                    text: 'Redirigiendo...',
                    showConfirmButton: false,
                    timer: 1500
                });

                setTimeout(() => {
                    if (data.rol === "estudiante") {
                        window.location.href = "/EDUTASK_1/estudiante/dashboard_estudiante.php";
                    } 
                    else if (data.rol === "docente") {
                        window.location.href = "/EDUTASK_1/docente/dashboard_docente.php";
                    }
                }, 1500);

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message || 'Credenciales incorrectas'
                });
            }
        })
        .catch(err => {
            console.error("ERROR:", err);
            Swal.fire('Error', 'Error de conexión', 'error');
        });
    });

});
