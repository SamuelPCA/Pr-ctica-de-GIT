<?php

echo "## 4.1.1. Sintaxis de Java\n";
echo "Java es un lenguaje de tipado fuerte y orientado a objetos, donde todo el código debe residir dentro de una clase.\n\n";
echo "* Reglas clave: Distingue entre mayúsculas y minúsculas (case-sensitive) y cada instrucción finaliza estrictamente con un punto y coma (;).\n";
echo "* Punto de entrada: Cualquier aplicación ejecutable requiere el método raíz 'public static void main(String[] args)'.\n";
echo "* Variables: Se debe declarar el tipo de dato antes de su nombre (ej. int edad = 25;).\n\n";

echo "## 4.1.2. Estructuras Repetitivas\n";
echo "Se utilizan para ejecutar un bloque de código múltiples veces mientras se cumpla una condición:\n\n";
echo "* Bucle while: Evalúa la condición antes de entrar al bloque. Si es falsa desde el inicio, no se ejecuta.\n";
echo "  while (condicion) { // código }\n\n";
echo "* Bucle do-while: Ejecuta el bloque al menos una vez, ya que evalúa la condición al final.\n";
echo "  do { // código } while (condicion);\n\n";
echo "* Bucle for: Ideal cuando se conoce de antemano el número exacto de iteraciones. Consta de inicialización, condición e incremento.\n";
echo "  for (int i = 0; i < 10; i++) { // código }\n\n";

echo "## 4.1.3. POO (Atributos y Métodos)\n";
echo "La Programación Orientada a Objetos (POO) modela elementos del mundo real mediante Clases (plantillas) y Objetos (instancias).\n\n";
echo "* Atributos: Son las variables que definen el estado o las características de un objeto (ej. String color;). Por buena práctica, se suelen ocultar usando modificadores de acceso como private (Encapsulamiento).\n";
echo "* Métodos: Son las funciones que definen el comportamiento o las acciones que el objeto puede realizar (ej. void acelerar()).\n";
echo "* Constructor: Un método especial con el mismo nombre de la clase que se ejecuta al instanciar el objeto mediante la palabra clave new.\n\n";

echo "## 4.1.4. Herencia\n";
echo "Es el mecanismo que permite a una clase nueva (clase hija o subclase) adoptar los atributos y métodos de una clase existente (clase padre o superclase), promoviendo la reutilización de código.\n\n";
echo "* Sintaxis: Se implementa utilizando la palabra clave extends.\n";
echo "  public class Perro extends Animal { // hereda de Animal }\n\n";
echo "* Palabra clave super: Se utiliza para invocar al constructor o a los métodos de la clase padre desde la clase hija.\n";
echo "* Sobreescritura (@Override): Permite a la clase hija modificar el comportamiento de un método heredado para adaptarlo a sus propias necesidades.\n";
?>
