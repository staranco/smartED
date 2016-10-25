<?php include 'header.php'; ?>
       
    <section class="course">
        <div class="container course__container">
            <p class="breadcrumbs"><a href="index.php" class="breadcrumbs__link"><span class="uppercase">Home</span></a><i class="breadcrumbs__icon ion-chevron-right"></i><a href="courses.php" class="breadcrumbs__link"><span class="uppercase">Courses</span></a><i class="breadcrumbs__icon ion-chevron-right"></i><span class="uppercase">Course Title</span></p>

            <div class="video__container">
                <iframe src="https://player.vimeo.com/video/131409111?color=ed1c24&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div><!--end of video__container-->

            <div class="course__tabs">
                <nav class="tabs__nav">
                    <a href="#" title="Information" data-rel="information" class="tabs__link uppercase active">Information</a>
                    <a href="#" title="Downloads" data-rel="downloads" class="tabs__link uppercase">Downloads</a>
                    <a href="#" title="Test" data-rel="test" class="tabs__link test uppercase disabled">Test</a>
                </nav>

                <div class="tabs__content">
                    <div class="content__block " id="information">
                        <p>Sure, it's easier to just run down the forms and fill the fields with garbage ("asdsadklja" "123usadfjasld" "snaxn2q9e7") in order to plow through them quickly. But that's not real. That's not what your customers are going to do. Is it really smart to take a shortcut when customers are forced to take the long road? When you just enter fake copy in <span class="highlighted">rapid-fire fashion</span>, you don't know what it really feels like to fill out that form.</p>
                    </div><!--end of content__block-->

                    <div class="content__block" id="downloads">
                        <ul class="downloads__list">
                            <li class="downloads__item">
                                <a class="downloads__link clearfix" title="Download" href="#">
                                    <i class="downloads__icon ion-folder"></i>
                                    <p class="downloads__info"><strong>Course Files</strong>Zip File</p>
                                </a>      
                            </li>
                            <li class="downloads__item">
                                <a class="downloads__link" title="Download" href="#">
                                    <i class="downloads__icon ion-ios-film"></i>
                                    <p class="downloads__info"><strong>Course Video</strong>MP4</p>
                                </a>      
                            </li>
                            <li class="downloads__item"> 
                                <a class="downloads__link" title="Download" href="#">
                                    <i class="downloads__icon ion-ios-mic"></i>
                                    <p class="downloads__info"><strong>Course Audio</strong>MP3</p>
                                </a>       
                            </li> 
                        </ul>
                    </div><!--end of content__block-->

                    <div class="content__block active" id="test">

                        <p class="test__indicator">Question <span class="question-number">1</span> of <span class="question-total">10</span></p>

                        <h4 class="test__question">Lorem ipsum dolor sit amet?</h4>
                        <p class="question__messages"><span class="question__messages_basic">Choose the correct answer</span><span class="question__messages_correct"><i class="icon ion-checkmark-circled"></i>Well done!</span><span class="question__messages_wrong"><i class="icon ion-close-circled"></i>Wrong answer</span></p>
    
                        <ul class="questions__list">
                            <li class="questions__item">
                                <div class="questions__link">
                                    <input type="radio" name="mode" id="optionA" value="A" class="wrong">
                                    <label for="optionA">
                                        <span data-title="A"></span>
                                        <p class="question__text">Lorem ipsum dolor sit amet, dolor dolor sit lorem?</p>
                                    </label>
                                </div>
                            </li>
                            <li class="questions__item">
                                <div class="questions__link">
                                    <input type="radio" name="mode" id="optionB" value="B" class="correct">
                                    <label for="optionB">
                                        <span data-title="B"></span>
                                        <p class="question__text">Lorem ipsum dolor sit amet, dolor dolor sit lorem?</p>
                                    </label>
                                </div>
                            </li>
                            <li class="questions__item">
                                <div class="questions__link">
                                    <input type="radio" name="mode" id="optionC" value="C">
                                    <label for="optionC">
                                        <span data-title="C"></span>
                                        <p class="question__text">Lorem ipsum dolor sit amet, dolor dolor sit lorem?</p>
                                    </label>
                                </div>
                            </li>
                        </ul>

                        <div class="test__next"><a href="#" class="button button__securitas button__next disabled"><span class="uppercase">Next Question</span></a></div>
                    </div><!--end of content__block-->
                </div><!--end of tabs__content-->
            </div><!--end of course__tabs-->
        </div><!--end of courses__container-->
    </section><!--end of courses-->

<?php include 'footer.php'; ?>