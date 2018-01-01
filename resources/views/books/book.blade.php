@extends('components.main')


@section('content')


	<div class="container" style="padding-top: 50px;" id="page">
		<div class="columns is-centered">
			<div class="column is-half">
				<div class="card">
					<div class="hero is-info">
						<div class="hero-body has-text-centered">
							<h1 class="subtitle is-4" style="margin-bottom: 4px;">{{$book->name_ar}}</h1>
							<h1 class="subtitle is-5">{{$book->name_en}}</h1>
						</div>
					</div>

					<div class="card-content has-text-right">
						<section>
							<table class="table is-fullwidth" dir="rtl">
								<tbody>
								<tr>
									<td><b>الاسم العربي</b></td>
									<td>{{$book->name_ar}}</td>
								</tr>
								<tr>
									<td><b>الاسم الأنجليزي</b></td>
									<td>{{$book->name_en}}</td>
								</tr>
								<tr>
									<td><b>الجامعة</b></td>
									<td>{{$book->university()->name_ar}}</td>
								</tr>
								<tr>
									<td><b>السعر</b></td>
									<td>{{$book->price}}د</td>
								</tr>
								<tr>
									<td><b>المخزون</b></td>
									@if($target != null)
										<td>متوفر</td>
									@else
										<td>غير متوفر</td>
									@endif
								</tr>
								<tr>
									<td>
										{{--If the book has sell offers assign one to the book--}}
										@if($target != null)
											<a href="#" class="button is-info">شراء</a>
										@else
											<a href="#" class="button is-danger is-outlined">الكتاب غير متوفر للشراء</a>
										@endif
										<a href="#" class="button is-info">بيع</a>
									</td>
								</tr>
								</tbody>
							</table>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection



