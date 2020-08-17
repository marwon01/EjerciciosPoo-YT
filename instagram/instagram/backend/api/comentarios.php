<?php
//localhost:80/.../api/usuarios.php
        //cho "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];
        //Recibir peticiones del usuario
        //echo 'informacion: '. 
    header("Content-Type: application/json");

    //importamos el archivo " class-usuario.php " 
    include_once("../class/class-comentario.php");
    
    //Necesario solamente si usamos AXIOS, ya que hay que poblarlo manualmente y en modo arreglo asociativo
    $_POST = json_decode(file_get_contents('php://input'), true);

    //Utilizamos el switch para evaluar el metodo de la peticion con el REQUEST_METHOD
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':    //Guardar
            //Es necesario instanciar ya que el metodo utilizado no es static
            $comentario = new Comentario(       //Atributos internos del Constructor (Obligatoria inicializarlos de esta manera)
                $_POST['codigoComentario'], 
                $_POST['codigoPost'], 
                $_POST['usuario'], 
                $_POST['comentario']
            );

            //Utilizamos la instancia, y de esta manera llamamos el metodo guardarPost() desde la clase class-post.php
            $comentario->guardarComentario();
        break;

        //Para los metodos obtenerUsuario() y obtenerUsuarios()
        case 'GET':

            //en la url se especifica en la id, de esa manera se toma para el metodo obtenerUsuario($indice), y retorna el json especifico (usuario)
            if (isset($_GET['idUsuario'])) { 
                //Post::obtenerPosts($_GET['idUsuario']);

            }if (isset($_GET['idPost'])) {

            }else{

            }      
        break;

        //Para el metodo actualizarUsuario()
        case 'PUT':
            // Actualizar                      
        break;

        //Para el metodo eliminarUsuario();
        case 'DELETE':
            // Eliminar
        break;
    }
        //Crear

        //Obtener un usuario

        //Obtener todos los usuarios

        //Actualizar un usuario

        //Eliminar un usuario

?>  