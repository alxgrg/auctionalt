@extends('layouts.app')

@section('title', 'How to Sell at Auction Alternative - Fair prices paid for valuables and quality items')

@section('description', 'Fair prices paid for valuables and quality items, Auction Alternative pays you cash on the spot.')

@section('content')


<header>

	<section class="hero is-success is-bold">
		<div class="container">

			<div class="hero-body">

				<div class="columns level">

					<div class="column is-6 animated fadeIn">

						<h1 class="title is-2 has-text-weight-normal">
							Fair Prices Paid for Valuables and Quality Items 
						</h1>

						<p class="subtitle is-5 has-text-weight-normal">
							Auction Alternative pays you cash on the spot for your items so that you can avoid the uncertainty of auctions and the headaches of online classifieds.
						</p>

					</div>

					<div class="column animated fadeIn level-item">

          				<figure class="image">
          					<img src="/img/buy-hero3.svg" alt="Fair Prices Paid for Valuables and Quality Items Illustration">
          				</figure>

    				</div>

				</div>
			</div>
		</div>
	</section>

	
</header><!-- /header -->

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column has-text-centered">
				
				<h3 class="title has-text-weight-normal has-text-success is-2">
					<span class="icon is-medium">
      					<img src="/img/money-icon.svg" alt="cash">
    				</span>
					We Pay Cash for :
				</h3>

				

					
			</div>
			<div class="column content has-text-left">
				<div class="">
					<ul class="is-size-4">
						<li>Jewelry</li>
						<li>Watches</li>
						<li>Clocks</li>
						<li>Gold</li>
						<li>Silver</li>
						<li>Platinum</li>
						<li>Fine art</li>
						<li>Antiques</li>
						<li>Collectibles</li>
						<li><a href="/services/estates" exact>Complete and Partial Estates.</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p class="has-text-centered is-size-4 has-text-weight-normal">And More...</p>
	</div>
</section>

@include('components.contact')

@endsection