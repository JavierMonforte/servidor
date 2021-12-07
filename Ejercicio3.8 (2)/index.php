<!--Cookies:
8. Vamos a crear una clase App con estos métodos:
a) login: muestra un formulario de login (usuario y contraseña).
b) auth: guarda el usuario y su contraseña en una cookie. Después reenvía la petición a home.
c) home: Muestra un saludo y un enlace para cerrar sesión.
d) logout: elimina las cookies (setcookie(...., time() - 1)) y reenvía a login.
e) Depura tu código. En login, comprueba que no hay ya un usuario. Si lo hay reenvía a home-->

<?php
include ('App.php');
$app = new App();
$app->run();

