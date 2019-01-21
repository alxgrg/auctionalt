@extends('layouts.app')

@section('title', 'Contact Us at Auction Alternative')

@section('description', 'Contact us with your questions or book our services.')

@section('content')


<header>

	<section class="hero has-text-centered animated fadeIn">
    	<div class="container">
        	<div class="hero-body">
        		<div class="columns is-centered">

            		<div class="column is-7 level">
	            		<h1 class="title is-1 has-text-weight-normal">
	                		Contact Us
	            		</h1>
            			<p class="subtitle">
            				Interested in one of our services? Just have a question? We're happy to help. Just fill out the form below and we'll be in touch soon. 
            			</p>
            		</div>

        		</div>
			</div>
		</div>
    </section>

</header><!-- /header -->

<div class="animated slideInUp"><hr class="hr-small"></div>
  
<section class="section">
  
	<div class="container">
    
    	<div class="columns is-centered level">
    		<div class="column is-6 animated slideInLeft">
                
    			<contact-form></contact-form>

    		</div>
    		<div class="column is-narrow has-text-centered animated slideInRight">
        		<p class="title is-3 has-text-weight-normal has-text-info">Or give us a call at:</p>
        		<p class="is-size-3">(613)-879-1318</p>
    		</div>
      
    	</div>
        <div class="columns">
            <div class="column has-text-centered">
                <p>Reach us by email at <a href="mailto:info@auctionalternative.ca">info@auctionalternative.ca</a></p>
            </div>
        </div>
    
	</div>
  
</section>

@endsection