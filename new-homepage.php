<?php 
/***
Template Name: New Home Page
***/
?>
<?php get_header();?>
<?php while (have_posts()) : the_post(); ?>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');

    .carousel-container {
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    position: relative;
}

.carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    min-width: 100%;
    box-sizing: border-box;
}

.why-comm-content {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.why-comm-content-sec {
    flex: 1;
}

.why-comm-img img {
    max-width: 100%;
    height: auto;
}

.carousel-pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    gap:5px;
}

.carousel-pagination .dot {
    height: 15px;
    width: 15px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}

.carousel-pagination .dot.active {
    background-color: #01A7E1;
}
</style>



<section class="home-icpms-section">
        <div class="inner-main-section-new home-icpms-inner-sec">
            <div class="home-icpms-content">
                <div class="icpms-image">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/bannerImg.png">
                </div>
                <div class="icpms-content-sec">
                    <h2>Commission Software for the Payments Industry</h2>
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                    <p>Fully automated payments industry commission software that saves you time and money, eliminates errors and improves your productivity.</p>
                    <a href="https://www.commissionly.io/commission-software-demo/" class="request-btn">Request a demo</a>
                </div>
            </div>
        </div>
    </section>



    <section class="main-section-new new-Features-section">
        <div class="inner-main-section-new new-Features-inner-sec">
            <div class="new-Features-content">
                <h2>NEW FEATURE RELEASES: Carrier Import Templates, Easy Split Management, Realtime Residual Calculations, Missing Payments Report</h2>
                <div class="new-Features-img">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/springOne.png">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/springtwo.png">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/springThree.png">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/users-love-us.png">
                </div>
            </div>
        </div>
    </section>



    <section class="main-section-new home-sscscfyi-section">
        <div class="inner-main-section-new home-sscscfyi-inner-sec">
            <div class="home-sscscfyi-content">
                <h2>Solving Sales Commission Software Challenges For Your Industry</h2>
                <div class="sscscfyi-content-main">
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/import-img-section.png">
                    </div>
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Import Historical Data</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Import all historical carrier residual reports and access to commission history via your dashboard or reports.  Simplified data importing with our Residual Import Templates.</p>
                    </div>
                </div>
                <div class="sscscfyi-content-main top-image">
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Agent MID Mapping</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Import all historical carrier residual reports and access to commission history via your dashboard or reports.  Simplified data importing with our Residual Import Templates.</p>
                    </div>
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/Agent-mid-sec.png">
                    </div>
                </div>
                <div class="sscscfyi-content-main">
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/residual-report-sec.png">
                    </div>
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Residual Reports & Dashboards</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Full access to preset reports and dashboards, offering insights and information at a glance, optimizing decision-making and performance monitoring.</p>
                    </div>
                </div>
                <div class="sscscfyi-content-main top-image">
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Automated Split Calculations</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Automated agent split calculations ensure accuracy, save time, and eliminate manual errors, facilitating fair and transparent commission distribution efficiently.</p>
                    </div>
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/automated-sec.png">
                    </div>
                </div>
                <div class="sscscfyi-content-main">
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/agent-acc-img.png">
                    </div>
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Agent Access Options</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Allowing agents to log in and access their commission and reports empowers them with transparency and instant feedback on their performance.</p>
                    </div>
                </div>
				 <div class="sscscfyi-content-main top-image">
                    <div class="sscscfyi-content-sec sscscfyi-line">
                        <h3>Missing Payments Report</h3>
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                        <p>Ensure financial accuracy with our cutting-edge report that swiftly identifies missing payments after imports, safeguarding your revenue and enhancing operational efficiency.</p>
                    </div>
                    <div class="sscscfyi-image">
                        <img src="https://www.commissionly.io/wp-content/uploads/2024/05/newimg.png">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="main-section-new test-it-section">
        <div class="inner-main-section-new test-it-inner-sec">
            <div class="test-it-content">
                <div class="test-it-content-sec">
                    <h2>Running your residuals has never been easier! Book a demo now!</h2>
                    <a href="https://www.commissionly.io/commission-software-demo/">Request a demo</a>
                </div>
                <div class="test-it-img">
                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/test-it-sec.png">
                </div>
            </div>
        </div>
    </section>




    <section class="main-section-new why-comm-section">
        <div class="inner-main-section-new why-comm-inner-sec">
            <div class="why-comm-main">
                <h2>Why Commissionly Sales Commission Management Software?</h2>
                <div class="carousel-container">
                    <div class="carousel">
                        <div class="carousel-item"> <!-- Repeat content for other items -->
                            <div class="why-comm-content">
                                <div class="why-comm-content-sec">
                                    <h3>Competitive Pricing</h3>
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                                    <p>Our competitive pricing stands as the best in the market, designed to grow with you, ensuring affordability and scalability to support your expanding business needs seamlessly.</p>
                                    <a href="https://www.commissionly.io/commission-software-demo/" class="request-btn">Request a demo</a>
                                </div>
                                <div class="why-comm-img">
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/compe-pricing-image.png">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- Repeat content for other items -->
                            <div class="why-comm-content">
                                <div class="why-comm-content-sec">
                                    <h3>World Class Support</h3>
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                                    <p>Is about after sales support and ongoing management.</p>
                                    <a href="https://www.commissionly.io/commission-software-demo/" class="request-btn">Request a demo</a>
                                </div>
                                <div class="why-comm-img">
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/05/world-class-support.png">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- Repeat content for other items -->
                            <div class="why-comm-content">
                                <div class="why-comm-content-sec">
                                    <h3>Industry Expertise</h3>
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
                                    <p>Is about getting setup and understanding your needs.</p>
                                    <a href="https://www.commissionly.io/commission-software-demo/" class="request-btn">Request a demo</a>
                                </div>
                                <div class="why-comm-img">
                                    <img src="https://www.commissionly.io/wp-content/uploads/2024/05/Industry-expertise.png">
                                </div>
                            </div>
                        </div>
                        <!-- Repeat above block two more times -->
                    </div>
                    <div class="carousel-pagination"></div>
                </div>
            </div>
        </div>
    </section>



    <section class="main-section-new our-ratings-section">
        <div class="inner-main-section-new our-ratings-inner-sec">
            <img class="line-bot-img" src="https://www.commissionly.io/wp-content/uploads/2024/04/line-img.png">
            <div class="our-ratings-main">
                <h2>Our Ratings And Reviews</h2>
                <div class="our-ratings-reviews">
                    <div class="review-card">
                        <div class="review-img">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/thumb_square_f19d050a4a225ee65ebf1581d3478cc9.png">
                        </div>
                        <div class="review-content">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/noun-rating-star-2083662-1.png">
                            <div class="review-info">
                                <h4>Megan A.</h4>
                                <span>Practice Manager</span>
                            </div>
                            <p>Commissionly Provides A Catalogue Of Set Commission And Sales Reports That Are Available For Use. They Also Provide A Report Builder Tool.</p>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-img">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/thumb_square_5e293614c65b76695dd1897b431781c2.png">
                        </div>
                        <div class="review-content">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/noun-rating-star-2083662-1.png">
                            <div class="review-info">
                                <h4>Troy W.</h4>
                                <span>Small-Business</span>
                            </div>
                            <p>Stepped Commissions Have Made Everything Run Smoother Allowing Us To Gradually Increase Or Reduce The Number Of Commissions Paid Based On Our Needs.</p>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-img">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/thumb_square_5998092606ae9f7ba6ad0857a160d54b.png">
                        </div>
                        <div class="review-content">
                            <img src="https://www.commissionly.io/wp-content/uploads/2024/04/noun-rating-star-2083662-1.png">
                            <div class="review-info">
                                <h4>Keanan W.</h4>
                                <span>Mid-Market</span>
                            </div>
                            <p>Commissionly Allows Users To Easily Set Up Future Changes To Commission Plans, Which Can Usually Be Quite Tedious To Do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){


    let currentIndex = 0;
    const items = $('.carousel-item');
    const itemCount = items.length;
    const pagination = $('.carousel-pagination');

    for (let i = 0; i < itemCount; i++) {
        pagination.append('<span class="dot"></span>');
    }

    const dots = $('.dot');
    dots.eq(currentIndex).addClass('active');

    function goToSlide(index) {
        currentIndex = index;
        const newTransform = -100 * index;
        $('.carousel').css('transform', `translateX(${newTransform}%)`);
        dots.removeClass('active');
        dots.eq(index).addClass('active');
    }

    dots.on('click', function() {
        const index = $(this).index();
        goToSlide(index);
    });
});
</script>


<?php endwhile;?>
<?php get_footer(); ?>	