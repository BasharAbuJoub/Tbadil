@extends('components.main')


@section('content')

	@component('components.subheader')
		معلومات الطلب
	@endcomponent

	<div class="container">
		<div class="columns is-centered">
			<div class="column is-three-quarters">
				<div class="card">
					<div class="card-content">
						@if($order->status == 0 && $order->seller_id == Auth::user()->id)

						@endif

					</div>
				</div>
			</div>
		</div>
	</div>


	@if(Auth::user()->admin())



	@endif


@endsection