@extends('layouts.app')

@section('title', 'Estates at Auction Alternative - Estate buyers and downsizing specialists since 1994')

@section('description', 'We buy complete and partial estates, as well as handle the entire downsizing process, from free consultation to final sale.')

@section('content')

<header>
	
	<section class="hero is-medium is-info is-bold">
		<div class="container">
			<div class="hero-body">
				<div class="columns level">

					<div class="column is-6 animated fadeIn">

						<h1 class="title is-2 has-text-weight-normal">
							Transition Specialists Since 1994
						</h1>

						<p class="subtitle is-5 has-text-weight-normal">
							At Auction Alternative, we understand that selling or downsizing an estate is a daunting task. Our respectful, empathetic and professional staff, help you every step of the way, from free consultation to final sale.
						</p>
								
					</div>

					<div class="column animated fadeIn level-item">
						<figure class="image">
          					<img src="/img/estates-hero.svg" alt="Estate Services Illustration">
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
			<h3 class="title has-text-centered has-text-weight-normal is-3 is-blue-title">
				No Lengthy Sales Process
			</h3>
			<h4 class="subtitle is-4 has-text-centered">Our clients receive immediate funds for their valuables.
			</h4>

		</header>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="columns">

			<div class="column danger-col level">

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/no-tags.svg" alt="No Tag Sales">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							<strong>No</strong> Tag Sales 
						</p>
					</div>
				</div>

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/no-auctions.svg" alt="No Auctions">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							<strong>No</strong> Auctions 
						</p>
					</div>
				</div>

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/no-consignment.svg" alt="No Consignments">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							<strong>No</strong> Consignments 
						</p>
					</div>
				</div>

			</div>

			<div class="column info-col level">

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/green-check.svg" alt="Cash on the Spot">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							AA is a strictly cash on the spot business.
						</p>
					</div>
				</div>

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/green-check.svg" alt="Know What You're Being Paid">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							You know what you're being paid for your valuables.
						</p>
					</div>
				</div>

				<div class="columns is-mobile level">
					<div class="column is-narrow">
						<figure class="image is-64x64">
							<img src="/img/green-check.svg" alt="Fair Prices Upfront">
						</figure>
					</div>
					<div class="column level-item">
						<p class="">
							Get a fair price up front for <strong>all</strong> of your valuables.
						</p>
					</div>
				</div>
					
				
			</div>
		</div>
	</div>
</section>

<section class="section has-background-light-blue">

	<section class="section  has-text-centered">
		<div class="container">
			<div class="columns">
				<div class="column has-text-centered">
					<figure class="image is-96x96 centered-image">
						<img src="/img/24hr.svg" alt="24 Hour Response Time to Your Door">
					</figure>
				</div>
			</div>
			
		<header>
			<h3 class="title has-text-centered has-text-weight-normal is-blue-title">24 hour response time to your door</h3>
			<h4 class="subtitle has-text-centered">A free consultation is just a call away</h4>
		</header>
		</div>
		
	</section>

	<hr class="hr-small"/>

	<section class="section">
		<div class="container">
			<div class="columns ">
			
				<div class="column">
					<figure class="image is-96x96 has-margin-bottom">
						<img src="/img/drawing.svg" alt="We do the Heavy Lifting">
					</figure>
					<h3 class="title is-6 is-blue-title is-uppercase">
						Leave the Heavy Lifting to Us
					</h3>
					<p class="subtitle is-6">
						Organizers, packers, movers, cleaners and advisors at your disposal. Don't stress about logistics, let Auction Alternative's experienced staff handle the moving process.
					</p>
				</div>
				<div class="column">
					<figure class="image is-96x96 has-margin-bottom">
						<img src="/img/drawing-1.svg" alt="Appraisals">
					</figure>
					<h3 class="title is-6 is-blue-title is-uppercase">
						Don't play guess work with your valuables 
					</h3>
					<p class="subtitle is-6">
						Have our accredited appraiser assess your valuables in person. 
						<a href="/services/appraisals">Learn more about our appraisal service</a>
					</p>
				</div>

			</div>
		</div>
	</section>			
</section>

@include('components.contact')

@endsection