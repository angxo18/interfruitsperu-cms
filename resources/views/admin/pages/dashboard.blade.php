@extends('components.admin.layouts.app')

@section('title', 'Dashboard')

@section('main')
	<h1>Dashboard</h1>

	<div class="card card-border bg-base-100">
		<div class="card-body">
			<h2 class="card-title">Card Title</h2>
			<p>
				A card component has a figure, a body part, and inside body there are title and
				actions parts
			</p>
			<div class="card-actions justify-end">
				<button class="btn btn-primary">Buy Now</button>
			</div>
		</div>
	</div>

	<button class="btn" onclick="my_modal_1.showModal()">open modal</button>
	<dialog id="my_modal_1" class="modal">
		<div class="modal-box">
			<h3 class="text-lg font-bold">Hello!</h3>
			<p class="py-4">Press ESC key or click the button below to close</p>
			<div class="modal-action">
				<form method="dialog">
					<!-- if there is a button in form, it will close the modal -->
					<button class="btn">Close</button>
				</form>
			</div>
		</div>
	</dialog>

	<p>
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id deleniti temporibus ipsa
		asperiores recusandae sequi totam, inventore illo suscipit, amet, modi minus at magnam
		expedita nisi facilis explicabo fugiat sit! Eaque totam repudiandae illo, commodi quod
		asperiores aut, ratione nobis perferendis alias voluptatem adipisci sit vel ad, atque
		excepturi illum possimus iste mollitia quas. Aliquam quidem explicabo quasi ad architecto.
		Eligendi iusto provident enim tempore repellat quae cumque culpa, laborum recusandae
		corrupti expedita explicabo mollitia maiores. Error, libero, itaque aut neque vel in aliquid
		perspiciatis culpa quod, perferendis esse minima? Molestiae sit doloremque iste amet debitis
		aspernatur autem maiores sed corrupti totam assumenda, culpa in, perferendis consequatur
		libero itaque nulla cumque consectetur omnis aperiam reprehenderit. Assumenda vel laborum
		ipsam in. Sequi quis minima repudiandae! Dolores blanditiis nam possimus ea quis eius ut
		nemo sequi illo. Explicabo laborum deleniti excepturi animi earum tempora error ipsa sequi
		asperiores, omnis fugiat, ipsum aliquam. Odit illum pariatur, explicabo velit eos ex est?
		Qui repellendus debitis nostrum quis, dolorum aut earum natus delectus eveniet doloremque
		eum corrupti praesentium distinctio cumque non molestiae? Neque, officiis tempora? Odio
		dolor a qui recusandae error sequi, ut voluptates nisi iste fugiat magni praesentium nostrum
		ab illum accusamus, adipisci atque blanditiis. Maxime laborum adipisci inventore minima
		harum, eos id dolorem. Ducimus, voluptatum. Tenetur nulla tempore voluptas ipsa veniam
		sapiente quidem porro officiis iure! Veniam corrupti impedit vel hic, unde obcaecati nihil
		voluptatem nostrum distinctio qui aliquam accusantium, maiores sequi quia! Sunt voluptates
		optio tempora totam quaerat, culpa praesentium impedit! Error eligendi necessitatibus
		placeat asperiores obcaecati velit, minima dicta eos non. Et recusandae, iste laborum
		commodi consequatur amet unde reprehenderit minus! Voluptatem, placeat inventore!
		Reprehenderit ducimus quasi ut nemo? Sit odio voluptates eveniet optio, dicta cumque autem
		neque perspiciatis possimus ullam tempore consectetur minus dolore delectus quo repudiandae
		porro aut suscipit. Sit adipisci fugit quae nulla nihil libero, earum architecto, dolore
		unde id similique consequatur ea nesciunt, nobis iste impedit iure explicabo porro error!
		Fugiat quibusdam repellendus dolores optio esse perspiciatis. Error tempora modi consequatur
		facere eveniet quis, obcaecati, id architecto, rerum at quae magnam labore voluptatem.
		Veritatis adipisci sequi ut ab maxime hic voluptatem? Eius atque optio aspernatur dolore
		doloremque. Vitae quo accusamus, excepturi voluptates harum consectetur nostrum eos rerum
		placeat enim quidem. Iusto adipisci et quidem reprehenderit, quos rem sed accusantium
		consectetur similique, porro, cupiditate modi necessitatibus veniam maiores. Tempore et ut,
		perspiciatis a aliquam ea dolor natus quisquam. Natus quidem ea rem incidunt ratione magni
		reprehenderit impedit vel dicta sapiente libero nemo, eligendi odit numquam, nulla qui
		provident. Rerum voluptatibus tempore eius consectetur repellat quas, illum saepe numquam?
		Ullam vel illum est quasi enim dolores aliquam, magnam ab ut quo non neque nulla eveniet
		ipsam. Error, voluptatibus facere. Reprehenderit eius voluptate laboriosam autem, ad debitis
		perspiciatis excepturi suscipit labore voluptatum ratione laborum fugiat, quibusdam, neque
		ea quis sed. Impedit quae ratione quod voluptas reiciendis nostrum doloremque porro amet.
		Officia nesciunt, a harum maxime accusamus iure autem veritatis voluptatem delectus qui odit
		eius illo non rem facere distinctio minima aliquam culpa praesentium ipsam corporis veniam
		repudiandae. Delectus, ut quasi? Dolor unde et molestiae dicta aperiam natus quasi sapiente,
		similique cupiditate commodi? Ipsam iusto voluptatem blanditiis recusandae nesciunt aperiam
		hic eveniet aliquam numquam quibusdam, esse dolores maxime at quaerat voluptatum. Quod vel
		molestias culpa voluptates odit totam, maxime ad, laboriosam tempore exercitationem velit
		mollitia ea soluta et dolores ratione nemo ullam. Voluptate maiores dolorem molestias sed
		ipsum accusamus similique quos. Cumque mollitia voluptatem eos velit deserunt! Doloribus
		quasi beatae nemo! Rem iure fuga molestias corporis, ad commodi nam quam a neque mollitia
		cumque, odio alias, quasi suscipit animi quae ullam.
	</p>
@endsection
