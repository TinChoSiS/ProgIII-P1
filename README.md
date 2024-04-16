# -Programación III-

## Práctico 1

### Ejercicio 1
Escribir un script de PHP que tome por parámetros GET 3 valores:
- Numero1
- Operacion
- Numero2

“Numero1” y “Numero2” serán utilizados para realizar operaciones matemáticas, y el 
parámetro “Operación” indicara que operación matemática realizar entre los dos números, 
correspondiendo a:
 sum -> Suma
- res -> Resta
- mul -> Multiplicación
- div -> División
- cuad -> Cuadrado de numero1 solamente

El resultado se debe mostrar de forma que ponga los números, y la operación y el resultado.

Por ejemplo, numer1=2&numero2=10&operacion=mul, debería mostrar como resultado 
“2x10=20”.


### Ejercicio 2
Crear un archivo llamado “personas.php” el cual definirá un array con 10 personas con los datos 
id, nombre, apellido, edad y correo electrónico.

Luego, se deberá crear un archivo llamado “index.php” el cual mostrará una lista de las 10 
personas (solamente nombre y apellido) en formato de enlace.

Al cliquear el enlace deberá ir a un archivo llamado “datos.php” el cual mostrará todos los 
datos de la persona seleccionada en el archivo anterior.

__Nota__: ambos archivos deberán incluir el archivo “personas.php” para que accedan al mismo
array de personas sin tener que definirlo en cada uno
