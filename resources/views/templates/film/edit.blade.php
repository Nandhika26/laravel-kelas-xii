<!DOCTYPE html>
<html lang="en">

@include('templates.component.head')

<body>
<!-- header -->
@include('templates.component.header')
<!-- //header -->
<!-- bootstrap-pop-up -->
@include('templates.component.login')
<!-- //bootstrap-pop-up -->
<!-- nav -->
@include('templates.component.navbar')
<!-- //nav -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
	</nav>
</div>
<!-- /w3l-medile-movies-grids -->
<div class="container mt-5">
	<h1 class="text-center mb-4">Edit Film</h1>
	<form action="{{ route('film.update', $film->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="title">Masukan Judul</label>
			<input type="text" class="form-control" name="title" id="title" value="{{ $film->title }}">
		</div>
		<div class="form-group">
			<label for="sinopsis">Sinopsis</label>
			<textarea name="sinopsis" id="sinopsis" class="form-control" cols="30" rows="10">{{ $film->sinopsis }}</textarea>
		</div>
		<div class="form-group">
			<label for="year">Masukan Tahun</label>
			<input type="number" class="form-control" name="year" id="year" value="{{ $film->year }}">
		</div>
		<div class="form-group">
			<label for="poster">Link Poster</label>
			<input type="text" class="form-control" name="poster" id="poster" value="{{ $film->poster }}">
		</div>
		<div class="form-group">
			<label for="genre_id">Pilih Genre</label>
			<select name="genre_id" id="genre_id" class="form-control @error('genre_id') is-invalid @enderror" required>
				<option value="">Pilih Genre</option>
				@foreach($genres as $genre)
					<option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
				@endforeach
			</select> 
		</div>
		<button type="submit" class="btn btn-primary">Update Data</button>
	</form>
</div>
<!-- //comedy-w3l-agileits -->
<!-- footer -->
@include('templates.component.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');        
			},
			function() {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');       
			}
		);
	});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
	@stack('script')
</script>
<!-- //here ends scrolling icon -->
</body>
</html>