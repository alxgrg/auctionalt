@extends('layouts.app')

@section('title', 'Auction Alternative - Estate buyers and downsizing specialists since 1994')

@section('description', 'Auction Alternative provides professional estate downsizing services, paying cash on the spot for valuables, and buying complete and partial estates.')

@section('content')


<header>

	<section class="hero is-medium main-hero">


		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column animated fadeIn">
						<h1 class="title is-2 has-text-weight-normal">
							Estate Sales and Downsizing Made Simple.
						</h1>
						<p class="subtitle is-5">
							Auction Alternative does more than just buy estates. We provide a suite of services to assist you in any or all of your estate needs, from buying estates outright, to handling entire downsizing processes. 
						</p>
						<div class="field is-grouped">
							<p class="control">
								<a class="button is-success" href="#services">
									<span>Learn More</span>
								</a>
							</p>
							<p class="control">
								<a href="/contact" class="button is-danger">
									<span>Contact Us</span>
								</a>
							</p>

						</div>
					</div>
					<div class="column animated fadeIn">
						<figure class="image">
							<img src="/img/hero-img.svg" alt="Estate sales and downsizing made simple">
						</figure>

					</div>

				</div>

			</div>
		</div>
	</section>
</header>

<hr class="hr-small"/>

<section id="services" class="hero allinone-hero has-text-centered">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-8">
					<h2 class="title is-2 has-text-weight-normal">All Your Downsizing Needs in One Place, All of Our Focus in One Place</h2>
					<!-- <p class="subtitle is-6 has-text-weight-normal">We believe in putting each and every client first, which is why we don't take on another job until we've completed yours.   </p>  -->           
				</div>
			</div>

		</div>
	</div>
</section>
<section class="hero services-hero">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-desktop">
				<div class="column has-text-centered">


					<a href="/services/estates"  class="box services-box" exact>
						<article class="media">
							<div class="media-left services-icon">
								<figure class="image is-96x96">
									{{-- <img src="/img/estates-icon.svg" alt="Estate sales/Downsizing"> --}}
									@svg('estates-icon', 'services-hero-icon')
								</figure>
							</div>
							<div class="media-content">
								<h2 class="title is-6 is-blue-title is-uppercase"><strong>Estate Sales / Downsizing</strong></h2>
								<p class="subtitle is-6">
									We buy complete and partial estates. Have our experienced professionals attend to your downsizing needs, in person, with the respect and care you deserve. 
								</p>
								<p class="has-text-primary is-size-7">Learn more about Estates</p>

							</div>
						</article>
					</a>

				</div>

				<div class="column has-text-centered">
					<a href="/services/appraisals" class="box services-box" exact>
						<article class="media">
							<div class="media-left services-icon">
								<figure class="image is-96x96">
									{{-- <img src="/img/appraisals-icon.svg" alt="Appraisals"> --}}
									@svg('appraisals-icon', 'services-hero-icon')
								</figure>
							</div>
							<div class="media-content">
								<h2 class="title is-6 is-blue-title is-uppercase">Appraisals</h2>
								<p class="subtitle is-6">
									Make informed decisions about your valuables. We offer <sup>*</sup>USPAP certified, written appraisals, as well as our more informal Personal Property Valuations, at competitive rates. 
								</p>
								<p class="has-text-primary is-size-7">Learn more about Appraisals</p>

							</div>

						</article>
					</a>
				</div>

				<div class="column has-text-centered">

					<a href="/services/sell"  class="box services-box" exact>
						<article class="media">
							<div class="media-left services-icon">
								<figure class="image is-96x96">
									{{-- <img src="/img/money-icon.svg" alt="We buy"> --}}
									@svg('money-icon', 'services-hero-icon')
								</figure>
							</div>
							<div class="media-content">
								<h2 class="title is-6 has-text-primary is-uppercase">We Buy...</h2>
								<p class="subtitle is-6">
									We pay cash up front. Some items aren't meant to be buried in online classifieds or given away to last minute low bidders. Our clients receive fair prices for their valuables, on the spot.  
								</p>

								<p class="has-text-primary is-size-7">Learn more about what we buy</p>

							</div>

						</article>
					</a>
				</div>

			</div>
		</div>

	</div>

</section>


@include('components.contact')

@endsection