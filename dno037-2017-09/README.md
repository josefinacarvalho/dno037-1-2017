# Diseño y Nuevos Medios
### Optativo de Profundización / Diseño / UC
#### 10 de mayo, 2017
__

### INTRODUCCIÓN A LA PROGRAMACIÓN DE SCRIPTS

Aprovechando la séptima clase, de [Introducción a la programación de scripts del lado del cliente con p5.js](https://github.com/profesorfaco/dno037-2017-07#diseño-y-nuevos-medios), y la octava clase, de [Introducción a la programación de scripts del lado del servidor con PHP](https://github.com/profesorfaco/dno037-2017-08/#diseño-y-nuevos-medios), cada estudiante debe armar un sitio web.

La situación ideal es que cada estudiante pueda trabajar con programación, ejecutándose del lado del servidor o del lado del cliente, según corresponda a la presentación adecuada de los datos que explora y presenta en su sitio web.

### JavaScript

- [JavaScript basics](https://github.com/processing/p5.js/wiki/JavaScript-basics)
- [JavaScript Tutorial | w3schools](https://www.w3schools.com/js/default.asp)
- [Tutorial | JavaScript](https://www.javascript.com/try)
- [Una re-introducción a JavaScript (Tutorial de JS) | MDN](https://developer.mozilla.org/es/docs/Web/JavaScript/Una_re-introducci%C3%B3n_a_JavaScript)
- [You Don't Know JS](https://github.com/getify/You-Dont-Know-JS)

### p5.js

- [Beyond the Canvas](https://github.com/processing/p5.js/wiki/Beyond-the-canvas)
- [p5.js overview](https://github.com/processing/p5.js/wiki/p5.js-overview)
- [p5.js (Basic) Cheat Sheet](http://bsk.education/SE8_p5js/p5CheatSheet/)
- [p5.js (Oficial) Reference](https://p5js.org/reference/)
- [Working with data - p5.js Tutorial](https://youtu.be/rJaXOFfwGVw?list=PLRqwX-V7Uu6a-SQiI4RtIwuOrLJGnel0r)


### PHP

- [If statements - PHP5 tutorial](http://www.php5-tutorial.com/basics/if-statements/)
- [Loops - PHP5 tutorial](http://www.php5-tutorial.com/basics/loops/)
- [PHP: Estructuras de Control - Manual](http://php.net/manual/es/language.control-structures.php)
- [Working with arrays - PHP5 tutorial](http://www.php5-tutorial.com/data-types/working-with-arrays/)

### DATOS

#### Para trabajar con datos propios:

- [geojson.io](http://geojson.io/) is a quick, simple tool for creating, viewing, and sharing maps
- [Google Spreadsheet JSON Export](https://gist.github.com/pamelafox/1878143)
- [JSON Formatter & Validator](https://jsonformatter.curiousconcept.com/)
- [PDFTables](https://pdftables.com/): Accurately convert PDF tables to Excel

#### Para trabajar con otros datos:

##### Datasets

- [Archivos públicos SIMCE](http://bases-nat.agenciaeducacion.cl/): Estos archivos están disponibles con información de evaluaciones aplicadas desde el  año 1998.
- [Conjuntos de Datos (CSV)](http://datos.gob.cl/dataset?res_format=CSV&q=&sort=metadata_modified+desc): Portal de Datos Abiertos del Gobierno de Chile
- [Cool Datasets](http://cooldatasets.com/): A place to find cool datasets
- [Corpora](https://github.com/dariusk/corpora): This project is a collection of static corpora (plural of "corpus") that are potentially useful in the creation of weird internet stuff
- [Datos de libre acceso del Banco Mundial](http://datos.bancomundial.org/): Acceso abierto y gratuito a datos sobre el desarrollo en el mundo
- [The Humanitarian Data Exchange](https://data.humdata.org/group/chl)

##### APIs
- [Marvel](https://developer.marvel.com/): The Marvel Comics API.
- [OpenWeatherMap](https://openweathermap.org/current): Current weather and forecasts in your city.
- [Pokéapi](http://pokeapi.co/): All the Pokémon data you'll ever need.
- [Programmable Web](https://www.programmableweb.com/category/all/apis): Search the Largest API Directory on the Web
- [SWAPI](https://swapi.co/): The Star Wars API.
- [The New York Times Developer Network](http://developer.nytimes.com/)


## Mermelada de frutillas y salsa de tomates

**1. Tenemos un documento CSV, que se llama "elections.csv", que tiene una primera línea de encabezado:**

1.1. Si lo quisiera leer con PHP, tendría que hacer algo como:

```
<?php
$data = array_map('str_getcsv', file('elections.csv'));
array_walk($data, function(&$a) use ($data) {$a = array_combine($data[0], $a);});
array_shift($data);
?>
```

1.2. Pero si lo quisiera leer con un sketch de JS —usando p5.js—, tendría que hacer algo como:

```
function preload() {
   data = loadTable("elections.csv", "true", "header");
}
```

**2. Tenemos un documento JSON, que se llama "states.json":**

2.1. Si lo qusiera leer con PHP, tendría que hacer algo como:

```
<?php
$json = file_get_contents('states.json');
$data = json_decode($json,true);
?>
```

2.2. Pero si lo quisiera leer con un sketch de JS —usando p5.js—, tendría que hacer algo como:

```
var url = 'states.json';

function setup() {
   loadJSON(url, gotData, 'json');
   //etc…
}

function gotData(data) {
  //etc…
}
```

### Resultados

- [MACARENA ALFARO](http://profesor.faco.cl/dno037/05-10-2017/alfaro/)
- MARIELA CAMPOS
- [MACARENA CASTILLO](http://profesor.faco.cl/dno037/05-10-2017/castillo/)
- TERESA CHAVARRI
- [JORDANNA DE LA HOZ](http://profesor.faco.cl/dno037/05-10-2017/de_la_hoz/)
- MAGDALENA DEROSAS
- JOSEFINA GAJARDO
- [BASTIAN GARCES](http://profesor.faco.cl/dno037/05-10-2017/garces/)
- [IGNACIO GAVILAN](http://profesor.faco.cl/dno037/05-10-2017/gavilan/)
- ANTONIA HURTADO
- FERNANDA LARRAIN
- FELIPE LEIVA
- [FRANCISCA LÓPEZ](http://profesor.faco.cl/dno037/05-10-2017/lopez/)
- [CONSTANZA MORALES](http://profesor.faco.cl/dno037/05-10-2017/morales/)
- CLAUDIA MORENO
- [DENISSE ORTEGA](http://profesor.faco.cl/dno037/05-10-2017/ortega/)
- [PAULA PINTO](http://profesor.faco.cl/dno037/05-10-2017/pinto/)
- [ISIDORA QUEVEDO](http://profesor.faco.cl/dno037/05-10-2017/quevedo/)
- [MAGDALENA STEPHENS](http://profesor.faco.cl/dno037/05-10-2017/stephens/)

---------

[Clase anterior](https://github.com/profesorfaco/dno037-2017-08/) | [Siguiente clase](https://github.com/profesorfaco/dno037-2017-10/)
