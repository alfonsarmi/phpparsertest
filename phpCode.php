
<!DOCTYPE html>

<h1 id="pepe" style="color:blue;">A Blue Heading</h1>
<style>/*holi1*/
body {background-color: powderblue;}/*holi2*/
h1   {color: blue;}
p    {color: red;} 
</style>
 <script type="text/javascript">
            function alerta() 
			{
                alert('hola mundo!');
            }
			//coment inside javascript
        </script>
		 <script type="text/javascript">
            function alertar() 
			{
                alert('hola mundo!');
            }
			//coment inside javascript
        </script>
<!-- This is a comment -->
<html lang="en">
  <head>
  <!-- This is a comment -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cards</title>
    <link rel="stylesheet" href="card.css" />
  </head>
  <body>
 <section class="card-list">
      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Never forget</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="avatar.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Author</div>
            Jeff Delaney
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
          <a href="#">web-dev</a>
        </div>
      </article>


<?php
/**
* A PHP_CodeSniffer specific test suite for PHPUnit.
*
* @author    Greg Sherwood <gsherwood@squiz.net>
* @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
* @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
*/
namespace PHP_CodeSniffer\Tests;
use PHPUnit\Framework\TestSuite as PHPUnit_TestSuite;
use PHPUnit\Framework\TestResult;

# Puede importar abreviaturas de clase bajo el mismo espacio de nombres
//use some\namespace\{ClassA, ClassB, ClassC as C};

class TestSuite1 extends PHPUnit_TestSuite
{
	/**
	* Runs the tests and collects their result in a TestResult.
	*
	* @param \PHPUnit\Framework\TestResult $result A test result.
	*
	* @return \PHPUnit\Framework\TestResult
	*/
	public function run(TestResult $result=null):TestResult
	{
		#comentario estilo bash
		
		//ejemplo de asignacion de variables
		$var1 = 34;       //var1 tiene 34
		$var2 = &var1; //var2 tiene 34 
		$va1 = 27;         //Las 2 variables cambian a 27.
		$mivar = '3' ;              // mivar es de tipo string
		$mivar = 2 +  $mivar;  //resultado es 5.
		$mivar2 = 5;
		$mivar3 = (string)123; // Estoy forzando a que sea un string
		$mivar3 = (int)123; // Estoy forzando a que sea un int
		$mivar3 = (integer)123; // Estoy forzando a que sea un integer
		$mivar3 = (object)123; // Estoy forzando a que sea un object

		$result = parent::run($result);
		printPHPCodeSnifferTestOutput();
		return $result;
	}//end run()
	
	public function test(string $hola)
	{
		$var1 = 34;  
		$a = 23;
		$b = 'a' ;
		echo $$b; //mostrará 123
		echo $b; // mostrará a		
		
	}
	
	public function test2()
	{
			test("hola");		
	}
	
}//end class

class TestSuite2 implements PHPUnit_TestSuite, AnotherTest
{
	/**
	* Runs the tests and collects their result in a TestResult.
	*
	* @param \PHPUnit\Framework\TestResult $result A test result.
	*
	* @return \PHPUnit\Framework\TestResult
	*/
	public function run(TestResult $result=null):TestResult
	{	
		$equipo = array(portero=>'Cech', defensa=>'Terry', medio=>'Lampard', delantero=>'Torres');
 
		foreach($equipo as $posicion=>$jugador)
		{
			echo "El " . $posicion . " es " . $jugador;
		}
		
		$result = parent::run($result);
		printPHPCodeSnifferTestOutput();
		return $result;
	}//end run()
}//end class

?>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/a.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Zheng Zhilong
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/b.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Francis Drake
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>
	  
	  
<?php
for($i=0;$i<10;$i++){
    echo 'Hola ' . $i;
	continue;
}
?>


<?php
 $a= 5;
 $res= a%2;
 if($res==0)
  echo "$a es par";
 else if ($res==1)
  echo "$a es impar";
 else
  echo "$a es impar";
?>

