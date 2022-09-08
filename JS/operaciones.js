function verDato() {
    let comboEstudiante = document.getElementById("Estudiante");
    let selectedEstudiante = comboEstudiante.options[comboEstudiante.selectedIndex].text;
    document.getElementById('nombreForm').value = selectedEstudiante;

    let comboCarrera = document.getElementById("Carrera");
    let selectedCarrera = comboCarrera.options[comboCarrera.selectedIndex].text;
    document.getElementById('carreraForm').value = selectedCarrera;

    let comboMateria = document.getElementById("Materia");
    let selectedMateria = comboMateria.options[comboMateria.selectedIndex].text;
    document.getElementById('materiaForm').value = selectedMateria;

    // alert(selected, carrera, materia)
}

function mensaje() {
    alert("Regsitro almacenado con éxito")
}