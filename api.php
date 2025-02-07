<?php
// Habilitar CORS y definir que la respuesta será JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Datos de los temas de programación estructurada


$data = [
    "temas" => [
        "variables" => [

            "titulo" => "Variables",
            "imagen" => "https://miweb.com/imagenes/variables.png",
            "definicion" => "Las variables son espacios en memoria que almacenan valores, permitiendo su manipulación y modificación durante la ejecución de un programa en programación.",
            "ejemplo" => '$nombre = "Juan";',
            "video" => "https://www.youtube.com/embed/5DaZXXbHI_U?si=u-MKv4HnFEifNDYh",
            "ruta" => "./programacion/variables.php",
            "subtema" => [
                [
                    
                    
                    "video" => "https://www.youtube.com/embed/Yq_ul1ZhWZI?si=4nPzHFLXc14f_FzR",
                    "titulo" => "Tipos de Datos Básicos",
                    "definicion" => "Python tiene varios tipos de datos fundamentales: números (int, float), cadenas (str), booleanos (bool), y None.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Números enteros (int)
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">25</span>
# Números decimales (float)
<span class="variable">altura</span> <span class="igual">=</span> <span class="resultado">1.75</span>
# Cadenas de texto (str)
<span class="variable">nombre</span> <span class="igual">=</span> <span class="cadena">"Python"</span>
# Booleanos (bool)
<span class="variable">es_programador</span> <span class="igual">=</span> <span class="booleano">True</span>
# Valor nulo
<span class="variable">datos</span> <span class="igual">=</span> <span class="nulo">None</span>
</code></pre>'

                ],
                [
                    
                    
                    
                    "video" => "https://www.youtube.com/embed/7O-C9-ADiO8?si=k9CId-CPE92Peq-v",
                    "titulo" => "Declaración de Variables",
                    "definicion" => "En Python, las variables se utilizan para almacenar valores. No es necesario declarar el tipo de dato explícitamente, ya que Python lo infiere automáticamente.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Declaración de variables
<span class="variable">nombre</span> <span class="igual">=</span> <span class="resultado">"Juan"</span>  # Cadena de texto
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">30</span>        # Número entero
<span class="variable">altura</span> <span class="igual">=</span> <span class="resultado">1.75</span>    # Número decimal (float)
<span class="variable">es_programador</span> <span class="igual">=</span> <span class="resultado">True</span>  # Booleano
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/Yq_ul1ZhWZI?si=_SNyXefx7kLdbKMC",
                    "titulo" => "Entrada de Datos",
                    "definicion" => "La entrada de datos en Python se realiza mediante la función `input()`, que permite al usuario ingresar información desde el teclado. Los datos ingresados siempre se interpretan como cadenas de texto.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Entrada de datos
<span class="variable">nombre</span> <span class="igual">=</span> input(<span class="resultado">"¿Cuál es tu nombre? "</span>)
<span class="variable">edad</span> <span class="igual">=</span> int(input(<span class="resultado">"¿Cuántos años tienes? "</span>))  # Convertir a entero
<span class="variable">altura</span> <span class="igual">=</span> float(input(<span class="resultado">"¿Cuál es tu altura en metros? "</span>))  # Convertir a decimal

print(f"Hola {<span class="variable">nombre</span>}, tienes {<span class="variable">edad</span>} años y mides {<span class="variable">altura</span>} metros.")


</code></pre>'
                ],
                [
                    
                    "video" => "https://www.youtube.com/embed/6cprJILuARw?si=95jhUPTfSr3l_rAU" ,
                    "titulo" => "Operadores Aritméticos",
                    "definicion" => "Los operadores aritméticos permiten realizar operaciones matemáticas básicas como suma, resta, multiplicación, división, módulo y exponente. Son de los operadores más utilizados en Python [[1]][[9]].",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Operadores aritméticos
<span class="variable">suma</span> <span class="igual">=</span> <span class="resultado">5 + 3</span>          # Resultado: 8
<span class="variable">resta</span> <span class="igual">=</span> <span class="resultado">10 - 4</span>        # Resultado: 6
<span class="variable">multiplicacion</span> <span class="igual">=</span> <span class="resultado">3 * 4</span> # Resultado: 12
<span class="variable">division</span> <span class="igual">=</span> <span class="resultado">15 / 3</span>     # Resultado: 5.0
<span class="variable">modulo</span> <span class="igual">=</span> <span class="resultado">10 % 3</span>       # Resultado: 1
<span class="variable">exponente</span> <span class="igual">=</span> <span class="resultado">2 ** 3</span>    # Resultado: 8
</code></pre>'

                ],
                [
                    
                    "video" => "https://www.youtube.com/embed/G1WIQkm7FBQ?si=m7ev47vX-axK2Fuu"
                    "titulo" => "Operadores Relacionales",
                    "definicion" => "Los operadores relacionales, también llamados operadores de comparación, se utilizan para comparar dos valores y determinar la relación entre ellos. Devuelven un valor booleano (True o False) dependiendo de si la condición se cumple o no [[4]][[7]].",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Operadores relacionales
<span class="variable">igual</span> <span class="igual">=</span> <span class="resultado">5 == 5</span>        # True
<span class="variable">diferente</span> <span class="igual">=</span> <span class="resultado">5 != 3</span>    # True
<span class="variable">mayor</span> <span class="igual">=</span> <span class="resultado">10 > 5</span>        # True
<span class="variable">menor</span> <span class="igual">=</span> <span class="resultado">3 < 7</span>         # True
<span class="variable">mayor_igual</span> <span class="igual">=</span> <span class="resultado">8 >= 8</span>  # True
<span class="variable">menor_igual</span> <span class="igual">=</span> <span class="resultado">6 <= 9</span>  # True
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/5DaZXXbHI_U?si=u-MKv4HnFEifNDYh",
                    "titulo" => "Operadores Lógicos",
                    "definicion" => "Los operadores lógicos permiten combinar múltiples condiciones y realizar operaciones lógicas como AND, OR y NOT. Generalmente se usan junto con los operadores relacionales para evaluar expresiones más complejas [[7]][[8]].",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Operadores lógicos
<span class="variable">and_logico</span> <span class="igual">=</span> <span class="resultado">True and False</span>  # False
<span class="variable">or_logico</span> <span class="igual">=</span> <span class="resultado">True or False</span>    # True
<span class="variable">not_logico</span> <span class="igual">=</span> <span class="resultado">not True</span>        # False

# Combinación con operadores relacionales
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">25</span>
<span class="variable">es_adulto</span> <span class="igual">=</span> <span class="resultado">edad >= 18 and edad < 65</span>  # True
</code></pre>'
                ]


            ]

        ],
        "condicionales" =>  [
            "titulo" => "Condicionales",
            "imagen" => "https://miweb.com/imagenes/condicionales.png",
            "definicion" => "Los condicionales en programación estructurada son estructuras que permiten ejecutar diferentes bloques de código según si una condición lógica es verdadera o falsa .",
            "ejemplo" => 'if ($edad >= 18) { echo "Eres mayor de edad"; } else { echo "Eres menor de edad"; }',
            "video" => "https://www.youtube.com/embed/BxGRts-WLgM?si=gc5OuW1myo4gMJlG",
            "ruta" => "./programacion/condicionales.php",
            "subtema" => [
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Condicional if",
                    "definicion" => "La estructura `if` permite ejecutar un bloque de código si se cumple una condición específica.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de if
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">20</span>

<span class="palabra_clave">if</span> <span class="variable">edad</span> <span class="operador">>=</span> <span class="resultado">18</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres mayor de edad"</span>)
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Condicional else",
                    "definicion" => "La estructura `else` se usa para definir una acción alternativa en caso de que la condición del `if` no se cumpla.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de if y else
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">16</span>

<span class="palabra_clave">if</span> <span class="variable">edad</span> <span class="operador">>=</span> <span class="resultado">18</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres mayor de edad"</span>)
<span class="palabra_clave">else</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres menor de edad"</span>)
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Condicional elif",
                    "definicion" => "El `elif` permite agregar múltiples condiciones entre `if` y `else`, evaluando cada una en orden hasta encontrar una verdadera.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de if, elif y else
<span class="variable">edad</span> <span class="igual">=</span> <span class="resultado">15</span>

<span class="palabra_clave">if</span> <span class="variable">edad</span> <span class="operador">>=</span> <span class="resultado">18</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres mayor de edad"</span>)
<span class="palabra_clave">elif</span> <span class="variable">edad</span> <span class="operador">>=</span> <span class="resultado">13</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres un adolescente"</span>)
<span class="palabra_clave">else</span>:
<span class="funcion">print</span>(<span class="cadena">"Eres un niño"</span>)
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Estructura match (switch)",
                    "definicion" => "El `match` permite comparar un valor con múltiples casos, similar a un `switch` en otros lenguajes. Introducido en versiones recientes.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de match (switch)
<span class="variable">dia</span> <span class="igual">=</span> <span class="cadena">"lunes"</span>

<span class="palabra_clave">match</span> <span class="variable">dia</span>:
<span class="palabra_clave">case</span> <span class="cadena">"lunes"</span>:
<span class="funcion">print</span>(<span class="cadena">"Inicio de semana"</span>)
<span class="palabra_clave">case</span> <span class="cadena">"viernes"</span>:
<span class="funcion">print</span>(<span class="cadena">"Fin de semana cerca"</span>)
<span class="palabra_clave">case</span> _:
<span class="funcion">print</span>(<span class="cadena">"Día normal"</span>)
</code></pre>'
                ]

            ]
        ],
        "bucles" =>   [
            "titulo" => "Bucles",
            "imagen" => "https://miweb.com/imagenes/bucles.png",
            "definicion" => "Los bucles permiten ejecutar un bloque de código repetidamente mientras se cumpla una condición o hasta recorrer una colección de elementos.",
            "ejemplo" => 'for ($i = 0; $i < 10; $i++) { echo $i; }',
            "video" => "https://www.youtube.com/embed/EbVT3Xlf2TU?si=GzNfDKz47m3w2Wq_",
            "ruta" => "./programacion/bucles.php",
            "subtema" => [
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Bucle for",
                    "definicion" => "El bucle `for` se usa para iterar sobre una secuencia, como una lista o un rango de valores, ejecutando un bloque de código en cada iteración.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de for con un rango de números
<span class="palabra_clave">for</span> <span class="variable">i</span> <span class="palabra_clave">in</span> <span class="funcion">range</span>(<span class="resultado">5</span>):
<span class="funcion">print</span>(<span class="variable">i</span>)  <span class="comentario"># Imprime números del 0 al 4</span>

# Iterando sobre una lista
<span class="variable">frutas</span> <span class="igual">=</span> [<span class="cadena">"manzana"</span>, <span class="cadena">"banana"</span>, <span class="cadena">"cereza"</span>]

<span class="palabra_clave">for</span> <span class="variable">fruta</span> <span class="palabra_clave">in</span> <span class="variable">frutas</span>:
<span class="funcion">print</span>(<span class="variable">fruta</span>)
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Bucle while",
                    "definicion" => "El bucle `while` ejecuta un bloque de código mientras se cumpla una condición, sin un número fijo de iteraciones.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de while
<span class="variable">contador</span> <span class="igual">=</span> <span class="resultado">0</span>

<span class="palabra_clave">while</span> <span class="variable">contador</span> <span class="operador"><</span> <span class="resultado">5</span>:
<span class="funcion">print</span>(<span class="variable">contador</span>)
<span class="variable">contador</span> <span class="igual">+=</span> <span class="resultado">1</span> <span class="comentario"># Incrementa el contador</span>
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "do while",
                    "definicion" => "El `do while` no está definido de forma nativa, pero se puede simular ejecutando el bloque al menos una vez y usando un `while` al final.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Simulación de do while
<span class="palabra_clave">while</span> <span class="resultado">True</span>:
<span class="variable">numero</span> <span class="igual">=</span> <span class="funcion">int</span>(<span class="funcion">input</span>(<span class="cadena">"Ingresa un número mayor a 0: "</span>))
<span class="palabra_clave">if</span> <span class="variable">numero</span> <span class="operador">></span> <span class="resultado">0</span>:
<span class="palabra_clave">break</span>  <span class="comentario"># Termina el bucle si la condición se cumple</span>


</code></pre>'

                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Bucle for con enumerate",
                    "definicion" => "La función `enumerate` permite obtener tanto el índice como el valor de una secuencia en un `for`.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Uso de enumerate
<span class="variable">frutas</span> <span class="igual">=</span> [<span class="cadena">"manzana"</span>, <span class="cadena">"banana"</span>, <span class="cadena">"cereza"</span>]

<span class="palabra_clave">for</span> <span class="variable">indice</span>, <span class="variable">fruta</span> <span class="palabra_clave">in</span> <span class="funcion">enumerate</span>(<span class="variable">frutas</span>):
<span class="funcion">print</span>(<span class="cadena">"Índice:"</span>, <span class="variable">indice</span>, <span class="cadena">"Fruta:"</span>, <span class="variable">fruta</span>)
</code></pre>'
                ]

            ]
        ],
        "funciones" =>   [
            "titulo" => "Funciones",
            "imagen" => "https://miweb.com/imagenes/funciones.png",
            "definicion" => "Las funciones son bloques de código reutilizables que realizan una tarea específica y pueden recibir parámetros y devolver valores.",
            "ejemplo" => 'function saludar($nombre) { return "Hola, " . $nombre; }',
            "video" => "https://www.youtube.com/embed/9k91jETchkI?si=OKJXIZW-7c-Kdayu",
            "ruta" => "./programacion/funciones.php",
            "subtema" => [

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Definición de una función",
                    "definicion" => "Las funciones permiten agrupar un bloque de código reutilizable que puede ejecutarse cuando se necesite. Se definen con `def` seguido del nombre de la función y paréntesis.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Definición de una función
<span class="palabra_clave">def</span> <span class="funcion">saludar</span>():
    <span class="funcion">print</span>(<span class="cadena">"Hola, mundo!"</span>)

# Llamada a la función
<span class="funcion">saludar</span>()
</code></pre>'
                ],

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Funciones con parámetros",
                    "definicion" => "Las funciones pueden recibir valores llamados parámetros para personalizar su comportamiento.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Función con parámetros
<span class="palabra_clave">def</span> <span class="funcion">saludar</span>(<span class="variable">nombre</span>):
    <span class="funcion">print</span>(<span class="cadena">"Hola, "</span> <span class="operador">+</span> <span class="variable">nombre</span> <span class="operador">+</span> <span class="cadena">"!"</span>)

# Llamada a la función
<span class="funcion">saludar</span>(<span class="cadena">"Carlos"</span>)
</code></pre>'
                ],

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Funciones con retorno",
                    "definicion" => "Las funciones pueden devolver un valor usando la palabra clave `return`, permitiendo que el resultado se use posteriormente.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Función que devuelve un valor