<?php
$i=1;
while($i<=7){?>
 <br><font color='blue' size = '<?echo $i;?>' >
 Iteración # : <?php echo $i;
 $i++; ?>
 </font>
<?php } ?>


      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/c.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Edward Teach
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>


      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>



 </section>
  </body>
</html>


<?php
for($i=0;$i<10;$i++){
    echo 'Hola ' . $i;
}
?>


<?php
do {
    if ($i < 5) {
        echo "i no es lo suficientemente grande";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i está bien";

    /* procesar i */

} while (0);
?>


<?php
if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}

$a = true;
$b = false;
$c = $a and $b;

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}
?>

<?php
function inverso($x) {
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1/$x;
}

try {
    echo inverso(5) . "\n";
    echo inverso(0) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally
{
	
	 echo inverso(5) . "\n";
    echo inverso(0) . "\n";
}

// Continuar la ejecución
echo 'Hola Mundo\n';
?>

<?php

function factorial ($valor) 
{
  if ($valor < 0) 
   {
    return –1; // Error
   }

    if ($valor == 0 ) 
     {  
        return 1;
     }
    if ($valor == 1 || $valor == 2) 
    {
       return $valor;
    }

$ret = 1;
for ($i = 2; $i <= $valor; $i++) 
 {
     $ret *= $i;
  }
return $ret;
}

$factorial5 = factorial(5); //LLamamos la función

echo $factorial5;

?>


<?php

function MiFuncion(&$var) 
  {
   $var++;
  }
$a = 5;

MiFuncion($a);

echo "Valor de a: ".$a;

// Aquí $a == 6

?>

<?
require("ejemplos/libreria.php");
$titulo="Mi Segunda Pàgina";
Miencabezado($titulo);
$numero=17;
$resul=par($numero);
?><font color='blue'><b><?
if($resul==1) echo "$numero es par";
 else echo "$numero es impar";?>
</b></font>
<?
finaliza( );
?>


<?php
 $arr = array(1,'cosa',1.57,'gato'=>'raton','perro'=>'gato');
 echo current($arr), "<br>"; // 1
 echo next($arr), "<br>"; // cosa
 echo current($arr), "<br>" ; // cosa
 echo prev($arr), "<br>"; // 1
 echo end($arr), "<br>"; // gato
 echo current($arr), "<br>"; // gato
 echo key($arr), "<br>"; // perro
 echo reset($arr), "<br>"; // 1
?>


<?php

if($submit){
 if(!strcmp($cadena, $cadena2)) echo "Las cadenas son
  iguales<br>";
 else echo "Las cadenas no son iguales<br>";
 $aux=substr($cadena, 2);
 echo $aux, "<br>";
 }
if($explode){
  $campos = explode(":", $cadena);
  foreach($campos as $b)
  echo "$b<br>";
  $cadenaaux= implode(":", $campos);
  echo $cadenaaux, "<br>";
  foreach($campos as $b)
   echo "$b<br>";*/
}
$arreglo = array(1,9,13,2,4,6,7,2,8,24,21);
sort($arreglo);
foreach($arreglo as $b)
  echo "$b<br>";
echo "<br>Longitud del arreglo: ",(count($arreglo));

?>


<?php
 $mensaje="<html><head><title>Hola!!!!!!</title></head> <body>\n
 <font color='blue'> Hola, este es un mensaje en html</font><br>
  <a href='http://www.udea.edu.co'>Enlace a UdeA</a>
 <br><center>
 <img src=\"http://huitoto.udea.edu.co/~dsilva/historia.jpg\">  </center><br>
 Chao!!!!!!!!!!!!!</body></html>";
 $direccion="dsilva@udea.edu.co";
 $subject="Correo en html";
 mail($direccion, $subject, $mensaje, "From:  Diego@latinmail.com\nContent-type: text/html\ncc:  dimasia32@hotmail.com");
 echo "su mensaje ha sido recibido";
?>

<?php
 $fp=fopen("cuenta.txt", "r");
 $contador=fread($fp, filesize("cuenta.txt"));
 echo"<p><strong><font size='7' face='Courier New, Courier,  mono'><em>Usted es el visitante número:  $contador</em></font></strong></p>";
 $contador++;
 fclose($fp);
 $fp=fopen("cuenta.txt", "w");
 fwrite($fp, $contador);
 fclose($fp);
?>

<?php
        // First, we create the father class
        class Human{

                //  We declare the attributes we are going to use
                private $name;
                private $lastName;
                private $age;
                private $gender;

                /*
                 * In the next lines we can watch
                 * a distribution of 2 blocks of code
                 * where the first is the setter and the
                 * next is the getter. These are related
                 * to the attributes above
                        * */

                function setName($name){
                        $this -> name = $name;
                }
                function getName(){
                        return $this->name;
                }

                function setLastName($lastName){
                        $this->lastName = $lastName;
                }
                function getLastName(){
                        return $this->lastName;
                }

                function setAge($age){
                        $this->age = $age;
                }
                function getAge(){
                        return $this->age;
                }

                function setGender($gender){
                        $this->gender = $gender;
                }
                function getGender(){
                        return $this->gender;
                }

                // In this function we make use of
                // all the attributes initialized
                function describeYourself(){
                        print "Hi, I am a ".$this->gender." my name is ".$this->name." ".$this->lastName." and I am ".$this->age." years old \n";  --Mo
                }
        }

        // Here we have the two classes with the inheritance of the Human class
        // They are empty because all is in the father class
        class Man extends Human{

        }

        class Woman extends Human{

        }
        /*
         * In the next lines we have the creation of the objects
         * and the setting of all the attributes
         * at last we have the declaration of the function
         * where we use all the attributes
        * */

        $javier = new Man();
        $javier -> setName("Javier");
        $javier -> setLastName("Marin");
        $javier -> setAge(20);
        $javier -> setGender("man");
        $javier -> describeYourself();

        $ana = new Woman();
        $ana -> setName("Ana");
        $ana -> setLastName("Garcia");
        $ana -> setAge(59);
        $ana -> setGender("woman");
        $ana->describeYourself();

?>

<?php

// Declarar la interfaz 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementar la interfaz
// Ésto funcionará
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}
// Ésto no funcionará
// Error fatal: La Clase BadTemplate contiene un método abstracto
// y por lo tanto debe declararse como abstracta (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>

