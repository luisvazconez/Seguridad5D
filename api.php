<?php
include_once 'recursos.php';
$usr = array_key_exists('PHP_AUTH_USER', $_SERVER) ? $_SERVER['PHP_AUTH_USER'] : '';
$psw = array_key_exists('PHP_AUTH_PW', $_SERVER) ? $_SERVER['PHP_AUTH_PW'] : '';
header('Content-Type: application/json');
if ($usr != 'admin' || $psw != '12345') {
    die(json_encode(['Error' => 'Error de autenticacion.']));
}
$error_metodo = json_encode(['Error' => 'Metodo HTTP no valido']);
$error_coleccion = json_encode(['Error' => 'No existe la coleccion']);
$error_id = json_encode(['Error' => 'ID no valido o no existe']);

$nuevo_JSON = file_get_contents('php://input');
$nuevo_ARRAY = json_decode($nuevo_JSON, true);


switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        switch ($_GET['collection']) {
            case 'alertas':
                validaGET($alertas);
                break;
            case 'dispositivos':
                validaGET($dispositivos);
                break;
            case 'historial':
                validaGET($historial);
                break;
            case 'ubicaciones':
                validaGET($ubicacion);
                break;
            case 'usuarios':
                validaGET($usuarios);
                break;
            default:
                echo $error_coleccion;
                break;
        }
        break;
    case 'POST':
        switch ($_GET['collection']) {
            case 'alertas':
                validaPOST($alertas, $nuevo_ARRAY);
                break;
            case 'dispositivos':
                validaPOST($dispositivos, $nuevo_ARRAY);
                break;
            case 'historial':
                validaPOST($historial, $nuevo_ARRAY);
                break;
            case 'ubicaciones':
                validaPOST($ubicacion, $nuevo_ARRAY);
                break;
            case 'usuarios':
                validaPOST($usuarios, $nuevo_ARRAY);
                break;
            default:
                echo $error_coleccion;
                break;
        }
        break;
    case 'PUT':
        switch ($_GET['collection']) {
            case 'alertas':
                validaPUT($_GET['id'], $alertas, $nuevo_ARRAY);
                break;
            case 'dispositivos':
                validaPUT($_GET['id'], $dispositivos, $nuevo_ARRAY);
                break;
            case 'historial':
                validaPUT($_GET['id'], $historial, $nuevo_ARRAY);
                break;
            case 'ubicaciones':
                validaPUT($_GET['id'], $ubicacion, $nuevo_ARRAY);
                break;
            case 'usuarios':
                validaPUT($_GET['id'], $usuarios, $nuevo_ARRAY);
                break;
            default:
                echo $error_coleccion;
                break;
        }
        break;
    case 'DELETE':
        switch ($_GET['collection']) {
            case 'alertas':
                validaDEL($_GET['id'], $alertas);
                break;
            case 'dispositivos':
                validaDEL($_GET['id'], $dispositivos);
                break;
            case 'historial':
                validaDEL($_GET['id'], $historial);
                break;
            case 'ubicaciones':
                validaDEL($_GET['id'], $ubicacion);
                break;
            case 'usuarios':
                validaDEL($_GET['id'], $usuarios);
                break;
            default:
                echo $error_coleccion;
                break;
        }
        break;
    default:
        echo $error_metodo;
        break;
}

function validaGET($recurso)
{
    if (empty($_GET['id'])) {
        echo json_encode($recurso);
    } else {
        if (array_key_exists($_GET['id'], $recurso)) {
            echo json_encode($recurso[$_GET['id']]);
        } else {
            echo json_encode(['Error' => 'ID no valido o no existe']);
        }
    }
}
function validaPOST($recurso, $nuevo_recurso)
{
    $recurso[] = $nuevo_recurso;
    echo json_encode($recurso);
}

function validaPUT($id, $recurso, $nuevo_recurso)
{
    if (array_key_exists($id, $recurso)) {
        $recurso[$id] = $nuevo_recurso;
        echo json_encode($recurso);
    } else {
        echo json_encode(['Error' => 'ID no valido o no existe']);
    }
}
function validaDEL($id, $recurso)
{
    if (array_key_exists($id, $recurso)) {
        unset($recurso[$id]);
        echo json_encode($recurso);
    } else {
        echo json_encode(['Error' => 'ID no valido o no existe']);
    }
}
