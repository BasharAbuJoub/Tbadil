@extends('components.main')


@section('content')


	@component('components.subheader')
		معلومات الطلب
	@endcomponent

	@if(session('created'))
		Thank you, The order now awaiting approval.
	@endif

	
	
	


	<div class="container" style="margin-top: 50px;">
		<div class="columns is-centered">
			<div class="column is-three-quarters">
				<div class="card">
					<div class="card-content">


						<table class="table is-fullwidth" dir="rtl">
							<tbody>
							<tr>
								<td><b>رقم الطلب</b></td>
								<td>{{$order->id}}</td>
							</tr>
							<tr>
								<td><b>حالة الطلب</b></td>
								<td>{{$order->arStatus()}}</td>
							</tr>
							<tr>
								<td><b>الاسم العربي</b></td>
								<td><a href="{{route('books.show', ['book'=>$order->book()->id])}}">{{$order->book()->name_ar}}</a></td>
							</tr>
							<tr>
								<td><b>الاسم الأنجليزي</b></td>
								<td><a href="{{route('books.show', ['book'=> $order->book()->id])}}">{{$order->book()->name_en}}</a></td>
							</tr>
							<tr>
								<td><b>الجامعة</b></td>
								<td>{{$order->university()->name_ar}}</td>
							</tr>
							<tr>
								<td><b>السعر</b></td>
								<td>{{$order->book()->price}}د</td>
							</tr>
							<tr>
								<td><b>تاريخ الشراء</b></td>
								<td>{{$order->purchase_time == null ? 'قيد الطلب' : $order->purchase_time}}</td>
							</tr>

							{{--Seller Controls--}}
							@if($order->seller_id == Auth::user()->id && $order->status != -2)
								<tr>
									<td><b>الإجرائات</b></td>
									<td>
										<a href="{{route('order.cancel', ['id'=>$order->id])}}" class="button is-danger is-small">الغاء الطلب</a>
									</td>
								</tr>
							@endif
							{{--Buyer Controls--}}
							@if($order->buyer_id != null && $order->buyer_id == Auth::user()->id)
								<tr>
									<td><b>الإجرائات</b></td>
									<td>
										<a href="{{route('order.cancel', ['id'=>$order->id])}}" class="button is-danger is-small">الغاء الطلب</a>
									</td>
								</tr>
							@endif
							{{--Admin Controls--}}
							@if(Auth::user()->supervisor())
								<tr style="background: #f3f3f3;">
									<th colspan="2" style="border-top: 2px solid #ddd;"><span class="icon has-text-info"><i class="fa fa-angle-left"></i></span> لوحة المشرفين</th>
								</tr>
								<tr>
									<td><b>البائع</b></td>
									<td><a href="{{route('profile', ['id'=>$order->seller_id])}}">{{$order->seller()->name}}</a></td>
								</tr>
								<tr>
									<td><b>المشتري</b></td>
									@if($order->hasBuyer())
										<td><a href="{{route('profile', ['id'=>$order->buyer_id])}}">{{$order->buyer()->name}}</a></td>
									@else
										<td>-</td>
									@endif
								</tr>


								<tr>
									<td><b>الإجرائات</b></td>
									<td>
										{{--Check id the order needs approve--}}
										@if($order->status == 0 || $order->status == -1)
											<a href="{{route('order.approve', ['id'=>$order->id])}}" class="button is-warning is-small">تأكيد الطلب</a>
										@endif

										{{--Check for the status so the supervisro can disapprove it--}}
										@if($order->status == 0 || $order->status == 1)
												<a href="{{route('order.disapprove', ['id'=>$order->id])}}" class="button is-danger is-small">الغاء تأكيد الطلب</a>
										@endif

										{{--Check if the book is booked--}}
										@if($order->status == 2)
											<a href="{{route('order.done', ['id'=>$order->id])}}" class="button is-success is-small">إتمام الطلب</a>
										@endif
									</td>
								</tr>

							@endif

							</tbody>

						</table>


					</div>
				</div>
			</div>
		</div>
	</div>




@endsection