@extends('layouts.app')

<body>

    @section('content')

    <h1 class="title">Toevoegen nieuw schema</h1>

    <form method="post" action="/showschedule">
    @csrf

<div class="field">
		<label class="label" for="iAantalTeams">Aantal Teams</label>
		<div class="control">
			<input type="number" class="input form-control" name="iAantalTeams" value="">
		</div>
    </div>

<div class="field">
			<label class="label" for="product_name">Teamnaam</label>
			<div class="control">
                <input type="text" class="input form-control" name="team_name" value="" required>
			</div>
    	</div>

<div class="field">
		<div class="control">
			<button class="btn btn-info" type="submit" class="button is-link">Voeg teams toe</button>
        </div>
	</div>
</form>
    {{-- @include('error') --}}
@endsection
</body>
