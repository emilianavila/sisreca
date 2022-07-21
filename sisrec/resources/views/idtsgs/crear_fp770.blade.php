@extends('layouts.plantilla')
@section('title','Preliquidación IDTSG F-770')
@section('content')
    <a href="{{route('idtsgs.index')}}">Volver</a>
    <h4>IMPUESTO DEPARTAMENTAL SOBRE LAS TRANSMISIONES SUCESORIAS Y GRATUITAS (IDTSG)</h4>
    <h1>Formulario de Preliquidación del IDTSG F-770</h1>
    <form action="{{route('idtsgs.store')}}" method="POST">
        @csrf
        <strong>Cálculo de carácter referencial en base a datos ingresados:</strong>
        <table border="1" bordercolor="blue">
            <tr>
                <th colspan="13">NOMBRES Y APELLIDOS O RAZÓN SOCIAL DEL BENEFICIARIO</th>
                <td>SUCESIÓN</td>
            </tr>
            <tr>            
                <td colspan="13"><input type="text" name="nombre"></td>
                <td><input type="checkbox" name="sucesion>"></td>
            </tr>
            <tr>            
                <td colspan="13">DOMICILIO</td>
                <td>TRANSMISIÓN ENTRE VIVOS</td>
            </tr>
            <tr>            
                <td colspan="13"><input type="text" name="domicilio"></td>
                <td><input type="checkbox" name="sucesion>"></td>
            </tr>
            <tr>            
                <td colspan="6">CI/NIT</td>
                <td colspan="4">PERIODO: Mes | Año</td>
                <td colspan="2">DD.JJ. ORIGINAL</td>
                <td colspan="2">FOLIO<br>USO ENTIDAD FINANCIERA O COLECTURÍA</td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="ci_nit"></td>
                <td colspan="4"><input type="month" name="mes_anio"></td>
                <td colspan="2"><input type="text" name="ddjj"></td>
                <td colspan="2"><input type="text" name="folio"></td>
            </tr>
            <tr>            
                <th colspan="14">INFORMACIÓN SOBRE LOS ACTUANTES DE LA OPERACIÓN</th>
            </tr>
            <tr>            
                <td colspan="7">APELLIDOS Y NOMBRES O DENOMINACIÓN</td>
                <td colspan="6">DOMICILIO</td>
                <td colspan="6">% PARTICIPACIÓN</td>
            </tr>
            <tr>
                <td rowspan="4" colspan="1">ENAJENANTES O CEDENTES</td>
                <td colspan="6"><input type="text" name="actuante1"></td>
                <td colspan="6"><input type="text" name="dom_actuante1"></td>
                <td colspan="1"><input type="number" name="parti_actuante1"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante2"></td>
                <td colspan="6"><input type="text" name="dom_actuante2"></td>
                <td colspan="1"><input type="number" name="parti_actuante2"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante3"></td>
                <td colspan="6"><input type="text" name="dom_actuante3"></td>
                <td colspan="1"><input type="number" name="parti_actuante3"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante4"></td>
                <td colspan="6"><input type="text" name="dom_actuante4"></td>
                <td colspan="1"><input type="number" name="parti_actuante4"></td>
            </tr>
            <tr>            
                <td rowspan="5" colspan="1">ADQUIRIENTES O CESIONARIOS</td>
                <td colspan="6"><input type="text" name="actuante5"></td>
                <td colspan="6"><input type="text" name="dom_actuante5"></td>
                <td colspan="1"><input type="number" name="parti_actuante5"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante6"></td>
                <td colspan="6"><input type="text" name="dom_actuante6"></td>
                <td colspan="1"><input type="number" name="parti_actuante6"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante7"></td>
                <td colspan="6"><input type="text" name="dom_actuante7"></td>
                <td colspan="1"><input type="number" name="parti_actuante7"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante8"></td>
                <td colspan="6"><input type="text" name="dom_actuante8"></td>
                <td colspan="1"><input type="number" name="parti_actuante8"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="text" name="actuante9"></td>
                <td colspan="6"><input type="text" name="dom_actuante9"></td>
                <td colspan="1"><input type="number" name="parti_actuante9"></td>
            </tr>
            <tr>
                <th colspan="14">DATOS REFERENTES AL INMUEBLE QUE SE TRANSMITE GRATUITAMENTE</th>
            </tr>
            <tr>
                <td>URBANO</td>
                <td><input type="checkbox" name="urbano"></td>
                <td>RURAL</td>
                <td><input type="checkbox" name="rural"></td>
                <td>Terreno</td>
                <td><input type="checkbox" name="terreno"></td>
                <td>Casa</td>
                <td><input type="checkbox" name="casa"></td>
                <td>Depto.</td>
                <td><input type="checkbox" name="depto"></td>
                <td>Fundo.</td>
                <td><input type="checkbox" name="fundo"></td>
                <td>Cód. Catastral</td>
                <td><input type="checkbox" name="cod_catastral>"></td>
            </tr>
            <tr>
                <td colspan="1">Departamento</td>
                <td colspan="6">Cochabamba</td>
                <td colspan="1">Alcaldía</td>
                <td colspan="6">
                    <select name="alcaldia">
                        <option>AIQUILE</option>
                        <option>ALALAY</option>
                        <option>ANZALDO</option>
                        <option>ARANI</option>
                        <option>ARBIETO</option>
                        <option>ARQUE</option>
                        <option>AYOPAYA</option>
                        <option>BOLIVAR </option>
                        <option>CAPINOTA</option>
                        <option selected="selected">COCHABAMBA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="1">Dirección</td>
                <td colspan="13">
                    <textarea name="direcion" rows="2">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">Nº Matrícula o Folio Real / Fojas y Ptda.</td>
                <td colspan="12"><input type="text" name="mat_folio"></td>
            </tr>
            <tr>
                <td colspan="2">Superficie Total</td>
                <td colspan="5"><input type="text" name="superficie"></td>
                <td colspan="4">Fecha de transmisión o enajenación</td>
                <td colspan="3"><input type="date"></td>
            </tr>
            <tr>
                <td colspan="2">ALICUOTAS DEL IMPUESTO</td>
                <td colspan="3">Ascendientes, descendientes y cónyugue (1%)</td>
                <td><input type="checkbox" name="ascendientes"></td>
                <td colspan="3">Hermanos y sus descendintes (10%)</td>
                <td><input type="checkbox" name="hermanos"></td>
                <td colspan="3">Otros colaterales (20%)</td>
                <td><input type="checkbox" name="otros"></td>
            </tr>
            <tr>
                <th colspan="8">DETERMIANCIÓN DEL SALDO DEFINITIVO A FAVOR DEL GOBIERNO AUTÓNOMO<br>DEPARTAMENTAL DE COCHABAMBA O DEL CONTRIBUYENTE</th>
                <td colspan="2">Sigla</td>
                <td colspan="4">IMPORTES (EN BOLIVIANOS SIN CENTAVOS)</td>
            </tr>
            <tr>
                <td colspan="8">Valuación para el impuesto a la propiedad de bienes inmuebles actualizado</td>
                <td colspan="2">010</td>
                <td colspan="4"><input type="text" name="f010"></td>
            </tr>
            <tr>
                <td colspan="8">Impuesto determinado (Alícuota Sección 4, por S010)</td>
                <td colspan="2">900</td>
                <td colspan="4"><input type="text" name="f900"></td>
            </tr>
            <tr>
                <th colspan="14">LIQUIDACIÓN DEL IMPUESTO</th>
            </tr>
            <tr>
                <td colspan="8">Pagos a cuenta realizados en DD.JJ. Anterior y/o en Boletas de Pago</td>
                <td colspan="2">620</td>
                <td colspan="4"><input type="text" name="f620"></td>
            </tr>
            <tr>
                <td colspan="8">Saldo a favor del contribuyente (S620 - S900; Si > 0)</td>
                <td colspan="2">400</td>
                <td colspan="4"><input type="text" name="f400"></td>
            </tr>
            <tr>
                <td colspan="8">Saldo definitivo a favor del Gobierno Autónomo Departamental<br>de Cochabamba (S900 - S620; Si > 0)</td>
                <td colspan="2">990</td>
                <td colspan="4"><input type="text" name="f990"></td>
            </tr>
            <tr>
                <td colspan="8">"Impuesto a pagar en efectivo (Si S990 > 0)<br>Si la presentación y/o pago es fuera de término debe utilizarse la boleta 1007"</td>
                <td colspan="2">570</td>
                <td colspan="4"><input type="text" name="f570"></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
    </form>
@endsection