<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Notas e consideracións

### Creación dun blog con Laravel

* Irase seguindo o seguinte titorial: https://laracasts.com/series/laravel-8-from-scratch/episodes/11
* Creamos un novo proxecto de Laravel empregando a consola coa axuda de Composer (seguíronse os pasos desta web https://laravel.com/docs/master#installation-via-composer)
* Creamos unha nova páxina onde se mostrará a vista previa das publicacións. A través de enlaces, poderase acceder á vista completa de cada un nunha páxina diferente.
* Para iso será preciso modificar o arquivo das rutas (web.php) e o posts.blade.php, que será onde se aloxen as vistas previas das publicacións.
* Emprego da clase Filesystem para ler unha ruta.
* O obxectivo é facer a páxina dinámica, recuperando as publicacións mediante funcións en PHP e non mediante _hard coding_.
* Respecto á parte estética, traballaremos con _blades_ e vistas (_views_). Debemos crear un _layout_ no que engadir as ligazóns a arquivos css e js para non ter que repetilos en cada vista (ver capítulo 15). 
* Para crear compoñentes, no arquivo _layout_ damos un nome seguindo a seguinte estrutura: @yield('nomesección). A continuación, no arquivo posts.blade creamos a sección (@section('nomesección)) e nela metemos o contido html que desexemos.


(7:10- vídeo 12)
