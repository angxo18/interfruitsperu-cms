@php
 $images = [
 	'https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1463123081488-789f998ac9c4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1602170284188-6a820463dc2b?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 ];
@endphp

@extends('web.layouts.app')

@section('scripts')
	@vite(['resources/js/web/pages/home.js'])
@endsection

@section('title', 'Inicio')

@section('main')
	<x-web.carousel>
		<div class="w-full shrink-0 relative" data-carousel-item>
			<img src="{{ $images[0] }}" alt="Imagen 1" class="w-full h-full object-cover" />
			<!-- Overlay Oscuro para resaltar el texto -->
			<div class="absolute inset-0 bg-black opacity-40"></div>
			<!-- Ajusta la opacidad según lo necesario -->
			<div
				class="absolute bottom-20 left-1/2 transform -translate-x-1/2 text-white text-center bg-black bg-opacity-50 px-4 py-2 rounded"
			>
				<p>¡Bienvenido a nuestro sitio!</p>
			</div>
		</div>

		<div class="w-full shrink-0 relative" data-carousel-item>
			<img src="{{ $images[1] }}" alt="Imagen 2" class="w-full h-full object-cover" />
			<div
				class="absolute bottom-20 left-1/2 transform -translate-x-1/2 text-white text-center bg-black bg-opacity-50 px-4 py-2 rounded"
			>
				<p>Explora nuestras ofertas</p>
			</div>
		</div>

		<div class="w-full shrink-0 relative" data-carousel-item>
			<img src="{{ $images[2] }}" alt="Imagen 3" class="w-full h-full object-cover" />
			<div
				class="absolute bottom-20 left-1/2 transform -translate-x-1/2 text-white text-center bg-black bg-opacity-50 px-4 py-2 rounded"
			>
				<p>Contáctanos para más información</p>
			</div>
		</div>
	</x-web.carousel>

	<p>
		Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, maxime. Ea odio, quas a
		placeat neque, nobis voluptatibus corporis distinctio laborum dolores deleniti quis.
		Molestiae vitae sequi magnam inventore quas. Quidem, nulla pariatur ratione debitis corrupti
		expedita dolore nisi eveniet perferendis facilis accusantium reprehenderit atque minus
		eaque, exercitationem ipsa libero quae? Excepturi iusto rerum cumque dolore. Minus
		reiciendis quo iusto. Voluptatum obcaecati tempore voluptatem in ex aperiam fugit quia
		assumenda odio maiores. Accusamus molestias cumque velit aut molestiae neque autem hic?
		Ratione beatae iure et sequi itaque cupiditate incidunt molestias. Eos error exercitationem
		ex voluptates? Odit nostrum natus inventore repellat quibusdam quidem pariatur ipsum rem
		fugit fuga voluptatum ratione molestiae reprehenderit vitae dignissimos, sunt autem earum
		veniam quia omnis numquam. Dolorum, maiores impedit! Expedita minus consequuntur
		necessitatibus tempora ipsam. Autem expedita, reprehenderit velit vel ullam quaerat
		voluptates inventore veritatis minima ad, sed est animi! Architecto libero itaque alias
		magni non! Cum, exercitationem laboriosam culpa dolore dignissimos, eos molestias aliquam
		facere repellat aspernatur explicabo at fuga quod veniam impedit blanditiis deleniti
		tempore, quos excepturi eaque? Odit reprehenderit est voluptatum vero accusamus. Dolorem,
		error? Fugit temporibus asperiores voluptates quis dolore. Consequuntur itaque inventore
		beatae quasi delectus at doloribus, ex consectetur pariatur amet sunt dolor repudiandae
		labore deleniti eius quibusdam facere laborum cupiditate. Voluptate blanditiis, itaque
		labore assumenda corrupti nobis, numquam rem ea laudantium facilis reprehenderit? Natus,
		laborum voluptate eum labore voluptates ullam enim perferendis eos. Necessitatibus dicta
		assumenda nobis, laudantium aperiam unde? Laborum voluptas aliquid excepturi reiciendis
		inventore quia omnis, ratione, provident fugit quaerat facilis architecto beatae
		consequuntur voluptatem. Non fugiat maxime ex pariatur necessitatibus aut voluptas eos odio
		magnam molestias. Odio! Doloribus explicabo ex eum, veritatis molestias rem, architecto
		suscipit voluptatum nesciunt enim vitae unde pariatur minima officia, cumque tenetur quod!
		Aperiam recusandae quis earum nemo odio enim ea, reiciendis modi! In eaque corrupti ut odit
		quas sint veniam, temporibus reprehenderit a itaque ab labore nesciunt quae, animi, vitae
		quis libero laboriosam! Enim molestias cupiditate asperiores quam provident ratione expedita
		eveniet? Quos repellat, ipsam inventore nam qui quaerat ex tempora corrupti necessitatibus
		voluptas impedit, modi nesciunt recusandae, quibusdam perspiciatis sequi adipisci! Autem
		earum est voluptatem reiciendis temporibus illum itaque quaerat nulla. Ab illum ut facilis
		dolor reiciendis ex itaque fugit. Minus libero beatae in nam maiores exercitationem rerum
		quae, laboriosam necessitatibus esse corporis quos consequuntur repellendus? Nemo nihil
		voluptatem numquam magnam? Officiis id esse, neque praesentium autem doloribus, repellendus
		nulla corporis consectetur sit itaque ab consequatur rem molestiae, recusandae dicta!
		Accusamus dolorem aliquam esse amet repudiandae veniam labore aut incidunt odio. Deleniti
		praesentium aut harum consectetur voluptatum quod velit blanditiis iure molestiae ab at sit
		omnis facere, quibusdam, ut culpa dolorum alias. Rerum delectus cumque eveniet repellendus
		et in. Molestiae, tempore? Porro molestias reprehenderit distinctio officiis, recusandae
		officia tempora saepe rem. Tenetur illo deleniti omnis, aliquid neque laudantium ab,
		incidunt deserunt ea nemo consequatur minima quo libero itaque dignissimos adipisci soluta.
		Amet fugiat dolor temporibus minus tempore incidunt, magnam dicta rerum unde porro
		consequatur quae atque officia? Dolorem quae commodi enim? Iusto inventore impedit sit. Rem
		quisquam quaerat porro natus aspernatur? Molestias, atque. Ad illo sunt quos doloribus
		veritatis cupiditate ipsam suscipit vitae, excepturi fugit esse a laborum corporis, officia
		corrupti deserunt ea. Magnam, sunt? Fugiat laudantium necessitatibus laboriosam debitis
		quae. Cumque asperiores minima dolorum vel. Rem repellat, velit, ipsum minima eaque aliquam
		alias voluptates architecto sapiente temporibus, natus sequi incidunt officia rerum
		repudiandae ea unde quis ullam eius delectus? Consectetur? Aliquid, nisi. Quidem eveniet
		optio nesciunt impedit eos expedita veritatis laboriosam beatae, eligendi obcaecati
		dignissimos corrupti ullam distinctio! Reprehenderit possimus odit amet quidem, quae earum
		fuga. Provident esse sequi nesciunt! Quasi dolorem architecto quidem iure quos distinctio
		magnam alias delectus dolorum tempore cupiditate, doloremque culpa modi explicabo repellat
		nisi, harum quas nostrum fuga et eos numquam ullam. Perferendis, sit perspiciatis! Non odio
		facilis in mollitia libero harum distinctio dicta dolor repudiandae id! Incidunt sit ratione
		est voluptas iure explicabo aliquid maiores labore soluta nihil veritatis, a animi at ipsum
		ipsam. Non velit iure eveniet animi facilis unde nam, dolorum ratione rem veniam beatae
		accusantium vitae officiis culpa ullam tenetur voluptatem praesentium, enim voluptatum
		nostrum ut quibusdam sapiente repudiandae. Aspernatur, dignissimos. Quam, commodi
		laudantium? Mollitia quidem similique reprehenderit a totam impedit sed esse repudiandae
		voluptate, eum odio veniam ea vel! Illum perspiciatis perferendis animi fugit odio officiis
		enim atque, quo sit. Sequi natus provident debitis doloremque illo odio deleniti, laudantium
		dolor ipsam porro fugit soluta nemo possimus omnis aspernatur vitae quia aut voluptate
		eligendi unde molestias minima. Sequi tempora quisquam nemo. Aliquam nam itaque ut doloribus
		perferendis facilis blanditiis ad, perspiciatis amet et incidunt, dicta voluptas veniam?
		Soluta placeat pariatur consequatur sequi, voluptatibus modi repudiandae non iusto nulla
		voluptate commodi quo! Quas, molestias ratione. Atque, laborum exercitationem impedit
		repudiandae officia, sed explicabo tenetur quod id quia sapiente dolor ea velit corporis
		temporibus minima maiores doloribus animi cum magnam facere consectetur esse? Nihil
		voluptatibus mollitia labore! Architecto incidunt dicta totam iure, aut illum obcaecati
		quibusdam libero, harum veritatis cupiditate praesentium minus. Vel autem aliquid,
		voluptatum libero alias quod deleniti enim reiciendis distinctio. Ut aperiam fuga iure
		consequatur quidem perspiciatis ea sunt, aut dicta necessitatibus! Delectus culpa quos magni
		recusandae suscipit quae minima voluptate accusantium laudantium! Doloremque maxime quasi
		nihil, ex dolores est. Earum, incidunt nam maiores aliquid mollitia perferendis, ducimus
		inventore quasi natus ut quis magnam aut accusantium illo eveniet enim voluptatibus id.
		Tempore aut, laborum deserunt veritatis illo recusandae pariatur eaque! Temporibus, officiis
		laudantium cumque a qui distinctio rerum quis repellat veniam illum quas veritatis dolores
		sed vitae magnam quasi? Ea vel unde modi! Expedita amet, est laudantium exercitationem a
		quae! Incidunt enim aspernatur possimus quia molestias harum quos? Vel inventore libero at
		excepturi quaerat saepe consequuntur sed illum expedita? Officia numquam repellat magnam
		maxime quos nisi tempore possimus molestiae nihil! Nisi, impedit quod culpa doloremque
		tempora unde possimus quasi corrupti perferendis nostrum placeat eaque suscipit maxime
		voluptatum aspernatur ratione. Perspiciatis neque ex culpa quis ab maxime eveniet nam facere
		magnam. Laudantium corporis quas quod accusantium quis! Facilis eius, sint accusamus quam,
		aut ipsam enim, neque doloremque beatae eligendi corrupti perspiciatis vero! Eligendi
		pariatur consequatur earum veritatis necessitatibus. Quos, eveniet cupiditate! Aliquam
		ducimus at veritatis quia, explicabo voluptatum ad ab iste praesentium dolore perspiciatis
		obcaecati ipsa excepturi dolorem, modi quas. Qui suscipit, autem labore aspernatur id sit
		reiciendis eveniet. Ab, repellat? Eaque, cupiditate. Cum iste reprehenderit enim.
		Voluptatibus ratione esse dolores magnam, fugit reprehenderit quae aliquam illum excepturi
		perferendis aspernatur, sint omnis consectetur inventore vero nesciunt ad cupiditate eius.
		Aliquam, illum? Similique sunt nobis soluta sapiente, aut quaerat temporibus rerum quo?
		Laudantium doloremque quibusdam rem ut doloribus cupiditate ipsam qui enim autem! Odit
		voluptate amet itaque velit tempora molestias nihil aut? Iure inventore ad ea minus
		blanditiis et, unde reprehenderit, fuga repudiandae iusto, eum laborum alias accusantium
		illum quo? Ad voluptate eligendi sit eos repellendus nostrum cumque hic iure quae iusto. Eos
		nostrum tempora tempore impedit, quos ullam voluptatem accusantium reprehenderit aliquid
		temporibus ut omnis. Excepturi velit molestias sequi animi enim quos mollitia beatae fugit
		unde quis distinctio repellendus, odio qui. Eum libero iure exercitationem alias maiores eos
		accusamus sed cupiditate aliquam, quam a possimus suscipit sapiente non sit sunt, enim
		assumenda ea. Porro labore delectus numquam suscipit id, animi perspiciatis. Quibusdam
		incidunt nihil vero ad ullam, beatae maiores obcaecati doloremque, qui vitae expedita soluta
		eaque deleniti, asperiores accusamus ratione eligendi illum magnam laborum rem repellat eum
		dolorem. Quam, cupiditate laudantium. Dolorum, possimus doloribus! Quia cum ratione odio!
		Incidunt explicabo laboriosam laborum eius minus voluptates dolores voluptatem alias non
		eligendi distinctio nihil atque voluptas, ipsam tempora dolorem veniam maiores praesentium
		similique! Dolorum fugit eveniet porro tempora magni velit assumenda at similique neque,
		quibusdam unde culpa dolores perspiciatis nemo. Recusandae, nihil consequatur. Nam autem
		doloribus molestiae reprehenderit sunt quia minus maiores veniam. Expedita quo, laborum
		aperiam quas, rerum nulla dolor rem aut odit esse qui optio dolorem molestias? Mollitia nam
		dolorum nobis veritatis eius id, ullam in, molestiae quidem saepe culpa fugiat? Sapiente
		odio facere quos quasi. Suscipit a eius voluptatibus velit, repudiandae animi mollitia
		repellendus fuga, aliquam, dolorem aliquid quaerat amet commodi? Nesciunt laudantium
		quisquam quasi delectus maiores officiis corrupti itaque! Fugiat dolorem et obcaecati nobis.
		Sit adipisci quos distinctio corporis nam pariatur explicabo qui aliquid cumque hic,
		blanditiis enim cupiditate minima animi velit, ut laudantium, amet a repellat non quaerat!
		Voluptatibus neque itaque voluptates assumenda nobis ipsa iure nisi voluptatem possimus
		maiores corrupti accusantium aut molestiae ad velit ea ducimus numquam, enim ullam totam
		provident consequatur earum! Temporibus, id earum. In, iure asperiores voluptatem impedit
		placeat dolorum vero quis inventore debitis sapiente ducimus incidunt ad? Molestias
		cupiditate labore officia vel eveniet, iure earum nisi harum magni facilis neque quis
		voluptas. Consequuntur, veniam. Possimus aliquid pariatur totam iure nisi molestiae sunt
		voluptatem sint iusto quis architecto, autem natus eligendi temporibus facere dignissimos
		libero doloremque, recusandae illo nobis incidunt ducimus. In, perspiciatis. Velit
		voluptatem qui autem excepturi quas, temporibus dolores ducimus ullam aperiam deleniti illo
		modi fugiat ratione expedita, similique dolorem, rem amet in maxime? Aliquid corporis
		eligendi labore exercitationem vel omnis! Repellat mollitia corrupti ipsa error cupiditate
		fugiat, alias id in facere voluptatem eligendi, excepturi aperiam atque velit quaerat maxime
		enim nesciunt odio, voluptas ea suscipit earum dolore qui animi. Sint. Fugit ex eos cumque
		voluptate consequuntur, asperiores nemo, at officia est a praesentium ratione modi
		consequatur tenetur non corporis ullam maiores delectus soluta veniam quis, rem sed hic.
		Nostrum, nihil? Dolorem laboriosam ipsa adipisci blanditiis, quae perspiciatis assumenda
		nulla commodi, similique provident ex, maiores aliquam aliquid explicabo. Dolores
		exercitationem dolorem obcaecati eaque. Ipsum natus similique cumque illo nisi tempora quae!
		Architecto perspiciatis neque praesentium magni culpa veritatis, libero quaerat cum aliquam
		veniam perferendis nemo omnis, nulla laudantium accusamus doloremque voluptatibus enim,
		delectus nostrum ullam eaque quasi magnam at. Commodi, fugit. Rem deserunt commodi neque
		fuga mollitia placeat dolore reprehenderit cum sequi molestias, eligendi doloribus! Eius
		unde quo nam omnis numquam maxime ullam fugiat laboriosam, accusantium dicta reiciendis
		neque earum error! Ducimus deserunt rem consequatur accusamus quia quaerat earum
		voluptatibus est, quam inventore doloremque aperiam, perspiciatis consequuntur perferendis.
		Quis explicabo porro quia maiores velit expedita. Obcaecati dicta maxime illum aperiam
		vitae. Veritatis id distinctio quia expedita recusandae animi totam, quasi itaque aperiam
		cumque ipsum molestiae quo, commodi harum veniam fugit eveniet? Molestias aliquam fuga
		corrupti alias illum omnis, cupiditate iusto sit. Culpa laudantium dolorum optio quas rerum
		est reiciendis, necessitatibus voluptatibus veniam labore aliquid minima dignissimos itaque
		officiis voluptatem fugit similique veritatis! Quia harum eos velit sit, nemo amet eaque
		neque! Perferendis sint ea est in eligendi aspernatur pariatur autem assumenda numquam
		expedita. Mollitia reprehenderit voluptas sint iure soluta a aut esse ipsa, tempore qui,
		laudantium dolores iusto? Minus, vero fuga? Tempora, quas! Vitae, culpa autem laboriosam
		laudantium possimus, assumenda molestiae porro atque eos repellat et consequatur mollitia
		repudiandae nihil? Eligendi tempore voluptatem quos deleniti atque necessitatibus odit id,
		illo reprehenderit.
	</p>
@endsection
