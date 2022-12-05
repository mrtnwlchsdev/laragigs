<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Componentes

- Los componentes pueden ser reutilizados e incluidos en varias plantillas blade.php a la vez
- Un componente puede recibir props, los cuales podran ser utilizados dentro de su codigo
- Los componentes de laravel son includidos dentro de una plantilla blade.php de la siguiente forma

    <x-component-name :parameter"$variable" />

- Los componentes de blade pueden combinar varias clases, lo cual permite estilizar un componente de forma personalizada en distintas plantillas

    <x-component-name class="p-24" />
    
    /* --- */

    <div {{$attributes->merge(['class' => 'text-3xl'])}}></div>