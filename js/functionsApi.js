const ruta_base = "/proyectos/servicio";

const getAlumnos = async () => {
  try {
    let response = await fetch(`${ruta_base}/api/alumnos.php`);
    response = await response.json();
    const alumnos_data = document.getElementById("alumnos_data");
    let html = "";
    for(let alumno of response){
      html += `
        <tr>
          <td>${alumno.matricula}</td>
          <td>${alumno.nombre}</td>
          <td>${alumno.apellido}</td>
        </tr>
      `;
    }

    alumnos_data.innerHTML = html
    //return response;
  } catch (error) {
    console.log({error});
  }
}

const createAlumnos = async () => {
  try {
    let nombre = "Edgar";
    let apellido = "Martinez";
    let matricula = "iunbewpuf";
    let curp = "iubean23ine4i23u";
    let correo_electronico = "example@example.com";
    let telefono = "1234567890";
    let fecha_nacimiento = "2000-02-04";

    let response = fetch(`${ruta_base}/api/alumnos-add.php?
      nombre=${nombre}
      &apellido=${apellido}
      &matricula=${matricula}
      &curp=${curp}
      &correo_electronico=${correo_electronico}
      &telefono=${telefono}
      &fecha_nacimiento=${fecha_nacimiento}
    `)
  } catch (error) {
    console.log({error})
  }
}