<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// Ésto sí funcionará
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// Ésto no funcionará y resultará en un error fatal
class d implements b
{
    public function foo()
    {
    }

    public function baz(Foo $foo)
    {
    }
}
?>

<?php
interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}
?>

<?php
interface a
{
    const b = 'Interface constant';
}

// Imprime: Interface constant
echo a::b;


// Sin embargo ésto no funcionará ya que no está permitido
// sobrescribir constantes
class b implements a
{
    const b = 'Class constant';
}
?>

<?php
class MiClase
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante() {
        echo  self::CONSTANTE . "\n";
    }
}


echo MiClase::CONSTANTE . "\n";

$nombreclase = "MiClase";
echo $nombreclase::CONSTANTE . "\n"; // A partir de PHP 5.3.0

$clase = new MiClase();
$clase->mostrarConstante();

echo $clase::CONSTANTE."\n"; // A partir de PHP 5.3.0
?>


<?php
class foo {
    // A partir de PHP 5.3.0
    const BAR = <<<'EOT'
bar
EOT;
    // A partir de PHP 5.3.0
    const BAZ = <<<EOT
baz
EOT;
}
?>

<?php
abstract class dbObject
{   
    const TABLE_NAME='undefined';
   
    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }   
}


class dbPerson extends dbObject
{
    const TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}


echo dbPerson::GetAll()."<br>";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."<br>";//output: "SELECT * FROM `admins`"

?>


<?php

class MyTimer {
    const SEC_PER_DAY = 60 * 60 * 24;
}

?>


<?php
class A {
    const MY_CONST = false;
    public function my_const_self() {
        return self::MY_CONST;
    }
    public function my_const_static() {
        return static::MY_CONST;
    }
}

class B extends A {
   const MY_CONST = true;
}

$b = new B();
echo $b->my_const_self ? 'yes' : 'no'; // output: no
echo $b->my_const_static ? 'yes' : 'no'; // output: yes
?>
