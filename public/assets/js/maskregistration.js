const handleRegistration = (event) => {
    let input = event.target;
    input.value = registrationMask(input.value);
}

const registrationMask = (value) => {
    if (!value) return "";
    value = value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    value = value.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o ponto após os primeiros 4 dígitos
    value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Adiciona o hífen antes do último dígito
    return value;
}