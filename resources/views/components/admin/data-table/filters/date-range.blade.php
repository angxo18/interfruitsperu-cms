@use('App\Enums\Admin\DateFilterOperator')

@php
 $operators = DateFilterOperator::cases();
@endphp

@props([
	'label' => '',
	'model' => '',
])

<div x-data x-id="['filter-date-range']" class="flex flex-col gap-1">
	@if ($label)
		<label :for="$id('filter-date-range')">{{ $label }}:</label>
	@endif

	<select
		@if($model) x-model="{{ $model }}.operator" @endif
		:id="$id('filter-date-range')"
		class="select select-sm"
	>
		@foreach ($operators as $operator)
			<option value="{{ $operator->value }}">{{ $operator->label() }}</option>
		@endforeach
	</select>

	@if ($model)
		<template x-if="{{ $model }}.operator !== 'between'">
			<input
				type="date"
				class="input input-sm"
				name="from"
				@if($model) x-model="{{ $model }}.from" @endif
			/>
		</template>
	@endif

	@if ($model)
		<template x-if="{{ $model }}.operator === 'between'">
			<div class="flex items-center gap-1">
				<input
					type="date"
					class="input input-sm"
					name="from"
					@if($model) x-model="{{ $model }}.from" @endif
				/>
				<span class="inline-block">-</span>
				<input
					type="date"
					class="input input-sm"
					name="to"
					@if($model) x-model="{{ $model }}.to" @endif
				/>
			</div>
		</template>
	@endif
</div>
