<?php

class Cliente  // clientes con C mayus a dif de bbdd
{
    private $idcliente; // las propiedades van a ser cada una de las columnas en bbdd
    private $nombre;
    private $cuit;
    private $telefono;
    private $correo;
    private $fecha_nac;
    private $fk_idprovincia;
    private $fk_idlocalidad;
    private $domicilio;

    public function __construct()// estas entidaes van a tener un constructor quisas alla algo quizas no
    {// el constructor siempre va a existir si yo no lo creo lo crea el lenguaje

    }

    public function __get($atributo)  // los geter y seter si o si lo tenmos que poner para poder usar las propiedades priovadas
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }

    public function cargarFormulario($request)
    {
        $this->idcliente = isset($request["id"]) ? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->cuit = isset($request["txtCuit"]) ? $request["txtCuit"] : "";
        $this->telefono = isset($request["txtTelefono"]) ? $request["txtTelefono"] : "";
        $this->correo = isset($request["txtCorreo"]) ? $request["txtCorreo"] : "";
        $this->fk_idprovincia = isset($request["lstProvincia"]) ? $request["lstProvincia"] : "";
        $this->fk_idlocalidad = isset($request["lstLocalidad"]) ? $request["lstLocalidad"] : "";
        $this->domicilio = isset($request["txtDomicilio"]) ? $request["txtDomicilio"] : "";
        if (isset($request["txtAnioNac"]) && isset($request["txtMesNac"]) && isset($request["txtDiaNac"])) {
            $this->fecha_nac = $request["txtAnioNac"] . "-" . $request["txtMesNac"] . "-" . $request["txtDiaNac"];
        }
    }

    public function insertar() //las operacones basicas que vamos a crear
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //1 paso crear la coneccion (lo de arriba)  // estan en mayus porque son constantes
        
        //Arma la query  define una variable con el codigo sql
        //paso2 crear la consulta
        $sql = "INSERT INTO clientes (  
                    nombre,
                    cuit,
                    telefono,
                    correo,
                    fecha_nac,
                    fk_idprovincia,
                    fk_idlocalidad,
                    domicilio
                ) VALUES (
                    '$this->nombre',
                    '$this->cuit',
                    '$this->telefono',
                    '$this->correo',
                    '$this->fecha_nac',
                    $this->fk_idprovincia,
                    $this->fk_idlocalidad,
                    '$this->domicilio'
                );";
        // print_r($sql);exit;
        //Ejecuta la query 3 paso ejecutar la consulta
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción  //4paso generar algo con lo que hixo la ocnsulta
        $this->idcliente = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE clientes SET
                nombre = '" . $this->nombre . "', //todo es iguall a las propiedades que tenga asignada esa clase
                cuit = '" . $this->cuit . "',
                telefono = '" . $this->telefono . "',
                correo = '" . $this->correo . "',
                fecha_nac =  '" . $this->fecha_nac . "',
                fk_idprovincia =  '" . $this->fk_idprovincia . "',
                fk_idlocalidad =  '" . $this->fk_idlocalidad . "',
                domicilio =  '" . $this->domicilio . "'  // aca no va coma porque ya termino en cambio arriba si
                WHERE idcliente = " . $this->idcliente; // donde cliente actualiza

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM clientes WHERE idcliente = " . $this->idcliente;
 //elimino la tabla clientes  donde idclientes es igual al objetoo donde este ceteado esa clase

        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function obtenerPorId()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT idcliente,
                        nombre,
                        cuit,
                        telefono,
                        correo,
                        fecha_nac,
                        fk_idprovincia,
                        fk_idlocalidad,
                        domicilio
                FROM clientes
                WHERE idcliente = $this->idcliente"; // al no ser un selec me va a traer uno o ningun dato
        if (!$resultado = $mysqli->query($sql)) { //xq obtiene un solo cliente eso es obtener por id
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idcliente = $fila["idcliente"];
            $this->nombre = $fila["nombre"];
            $this->cuit = $fila["cuit"];
            $this->telefono = $fila["telefono"];
            $this->correo = $fila["correo"];
            if(isset($fila["fecha_nac"])){
                $this->fecha_nac = $fila["fecha_nac"];
            } else {
                $this->fecha_nac = "";
            }
            $this->fk_idprovincia = $fila["fk_idprovincia"];
            $this->fk_idlocalidad = $fila["fk_idlocalidad"];
            $this->domicilio = $fila["domicilio"];
        }
        $mysqli->close();

    }

     public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT 
                    idcliente,
                    nombre,
                    cuit,
                    telefono,
                    correo,
                    fecha_nac,
                    fk_idprovincia,
                    fk_idlocalidad,
                    domicilio
                FROM clientes";
        if (!$resultado = $mysqli->query($sql)) { //obtiene todos los cientes
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array(); //para hacer una lista
        if($resultado){ 
            //Convierte el resultado en un array asociativo
  
                       //fetch_assoc,ejecuta una fila por vez
            while($fila = $resultado->fetch_assoc()){ // al no hacer una sola fila,al rta ser verdadero recorre todos
                $entidadAux = new Cliente();
                $entidadAux->idcliente = $fila["idcliente"];
                $entidadAux->nombre = $fila["nombre"];
                $entidadAux->cuit = $fila["cuit"];
                $entidadAux->telefono = $fila["telefono"];
                $entidadAux->correo = $fila["correo"];
                if(isset($fila["fecha_nac"])){
                    $entidadAux->fecha_nac = $fila["fecha_nac"];
                } else {
                    $entidadAux->fecha_nac = "";
                }
                $entidadAux->fk_idprovincia = $fila["fk_idprovincia"];
                $entidadAux->fk_idlocalidad = $fila["fk_idlocalidad"];
                $entidadAux->domicilio = $fila["domicilio"];
                $aResultado[] = $entidadAux;
            }
        }
        return $aResultado;  //para que me de una lista
    }

}
?>