<span class="palabra_clave">def</span> <span class="funcion">sumar</span>(<span class="variable">a</span>, <span class="variable">b</span>):
<span class="palabra_clave">return</span> <span class="variable">a</span> <span class="operador">+</span> <span class="variable">b</span>

# Uso de la función
<span class="variable">resultado</span> <span class="igual">=</span> <span class="funcion">sumar</span>(<span class="resultado">5</span>, <span class="resultado">3</span>)
<span class="funcion">print</span>(<span class="variable">resultado</span>) <span class="comentario"># Imprime 8</span>
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Funciones con valores por defecto",
                    "definicion" => "Se pueden asignar valores por defecto a los parámetros para que la función los use si no se proporciona un valor.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Función con valores por defecto
<span class="palabra_clave">def</span> <span class="funcion">saludar</span>(<span class="variable">nombre</span> <span class="igual">=</span> <span class="cadena">"Amigo"</span>):
    <span class="funcion">print</span>(<span class="cadena">"Hola, "</span> <span class="operador">+</span> <span class="variable">nombre</span> <span class="operador">+</span> <span class="cadena">"!"</span>)

# Llamadas a la función
<span class="funcion">saludar</span>() <span class="comentario"># Usa el valor por defecto</span>
<span class="funcion">saludar</span>(<span class="cadena">"Carlos"</span>)
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Funciones con *args",
                    "definicion" => "El parámetro `*args` permite que una función reciba un número variable de argumentos en forma de tupla.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Función con *args
