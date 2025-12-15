import { card_cursos } from "../components/card_cursos.js";

$(document).ready(async () => {

    const resp = await $.post(
        "controller/DashboardDocenteController.php",
        { peticion: "allCourse" }
    );

    console.log("CURSOS DOCENTE:", resp);

    if (!Array.isArray(resp)) {
        console.error("La respuesta no es un array:", resp);
        return;
    }

    card_cursos(resp);
});
