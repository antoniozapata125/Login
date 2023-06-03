function recuperarDatosUsuario() {
    // Realizar una solicitud AJAX al archivo PHP para recuperar los datos del usuario
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'recuperar_datos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Mostrar los datos del usuario en el elemento con el id "resultado"
        document.getElementById('resultado').innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
  

  