<span class="palabra_clave">def</span> <span class="funcion">sumar_todos</span>(<span class="operador">*</span><span class="variable">numeros</span>):
    <span class="palabra_clave">return</span> <span class="funcion">sum</span>(<span class="variable">numeros</span>)

# Uso de la función
<span class="variable">resultado</span> <span class="igual">=</span> <span class="funcion">sumar_todos</span>(<span class="resultado">1</span>, <span class="resultado">2</span>, <span class="resultado">3</span>, <span class="resultado">4</span>)
<span class="funcion">print</span>(<span class="variable">resultado</span>) <span class="comentario"># Imprime 10</span>
</code></pre>'
                ]

            ]
        ],


        "POO" =>    [
            "titulo" => "POO",
            "imagen" => "https://miweb.com/imagenes/poo.png",
            "definicion" => "La POO es un paradigma de programación que organiza el código en clases y objetos, permitiendo modelar entidades del mundo real con atributos y comportamientos.",
            "ejemplo" => 'class Persona { public $nombre; public function saludar() { return "Hola, soy " . $this->nombre; } }',
            "video" => "https://www.youtube.com/embed/JVNirg9qs4M?si=TvkO9XuDPUbcdd2N",
            "ruta" => "./programacion/poo.php",
            "subtema" => [

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Clases y Objetos",
                    "definicion" => "Una clase es una plantilla para crear objetos. Un objeto es una instancia de una clase, que agrupa atributos y métodos relacionados.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Definición de una clase
<span class="palabra_clave">class</span> <span class="clase">Persona</span>:
<span class="palabra_clave">def</span> <span class="funcion">__init__</span>(<span class="variable">self</span>, <span class="variable">nombre</span>, <span class="variable">edad</span>):
<span class="variable">self</span>.<span class="variable">nombre</span> <span class="igual">=</span> <span class="variable">nombre</span>
<span class="variable">self</span>.<span class="variable">edad</span> <span class="igual">=</span> <span class="variable">edad</span>

# Creación de un objeto
<span class="variable">persona1</span> <span class="igual">=</span> <span class="clase">Persona</span>(<span class="cadena">"Carlos"</span>, <span class="resultado">30</span>)

# Acceso a atributos
<span class="funcion">print</span>(<span class="variable">persona1</span>.<span class="variable">nombre</span>) <span class="comentario"># Imprime "Carlos"</span>
</code></pre>'
                ],

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Métodos en Clases",
                    "definicion" => "Los métodos son funciones dentro de una clase que definen el comportamiento de los objetos.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Definición de una clase con métodos
<span class="palabra_clave">class</span> <span class="clase">Persona</span>:
<span class="palabra_clave">def</span> <span class="funcion">__init__</span>(<span class="variable">self</span>, <span class="variable">nombre</span>):
<span class="variable">self</span>.<span class="variable">nombre</span> <span class="igual">=</span> <span class="variable">nombre</span>

<span class="palabra_clave">def</span> <span class="funcion">saludar</span>(<span class="variable">self</span>):
<span class="funcion">print</span>(<span class="cadena">"Hola, mi nombre es "</span> <span class="operador">+</span> <span class="variable">self</span>.<span class="variable">nombre</span>)

# Uso de un método
<span class="variable">persona1</span> <span class="igual">=</span> <span class="clase">Persona</span>(<span class="cadena">"Ana"</span>)
<span class="variable">persona1</span>.<span class="funcion">saludar</span>() <span class="comentario"># Imprime "Hola, mi nombre es Ana"</span>


</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Herencia",
                    "definicion" => "La herencia permite que una clase hija herede atributos y métodos de una clase padre, promoviendo la reutilización de código.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Definición de una clase padre
<span class="palabra_clave">class</span> <span class="clase">Animal</span>:
<span class="palabra_clave">def</span> <span class="funcion">__init__</span>(<span class="variable">self</span>, <span class="variable">nombre</span>):
<span class="variable">self</span>.<span class="variable">nombre</span> <span class="igual">=</span> <span class="variable">nombre</span>

<span class="palabra_clave">def</span> <span class="funcion">hacer_sonido</span>(<span class="variable">self</span>):
<span class="funcion">print</span>(<span class="cadena">"Sonido genérico"</span>)

# Definición de una clase hija
<span class="palabra_clave">class</span> <span class="clase">Perro</span>(<span class="clase">Animal</span>):
<span class="palabra_clave">def</span> <span class="funcion">hacer_sonido</span>(<span class="variable">self</span>):
<span class="funcion">print</span>(<span class="cadena">"Guau Guau"</span>)

# Creación de un objeto de la clase hija
<span class="variable">mi_perro</span> <span class="igual">=</span> <span class="clase">Perro</span>(<span class="cadena">"Fido"</span>)
<span class="variable">mi_perro</span>.<span class="funcion">hacer_sonido</span>() <span class="comentario"># Imprime "Guau Guau"</span>
</code></pre>'
                ],
                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Métodos y atributos estáticos",
                    "definicion" => "Los métodos y atributos estáticos pertenecen a la clase en lugar de a una instancia específica.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
