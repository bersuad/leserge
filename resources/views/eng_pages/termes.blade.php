@extends('layouts.app')
	@section('content')
	<div style="background-color: white;">
		<label id="goup"></label>
		<div class="row">
			<section>
				@include('inc.left')

				<div class="col-lg-6 col-md-6 col-sm-6" >
					<h4 align="center" style="color:black;">Terms of Use</h4><hr>
					<article>
						<b><p>
						If you register your company and post your company works image making your ad visible on the website. There is no commission to be paid afterwards. By posting your company works here regarding with wedding, you agree that it is in compliance with our guidelines listed below.

						We reserve the right to modify any ads to prevent abuse and keep the content appropriate for our general audience. This includes people of all ages, races, religions, and nationalities. Therefore, all ads that are in violation of our guidelines are subject to being removed immediately and without prior notice.
						</p><br/>

						<p>By posting an ad on our site, you agree to the following statement:</p><br/>

						<p>I agree that I will be solely responsible for the content of any posted images ads that I post on this website. I will not hold the owner of this website responsible for any losses or damages to myself or to others that may result directly or indirectly from any ads that I post here.<p><br/></b>
						<strong>By posting your any property on our site, you further agree to the following guidelines:</strong>
						<ol> 
						<li>No links to external websites.</li>
						 
						<li>No foul or otherwise inappropriate language will be tolerated. Ads in violation of this rule are subject to being removed immediately and without warning.</li>
						 
						<li>No racist, hateful, or otherwise offensive comments will be tolerated.</li>
						 
						<li>No ad promoting activities that are illegal under the current laws of the country.</li>
						 
						<li>Any ad that appears to be merely a test posting, a joke, or otherwise insincere or non-serious is subject to removal.</li>
						 
						<li>We reserve the ultimate discretion as to which ads, if any, are in violation of these guidelines.</li>
						</ol><br/>
						 
						<p><b>Thank you and enjoy our service.</b></p><br/>

					</article>
				</div>
				@include('inc.right')
			</section>
		</div>
	</div>

	@endsection
