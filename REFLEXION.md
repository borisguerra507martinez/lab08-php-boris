# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.
## Pregunta 1

Mi código personal es 03dc0d76 y gettype() me dice que es de tipo string. Es string porque substr() recorta un pedazo de la huella que genera hash(), y esa huella es un texto en hexadecimal. Si lo usara en una suma, PHP solo tomaría los números del inicio (el 03) y mostraría un aviso de valor no numérico, igual que pasó con "12abc".


## Pregunta 2

En mi resultado $precio salió como double porque gettype() usa ese nombre por razones históricas, pero en PHP float y double son el mismo tipo. 0.1 + 0.2 == 0.3 da false porque los decimales se guardan en binario y no quedan exactos, la suma da 0.30000000000000004. Mi $n1 es integer (99), y intdiv(99, 66) da 1 porque solo devuelve la parte entera, mientras que 99 / 66 da 1.5 con decimales.

## Pregunta 3

define() es una función que se ejecuta cuando corre el programa, por eso se puede usar dentro de un if. const se resuelve al compilar y va en el nivel principal del archivo. En mi instalación, con PHP 8.2.12 y Apache 2.4.58 en XAMPP, redefinir me dio false, porque una constante que ya existe no se puede cambiar; la @ solo ocultó el aviso.
