@php
 $title = 'Servicios';

 $breadcrumbs = [
 	[
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'name' => 'services',
 		'title' => 'Servicios',
 	],
 ];
@endphp

@extends('web.layouts.app')

@section('title', $title)

@section('breadcrumbs')
	<x-web.breadcrumbs :title="$title" :breadcrumbs="$breadcrumbs" />
@endsection

@section('main')
	<x-web.section class="bg-white">
		<div class="mb-10">
			<h3 class="text-emerald-700 font-semibold text-2xl">Nuestros Servicios</h3>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 mb-28 gap-10 lg:gap-20">
			<div>
				<img src="{{ Storage::url('services/service1.jpg') }}" alt="" />
			</div>
			<div>
				<h4 class="mb-5 font-semibold text-gray-700">PROCESADO Y EMPAQUE DE FRUTAS</h4>
				<p class="mb-2 text-gray-500">
					Contamos con dos plantas empacadoras de fruta ubicadas estratégicamente en las
					ciudades de Tambo Grande y Sullana con fácil acceso de las principales zonas de
					cultivo y cercano al puerto de Paita.
				</p>
				<p class="mb-2 text-gray-500">
					Nuestras plantas cuentan con certificación HACCP y nuestros procedimientos están
					certificados para Responsabilidad Social.
				</p>
				<p class="mb-2 text-gray-500">
					Nos encargamos del empaque de su fruta (MANGO, UVA, LIMÓN, PALTA, MELÓN),
					cumpliendo con los protocolos Senasa y las especificaciones técnicas de cada
					mercado.
				</p>
			</div>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 mb-20 gap-10 lg:gap-20">
			<div>
				<h4 class="mb-5 font-semibold text-gray-700">MANEJO DE CADENAS PRODUCTIVAS</h4>

				<p class="mb-2 text-gray-500">
					Contamos con un staff de profesionales de amplia experiencia en Agronomía,
					Industria Alimentaria, Inteligencia Comercial, Comercio Exterior y Finanzas,
					para acompañarlo en todo el ciclo de la Agroexportación.
				</p>

				<p class="mb-2 text-gray-500">
					Manejamos la cadena productiva de su fruta, desde el cultivo, monitoreo de
					campos, cosechas, empaque y exportación a los principales mercados del mundo.
				</p>
			</div>
			<div>
				<img src="{{ Storage::url('services/service2.jpg') }}" alt="" />
			</div>
		</div>
	</x-web.section>
@endsection
