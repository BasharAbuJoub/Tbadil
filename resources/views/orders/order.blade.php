@extends('components.main')


@section('content')

	@component('components.subheader')
		معلومات الطلب
	@endcomponent

	@if(session('created'))
		Thank you, The order now awaiting approval.
	@endif

	<div class="container">
		<div class="columns is-centered">
			<div class="column is-three-quarters">
				<div class="card">
					<div class="card-content">


					{{$order->id}}
					{{$order->book()->name_ar}}
					{{--#purcahse time--}}

					</div>
				</div>
			</div>
		</div>
	</div>


	@if(Auth::user()->admin())

		{{--Control buttons--}}

	@endif


@endsection