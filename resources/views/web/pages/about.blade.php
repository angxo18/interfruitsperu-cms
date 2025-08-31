@php
 $breadcrumbs = [
 	[
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'name' => 'about',
 		'title' => 'Nosotros',
 	],
 ];
@endphp

@extends('components.web.layouts.app')

@section('title', 'Nosotros')

@section('breadcrumbs')
	<x-web.breadcrumbs :title="'Nosotros'" :breadcrumbs="$breadcrumbs" />
@endsection

@section('main')
	<x-web.section class="bg-white text-black">
		<p class="">
			Somos una empresa peruana con amplia experiencia y capacidad técnica, con
			certificaciones vigentes, al servicio del sector agroexportador y de los mercados más
			exigentes de Europa, EE. UU., Asia y Latinoamérica.
		</p>

		<p>
			Contamos con dos plantas empacadoras de fruta, ubicadas estratégicamente en las ciudades
			de Tambo Grande y Sullana, con certificaciones HACCP y SENASA, donde procesamos frutas
			frescas como mango, limón, uva, palta, melón, banano orgánico y otras que sean
			demandadas por el mercado.
		</p>
	</x-web.section>
@endsection
