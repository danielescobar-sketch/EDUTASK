export function card_cursos(data) {

    // 🛡️ Validación para evitar errores
    if (!Array.isArray(data)) {
        console.error("card_cursos esperaba un array, recibió:", data);
        return;
    }

    let cards = '';

    data.forEach((curso) => {

        const inicial = curso.docente
            ? curso.docente.charAt(0).toUpperCase()
            : 'X';

        cards += `
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-custom">

                <div class="card-header-custom">
                    <div class="avatar">${inicial}</div>
                    <strong>${curso.docente ?? 'Sin docente'}</strong>
                </div>

                <div class="card-body">
                    <h5><strong>${curso.Materia ?? 'Sin nombre de materia'}</strong></h5>

                    <p><b>Clave:</b> ${curso.clv ?? 'N/A'}</p>

                    <p>
                        <b>Semestre:</b> ${curso.sem_mat ?? 'N/A'}<br>
                        <b>Créditos:</b> ${curso.creditos_mat ?? 'N/A'}
                    </p>

                    <a href="view/actividad_1.php">
                        <button class="btn-ver w-100">Mirar →</button>
                    </a>
                </div>

            </div>
        </div>
        `;
    });

    $('#contenedorCursos').html(cards);
}
