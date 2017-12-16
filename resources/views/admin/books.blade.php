@extends('components.main')


@section('content')


	@component('components.subheader')
		الكتب
	@endcomponent

	<div class="container" style="margin-top: 40px;">

		@if(session('added'))
			<b-notification type="is-success">
				<p class="has-text-centered">
					تم إضافة الكتاب بنجاح
				</p>
			</b-notification>
		@endif

		<div class="card">
			<div class="card-header" dir="rtl">
				<p class="card-header-title">إضافة كتاب</p>
			</div>
			<div class="card-content">

				<ul>
				@foreach($errors as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>

				<form action="{{route('books.store')}}" method="post">
					{{csrf_field()}}
					<div class="columns" dir="rtl">
						<div class="column">
							<div class="field">
								<label class="label">الإسم بالعربية</label>
								<div class="control">
									<input type="text" class="input {{ $errors->has('name_ar') ? ' is-danger' : '' }}" placeholder="اسم الكتاب بالعربية"  name="name_ar" value="{{ old('name_ar') }}" required>
								</div>
								@if ($errors->has('name_ar'))
									<p class="help is-danger">{{ $errors->first('name_ar') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">سعر الكتاب</label>
								<div class="control">
									<input type="text" class="input {{ $errors->has('price') ? ' is-danger' : '' }}" placeholder="السعر"  name="price" value="{{ old('price') }}" required>
								</div>
								@if ($errors->has('price'))
									<p class="help is-danger">{{ $errors->first('price') }}</p>
								@endif
							</div>
						</div>

						<div class="column">
							<div class="field">
								<label class="label">الإسم بالإنجليزية</label>
								<div class="control">
									<input type="text" class="input {{ $errors->has('name_en') ? ' is-danger' : '' }}" placeholder="اسم الكتاب بالانجليزية"  name="name_en" value="{{ old('name_en') }}" required>
								</div>
								@if ($errors->has('name_en'))
									<p class="help is-danger">{{ $errors->first('name_en') }}</p>
								@endif
							</div>
							<uni-input></uni-input>

						</div>

						<div class="column">
							<div class="field">
							    <label class="label">الطبعة</label>
							    <div class="control">
							        <input type="text" class="input {{ $errors->has('year') ? ' is-danger' : '' }}" placeholder="Ex 2016/2017"  name="year" value="{{ old('year') }}" required>
							    </div>
							    @if ($errors->has('year'))
							        <p class="help is-danger">{{ $errors->first('year') }}</p>
							    @endif
							</div>
						</div>

					</div>
					<div class="field">
						<div class="control">
							<button class="button is-primary">إضافة الكتاب</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<br>
		<br>
		<div class="card">
			<div class="card-header"dir="rtl">
				<p class="card-header-title">البحث في الكتب</p>
			</div>
			<div class="card-content">
				<div class="columns is-centered">
					<div class="column is-half" dir="rtl">
						<form action="">
							<div class="columns">
								<div class="field column is-three-quarters">
									<div class="control">
										<input type="text" class="input" placeholder="اسم الكتاب"  name="name_ar" required>
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
							<th>اسم الكتاب</th>
							<th>السعر</th>
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


@stop

