function validarCamposVacios(formId) {
    const inputs = document.querySelectorAll(`#${formId} input`);
    for (let input of inputs) {
        if (input.value.trim() === "") {
            Swal.fire({
                icon: 'warning',
                title: 'Campo vacío',
                text: `El campo ${input.placeholder || input.name || input.id} está vacío`,
            });
            return false;
        }
    }
    return true;
}
