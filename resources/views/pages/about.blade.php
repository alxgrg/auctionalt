@extends('layouts.app')

@section('title', 'About Auction Alternative')

@section('description', 'Our mission is to provide comprehensive downsizing and estate liquidation services, while ensuring that you understand the process every step of the way.')

@section('content')

<header>
	<section class="hero has-text-centered animated fadeIn has-background-light-blue is-medium">
		<div class="container">
			<div class="hero-body">
				<div class="columns is-centered">
					<div class="column is-8">
						<img class="has-image-centered" src="/img/aat6.svg" alt="Auction Alternative Logo">
						<h1 class="title is-1 has-text-weight-normal ">
							A Face to Face Business 
						</h1>

						<p class="is-size-4 has-text-left-mobile">
							Our mission is to provide seniors and their representatives with a fair and comprehensive alternative to the status quo. Our professionals handle the broad range of downsizing and estate liquidation services required, while ensuring that you understand the process every step of the way. We <strong>do not</strong> auction off your valuables and take a commission. Once terms are agreed upon, we pay you in full, on the spot. 
						</p>

					</div>
				</div>
				
			</div>
		</div>
	</section>	
</header><!-- /header -->
<section  class="section">
	<div class="container">
			<div class="columns has-text-left-mobile has-text-centered">
				<div class="column">
					<h2 class="title has-text-weight-normal">Who We Are</h2>
					<p>
						A family owned business since 1994. After 30 years of trading in antiques and fine art, founder Norman George formed Auction Alternative in response to the needs of seniors and executors wanting one trusted entity to look after the tasks associated with their downsizing and estate liquidation needs. We offer appraisers accredited by the ISA, a buying policy that is built on fairness, and a holistic commitment to the needs of our customers.
					</p>
				</div>
			</div>
	</div>
</section>
<section class="section has-background-light-blue ">
	
	<div class="container">
		<div class="columns has-text-left-mobile has-text-centered">
			<div class="column">
				<h2 class="title has-text-weight-normal">Why Auction Alternative?</h2>
				<p>
					Typically, our competitors take a hands off approach. They'll take a considerable fee for their time, list your items indiscriminately at auction (online or live), and take a commission on whatever you make on your valuables. In other words, while our competitors fees are guaranteed, your returns are not. Auction Alternative recognizes the importance of providing the client peace of mind, through careful consideration by qualified experts, on a case by case basis. When our clients part with their valuables, it's only because it's a price they've agreed upon. 
				</p>
			</div>
		</div>
	</div>

</section>

@include('components.contact')

@endsection