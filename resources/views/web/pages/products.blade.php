@php
 $breadcrumbs = [
 	[
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'name' => 'products',
 		'title' => 'Productos',
 	],
 ];

 $products = [
 	[
 		'title' => 'Mangos',
 		'name' => 'Mango',
 		'description' => 'El mango es una fruta tropical dulce, jugosa y aromática, conocida como “el rey de las frutas” por su sabor exquisito y su versatilidad. Rico en vitaminas A y C, antioxidantes y fibra, aporta energía, refuerza el sistema inmunológico y favorece la digestión. Ideal para disfrutarse fresco, en jugos, ensaladas o postres, es un verdadero deleite que combina salud y frescura en cada bocado.',
 		'image' => Storage::url('products/mango.jpg'),
 	],
 	[
 		'title' => 'Uvas',
 		'name' => 'Uvas',
 		'description' => 'La uva es una fruta pequeña y jugosa, apreciada por su dulzor natural y su gran valor nutritivo. Rica en antioxidantes como los polifenoles y resveratrol, ayuda a cuidar el corazón, mejorar la circulación y fortalecer el sistema inmunológico. Versátil y refrescante, puede consumirse fresca, en jugos, postres o como parte de productos como el vino, aportando sabor y beneficios para la salud en cada racimo.',
 		'image' => Storage::url('products/uva.jpg'),
 	],
 	[
 		'title' => 'Limón',
 		'name' => 'Limón',
 		'description' => 'El limón peruano es una fruta cítrica de aroma intenso y sabor ácido refrescante, reconocida por su jugo abundante y su toque único en la gastronomía. Rico en vitamina C y antioxidantes, fortalece el sistema inmunológico, favorece la digestión y aporta frescura a bebidas, postres y platos típicos.',
 		'image' => Storage::url('products/limon.jpg'),
 	],
 	[
 		'title' => 'Palta',
 		'name' => 'Palta',
 		'description' => 'La palta, también conocida como aguacate, es una fruta cremosa y nutritiva, muy apreciada por su sabor suave y su versatilidad culinaria. Rica en grasas saludables, vitaminas E, C y del grupo B, así como en potasio y fibra, contribuye a la salud cardiovascular, mejora la absorción de nutrientes y aporta energía de forma natural. Ideal para ensaladas, tostadas, cremas o guacamole, es un superalimento que combina sabor y bienestar en cada bocado.',
 		'image' => Storage::url('products/palta.jpg'),
 	],
 	[
 		'title' => 'Melón',
 		'name' => 'Melón',
 		'description' => 'El melón es una fruta dulce, jugosa y refrescante, perfecta para hidratarse gracias a su alto contenido de agua. Rico en vitamina C, antioxidantes y minerales como el potasio, favorece la salud de la piel, la digestión y el equilibrio del organismo. Ideal para disfrutarse fresco, en jugos o postres, aporta frescura y dulzura natural en cada porción.',
 		'image' => Storage::url('products/melon.jpg'),
 	],
 	[
 		'title' => 'Banano orgánico',
 		'name' => 'Banano',
 		'description' => 'El banano orgánico es una fruta dulce, suave y nutritiva, cultivada sin pesticidas ni químicos sintéticos, lo que garantiza su pureza y sabor natural. Rico en potasio, fibra y vitaminas B6 y C, ayuda a mantener la energía, mejorar la digestión y cuidar la salud cardiovascular. Perfecto como snack saludable o en batidos, postres y recetas, es una opción deliciosa y responsable con el medio ambiente.',
 		'image' => Storage::url('products/banano.jpg'),
 	],
 ];

 $materials = [
 	[
 		'name' => 'Cajas',
 		'title' => 'Cajas',
 		'image' => Storage::url('materials/caja.png'),
 	],
 	[
 		'name' => 'Materiales para uva',
 		'title' => 'Materiales para uva',
 		'image' => Storage::url('materials/empaque.png'),
 	],
 	[
 		'name' => 'Esquineros',
 		'title' => 'Esquineros',
 		'image' => Storage::url('materials/esquinero.png'),
 	],
 ];
@endphp

@extends('web.layouts.app')

@section('title', 'Productos')

@section('breadcrumbs')
	<x-web.breadcrumbs :title="'Productos'" :breadcrumbs="$breadcrumbs" />
@endsection

@section('main')
	<x-web.section class="bg-white">
		<div class="mb-10">
			<h3 class="text-emerald-700 font-semibold text-2xl mb-2">Nuestros Productos</h3>
			<p class="text-gray-500">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam saepe dolor sint
				alias corrupti. Harum at debitis dolore unde, vitae ex quam ratione laudantium
				tenetur, asperiores, dolor hic? Nam, odio?
			</p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			@foreach ($products as $product)
				<x-web.product
					:title="$product['title']"
					:name="$product['name']"
					:image="$product['image']"
					:description="$product['description']"
				/>
			@endforeach
		</div>
	</x-web.section>

	<x-web.section class="bg-green-100/40">
		<div class="mb-10">
			<h3 class="text-emerald-700 font-semibold text-2xl mb-2">
				Materiales de empaque e insumos de cadena productiva
			</h3>
			<p class="text-gray-500">
				Brindamos soluciones de logistica de materiales de empaque para mango, uva, limón,
				palta, melón y banano orgánico, así como insumos para el buen manejo de sus
				cultivos. Para ello tenemos alianzas estratégicas con los principales fabricantes
				nacionales y del exterior que nos permiten facilitar productos de calidad
				debidamente certificados para la agroexportación.
			</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			@foreach ($materials as $material)
				<x-web.product
					:title="$material['title']"
					:name="$material['name']"
					:image="$material['image']"
				/>
			@endforeach
		</div>
	</x-web.section>
@endsection
