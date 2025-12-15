import { card_cursos } from "/EDUTASK_1/docente/components/card_cursos.js";

$(document).ready(async () => {

    const resp = await $.post(
        "/EDUTASK_1/estudiante/controller/DashboardEstudianteController.php",
        { peticion: "allCourse" }
    );

    console.log("CURSOS ESTUDIANTE:", resp);

    if (!Array.isArray(resp)) {
        console.error("Respuesta inválida:", resp);
        return;
    }

    card_cursos(resp);
});
