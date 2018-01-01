@extends('components.main')


@section('content')

	@component('components.subheader')
		الجامعات
	@endcomponent


	<div class="container" style="padding-top: 50px;">
		<div class="card">
			<div class="card-header" dir="rtl">
				<p class="card-header-title">إضافة جامعة</p>
			</div>
			<div class="card-content">

				<div class="columns is-centered">
					<div class="column is-half">


						<form action="" method="post">

							{{csrf_field()}}
							<div class="field">
								<label class="label">اسم الجامعة بالعربية</label>
								<div class="control">
									<input type="text" class="input {{ $errors->has('name_ar') ? ' is-danger' : '' }}" placeholder="اسم الجامعة بالعربي"  name="name_ar" value="{{ old('name_ar') }}" required>
								</div>
								@if ($errors->has('name_ar'))
									<p class="help is-danger">{{ $errors->first('name_ar') }}</p>
								@endif
							</div>


							<div class="field">
								<label class="label">اسم الجامعة بالأنجليزي</label>
								<div class="control">
									<input type="text" class="input {{ $errors->has('name_en') ? ' is-danger' : '' }}" placeholder="اسم الجامعة بالأنجليزي"  name="name_en" value="{{ old('name_en') }}" required>
								</div>
								@if ($errors->has('name_en'))
									<p class="help is-danger">{{ $errors->first('name_en') }}</p>
								@endif
							</div>


							<div class="field">
								<input type="submit" class="button is-primary" value="إضافة">
							</div>



						</form>

					</div>
				</div>


			</div>
		</div>


		<div class="card" style="margin-top: 40px;">
			<div class="card-header" dir="rtl">
				<p class="card-header-title">قائمة الجامعات</p>
			</div>
			<div class="card-content">
				<div class="columns is-centered">
					<div class="column is-half" dir="rtl">
						<form action="">
							<div class="columns">
								<div class="field column is-three-quarters">
									<div class="control">
										<input type="text" class="input" placeholder="اسم الجامعة"  name="uni_name" required>
									</div>
								</div>
								<div class="field column is-one-quarter">
									<div class="control">
										<button class="button is-primary is-fullwidth" type="submit"><span class="icon"><i class="fa fa-search"></i></span></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<section>
					<table class="table table-bordered is-fullwidth" dir="rtl">
						<thead>
						<tr>
							<th>اسم الجامعة</th>
							<th>Enlgish Name</th>
							<th>الإجراء</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>

	</div>


@endsection