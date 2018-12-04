@extends('layouts.app')

@section('title', 'Appraisals at Auction Alternative - Professional and affordable appraisals')

@section('description', 'Looking for an informal valuation, or a written appraisal? Our experts help you to identify your valuables and their worth, so you can make informed decisions.')

@section('content')


<header>
	<section class="hero is-medium is-danger is-bold">
		<div class="container">
			
	
			<div class="hero-body">
				<div class="columns level">

					<div class="column is-6 animated fadeIn">

						<h1 class="title is-2 has-text-weight-normal">
							Professional and Affordable Appraisals
						</h1>

						<p class="subtitle is-5 has-text-weight-normal">
							Our experts help you to identify your valuables and their worth, so you can make informed decisions. Whether you are looking for an informal valuation, or a written appraisal, Auction Alternative has you covered.
						</p>

					</div>

					<div class="column animated fadeIn level-item">

          				<figure class="image">
          					<img src="/img/appraisals-hero.svg" alt="Appraisals Illustration">
          				</figure>

    				</div>

				</div>
			</div>
		</div>
	</section>
</header><!-- /header -->

<section class="section">
	<div class="container">
		<header>

			<h3 class="title has-text-centered has-text-weight-normal is-3 has-text-danger">
				An Option That Fits Your Needs 
			</h3>
			<h4 class="subtitle is-4 has-text-centered">Have our experts prepare a written appraisal for your valuables. Just looking for information? Check out our 'Personal Property Valuations' for a more affordable, verbal appraisal. 
			</h4>

		</header>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="columns has-text-centered">

			<div class="column">
				<div class="ap-pricing-tile">
					<h3 class="title is-4 has-text-danger">Personal Property Valuations</h3>
					<hr class="hr-small mrg-btm"/>
					<div class="mrg-btm ap-price">$ <span class="is-red-title">49.95</span> /Hour</div>
					<p>
						An inventory report used to give you an approximate value before you consider selling or dividing your personal property. <span class="has-text-weight-light is-size-7 is-italic">*This is not a certified USPAP appraisal.</span>
					</p>
				</div>
			</div>

			<div class="column">
				<div class="ap-pricing-tile">
					<h3 class="title is-4 has-text-danger">Appraisals</h3>
					<hr class="hr-small mrg-btm"/>
					<div class="mrg-btm ap-price">$ <span class="is-red-title">99.95</span> /Hour</div>
					<p>
						Accredited by the International Society of Appraisers (ISA) in 2001, our appraisers expertise ranges from museum collections specialists to personal property generalists.
					</p>
				</div>
			</div>

		</div>
	</div>
	
</section>


@include('components.contact')

@endsection