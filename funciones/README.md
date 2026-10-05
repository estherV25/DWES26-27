## Tema 1
## Ejercicios funciones 1
Crea una página llamada **contador.php**. Crea una función llamada `cuenta($a, $b
)` que reciba dos parámetros y vaya contando de un número al otro, separando los
números por comas. Después, pruébala en el código PHP haciendo que cuente del 10
al 20.

![alt text](img/ejercicio1.png)
---

## Ejercicios funciones 2
Crea una página llamada `intercambia.php`. Añade dentro una función llamada inter-
cambia que reciba 2 parámetros numéricos por referencia, y lo que haga sea intercam-
biar sus valores. Es decir, si recibe el parámetro `$a` y el valor de `$b` , y `$b` tome el valor
de `$a`.

![alt text](img/ejercicio2.png)
---

## Ejercicios funciones 3
Crea una función que devuelva el mayor de todos los números recibidos como parámetro variables:
*function mayor(): int*. Utiliza las funciones *func_get_args(), etc…*

**No puedes usar la función max()**

![alt text](img/ejercicio3.png)
---

## Ejercicio funciones 4
Crea una variable de texto con una hora en ella (por ejemplo, “21:30:12”), y luego procésala
para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida.
Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo,
porque 63 no es un minuto válido.

![alt text](img/ejercicio4.png)
---

## Ejercicio funciones 5
Añade las siguientes funciones:
- `digitos(int $num): int `→ devuelve la cantidad de dígitos de un número.
- `digitoN(int $num, int $pos): int` → devuelve el dígito que ocupa, empezando
por la izquierda, la posición $pos.
- `quitaPorDetras(int $num, int $cant): int` → le quita por detrás (derecha) $cant dígitos.
- `quitaPorDelante(int $num, int $cant): int` → le quita por delante (izquierda) $cant dígitos.

![alt text](img/ejercicio5.png)
---

## Ejercicio funciones 6
Vamos a simular un formulario de acceso:

`login.php`: el formulario de entrada, que solicita el usuario y contraseña

`compruebaLogin.php`: recibe los datos y comprueba si son correctos (los usuarios se guardan en un array asociativo) pasando el control mediante el uso de include a:

**ok.php**: El usuario introducido es correcto

**ko.php**: El usuario es incorrecto. Informar si ambos están mal o solo la contraseña. Volver amostrar el formulario de acceso


---