# Trabajo Practico Número 1 
---
## Ejercicio 1
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –_**vernumero.php**_- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
## Ejercicio 2
Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método _**GET**_ a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.
## Ejercicio 3
Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy _**nombre**_ , _**apellido**_ tengo _**edad**_ años y vivo en _**dirección**_”, usando la información recibida.
Cambiar el método _**POST**_ por _**GET**_ y analizar las diferencias.

<div style="text-align:center">
<img src="./img/ej3.png"  width="250"/>
</div>

## Ejercicio 4
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método _**GET**_ y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.
## Ejercicio 5
Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 
- no tiene estudios 
- estudios primarios 
- estudios secundarios

Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.
## Ejercicio 6
Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.
## Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. 
Ejemplo del formulario:

<div style="text-align:center">
<img src="./img/ej7.png" style="" width="250"/>
</div>

## Ejercicio 8
La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de \$160, si es estudiante y mayor o igual de 12 años el precio es de \$180, en cualquier otro caso el precio es de \$300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.