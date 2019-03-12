@extends('layouts.app')

<body>

    @section('content')

    <h1 class="title">Toevoegen Toernooivariabelen</h1>

    <form method="post" action="/showtournament">
    @csrf

<div class="field">
		<label class="label" for="iAantalPoules">Aantal Poules</label>
		<div class="control">
			<input type="number" class="input form-control" name="iAantalPoules" value="">
		</div>
    </div>

<div class="field">
		<label class="label" for="iAantalVelden">Aantal velden</label>
		<div class="control">
			<input type="number" class="input form-control" name="iAantalVelden" value="">
		</div>
    </div>

<div class="field">
			<label class="label" for="iMatchTime">Wedstrijdduur (in minuten)</label>
			<div class="control">
                <input type="text" class="input form-control" name="iMatchTime" value="" required>
			</div>
    	</div>

<div class="field">
		<div class="control">
			<button class="btn btn-info" type="submit" class="button is-link">Voeg gegevens toe</button>
        </div>
	</div>
</form>
    {{-- @include('error') --}}
</body>
@endsection

