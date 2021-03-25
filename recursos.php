<?php

$alertas = [
    1 => ['id' => '1', 'fecha_hora' => "2021-02-23 00:06:26", 'tipo' => '1', 'idDispositivo' => '1'],
    2 => ['id' => '2', 'fecha_hora' => "2021-03-02 22:21:27", 'tipo' => '1', 'idDispositivo' => '1'],
    3 => ['id' => '3', 'fecha_hora' => "2021-03-02 22:21:27", 'tipo' => '2', 'idDispositivo' => '1'],
    4 => ['id' => '4', 'fecha_hora' => "2021-03-02 22:22:33", 'tipo' => '3', 'idDispositivo' => '1']
];

$dispositivos = [
    1 => ['id' => '1', 'nombre' => "CAM1", 'ip' => '192.168.X.X', 'estado' => '1', 'idUsuario' => '1', 'ubicacion' => '1',]
];
$historial = [
    1 => ['id' => '1', 'fecha_hora' => "2021-02-23 00:06:26", 'tipo' => '1', 'idDispositivo' => '1'],
    2 => ['id' => '2', 'fecha_hora' => "2021-03-02 22:21:27", 'tipo' => '1', 'idDispositivo' => '1'],
    3 => ['id' => '3', 'fecha_hora' => "2021-03-02 22:21:27", 'tipo' => '2', 'idDispositivo' => '1'],
    4 => ['id' => '4', 'fecha_hora' => "2021-03-02 22:22:33", 'tipo' => '3', 'idDispositivo' => '1']
];
$ubicacion = [
    1 => ['id' => '1', 'nombre' => 'Cocina'],
    2 => ['id' => '2', 'nombre' => 'Entrada'],
    3 => ['id' => '3', 'nombre' => 'Pasillo']
];
$usuarios = [
    1 => ['id' => '1', 'email' => "juan_perez_lopez@gmail.com", 'password' => '12345', 'telefono' => '3319910156', 'nombre' => 'Juan', 'apellidoP' => 'Perez', 'apellidoM' => 'Lopez', 'direccion' => 'Av. La Paz #58'],
    2 => ['id' => '2', 'email' => "luisV@gmail.com", 'password' => 'glab12', 'telefono' => '3331959930', 'nombre' => 'Luis', 'apellidoP' => 'Vazconez', 'apellidoM' => 'Baltazar', 'direccion' => 'Av. Higuerillas #304'],
3 => ['id' => '3', 'email' => "guillermoA@gmail.com", 'password' => 'glab123', 'telefono' => '3313120694', 'nombre' => 'Guillermo', 'apellidoP' => 'Arambula', 'apellidoM' => 'Langarica', 'direccion' => 'Av. Gigantes #23'],
4 => ['id' => '4', 'email' => "alexisQ@gmail.com", 'password' => 'glab124', 'telefono' => '3333295432', 'nombre' => 'Alexis', 'apellidoP' => 'Quevedo', 'apellidoM' => 'Limón', 'direccion' => 'Calle: San martin #34'],
5 => ['id' => '5', 'email' => "jairoO@gmail.com", 'password' => 'glab125', 'telefono' => '3340524043', 'nombre' => 'Jairo', 'apellidoP' => 'Ortiz', 'apellidoM' => 'Bernal', 'direccion' => 'Av. Ocampo #94'],
6 => ['id' => '6', 'email' => "diegoB@gmail.com", 'password' => 'qwrasf156', 'telefono' => '4234236841', 'nombre' => 'Diego', 'apellidoP' => 'Baltierra', 'apellidoM' => 'Aguilar', 'direccion' => 'Av. Del rio #2393'],
7 => ['id' => '7', 'email' => "vladimirT@gmail.com", 'password' => 'dsvwe32', 'telefono' => '2412942302', 'nombre' => 'Vladimir', 'apellidoP' => 'Torres', 'apellidoM' => 'Alcantara', 'direccion' => 'Calle: San juan #231'],
8 => ['id' => '8', 'email' => "arielM@gmail.com", 'password' => 'ewfrw5.-', 'telefono' => '9423523423', 'nombre' => 'Ariel', 'apellidoP' => 'Martinez', 'apellidoM' => 'Ocampo', 'direccion' => 'Av. Jazmín #634'],
9 => ['id' => '9', 'email' => "miguelA@gmail.com", 'password' => 'epr21-', 'telefono' => '332023423', 'nombre' => 'Miguel', 'apellidoP' => 'Altamirano', 'apellidoM' => 'Pineda', 'direccion' => 'Av. San onofre #312'],
10 => ['id' => '10', 'email' => "marcoP@gmail.com", 'password' => '0213sdvse', 'telefono' => '552342332', 'nombre' => 'Marco', 'apellidoP' => 'Pineda', 'apellidoM' => 'Arce', 'direccion' => 'Calle: Del Sauz #234'],
11 => ['id' => '11', 'email' => "samael@gmail.com", 'password' => '-wends22', 'telefono' => '034323456', 'nombre' => 'Samael', 'apellidoP' => 'Rivera', 'apellidoM' => 'Cortez', 'direccion' => 'Av. Del campo #954'],
12 => ['id' => '12', 'email' => "kefsa@gmail.com", 'password' => 'sda2-1', 'telefono' => '442131933', 'nombre' => 'Mikel', 'apellidoP' => 'Lopez', 'apellidoM' => 'Contreras', 'direccion' => 'Calle: Del carmen #504'],
13 => ['id' => '13', 'email' => "mike2@gmail.com", 'password' => 'glab76', 'telefono' => '3385323232', 'nombre' => 'Alan', 'apellidoP' => 'Dominguez', 'apellidoM' => 'Roman', 'direccion' => 'Av. Del circuito #3123'],
14 => ['id' => '14', 'email' => "ejsd@gmail.com", 'password' => 'glab345', 'telefono' => '34304690345', 'nombre' => 'Maria', 'apellidoP' => 'Miranda', 'apellidoM' => 'Barrera', 'direccion' => 'Av. San ramon #4356'],
15 => ['id' => '15', 'email' => "1242154rdV@gmail.com", 'password' => 'glab34', 'telefono' => '436363425', 'nombre' => 'Karen', 'apellidoP' => 'Avila', 'apellidoM' => 'Sanchez', 'direccion' => 'Av. Lazaro cardenas #430']
];