<span class="palabra_clave">class</span> <span class="clase">Utilidad</span>:
<span class="variable">valor_global</span> <span class="igual">=</span> <span class="resultado">10</span>  <span class="comentario"># Atributo estático</span>

<span class="decorador">@staticmethod</span>
<span class="palabra_clave">def</span> <span class="funcion">mostrar_mensaje</span>():
<span class="funcion">print</span>(<span class="cadena">"Mensaje estático"</span>)

# Uso de un método estático
<span class="clase">Utilidad</span>.<span class="funcion">mostrar_mensaje</span>() <span class="comentario"># Imprime "Mensaje estático"</span>

# Acceso a un atributo estático
<span class="funcion">print</span>(<span class="clase">Utilidad</span>.<span class="variable">valor_global</span>) <span class="comentario"># Imprime 10</span>


</code></pre>'
                ],

                [
                    "video" => "https://www.youtube.com/embed/YOUTUBE_VIDEO_ID",
                    "titulo" => "Encapsulamiento",
                    "definicion" => "El encapsulamiento permite restringir el acceso a ciertos atributos de una clase, utilizando guiones bajos (`_`) para indicar que son privados.",
                    "ejemplo" =>
                    '<pre><code id="codigo">
# Definición de una clase con atributos privados
<span class="palabra_clave">class</span> <span class="clase">CuentaBancaria</span>:
<span class="palabra_clave">def</span> <span class="funcion">__init__</span>(<span class="variable">self</span>, <span class="variable">saldo</span>):
<span class="variable">self</span>.<span class="privado">__saldo</span> <span class="igual">=</span> <span class="variable">saldo</span>  <span class="comentario"># Atributo privado</span>

<span class="palabra_clave">def</span> <span class="funcion">mostrar_saldo</span>(<span class="variable">self</span>):
<span class="funcion">print</span>(<span class="cadena">"Saldo disponible: "</span>, <span class="variable">self</span>.<span class="privado">__saldo</span>)

# Creación de un objeto
<span class="variable">cuenta</span> <span class="igual">=</span> <span class="clase">CuentaBancaria</span>(<span class="resultado">1000</span>)
<span class="variable">cuenta</span>.<span class="funcion">mostrar_saldo</span>() <span class="comentario"># Imprime "Saldo disponible: 1000"</span>


</code></pre>'
                ]


            ]
        ],
        "ejercicios" => [
            "titulo" => "Ejercicios de Programación Estructurada",
            "imagen" => "./imagenes/img_ejercicios.jpg",
            "definicion" => "La mejor manera de afianzar conocimientos es practicando.
No basta con entender la teoría; hay que ponerla en acción y enfrentarse a desafíos reales. 💡

Aquí tienes un conjunto de ejercicios diseñados para desafiarte, reforzar lo aprendido y hacerte pensar como un programador. A través de la práctica mejorarás tu lógica .",
            "ejemplo" => 'class Persona { public $nombre; public function saludar() { return "Hola, soy " . $this->nombre; } }',
            "video" => "",
            "ruta" => "./programacion/poo.php",
        ]
    ]





];

// Convertir a JSON y devolver la respuesta
echo json_encode($data, JSON_PRETTY_PRINT);
