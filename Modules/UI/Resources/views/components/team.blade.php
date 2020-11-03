
<!-- ***** Team Area Start ***** -->
<section class="section team-area bg-grey ptb_100">
    <!-- Shape Top -->
    <div class="shape shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Our Experts</h2>
                    <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($expert_teams as $team)
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Photo -->
                    <div class="team-photo">
                        <a href="#"><img src="{{ $team->image ?? '/assets/img/team/thumb_1.jpg' }}" alt=""></a>
                    </div>
                    <!-- Team Content -->
                    <div class="team-content p-3">
                        <a href="#">
                            <h3 class="mb-2">{{$team->team_name}}</h3>
                        </a>
                        <h5 class="text-uppercase">{{ $team->designation }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>
<!-- ***** Team Area End ***** -->