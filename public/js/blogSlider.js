            var s = $('.blogSlider'),
                sWrapper = s.find('.blogSliderWrapper'),
                sItem = s.find('.blogSlide'),
                btn = s.find('.blogSliderLink'),
                sWidth = sItem.width(),
                sCount = sItem.length,
                slide_date = s.find('.blogSlideDate'),
                slide_title = s.find('.blogSlideTitle'),
                slide_text = s.find('.blogSlideText'),
                slide_more = s.find('.blogSlideMore'),
                slide_image = s.find('.blogSlideImage img'),
                sTotalWidth = sCount * sWidth;

            sWrapper.css('width', sTotalWidth);
            sWrapper.css('width', sTotalWidth);

            var clickCount = 0;

            btn.on('click', function (e) {
                e.preventDefault();

                if ($(this).hasClass('next')) {

                    (clickCount < (sCount - 1)) ? clickCount++ : clickCount = 0;
                } else if ($(this).hasClass('prev')) {
                    (clickCount > 0) ? clickCount-- : (clickCount = sCount - 1);
                }
                TweenMax.to(sWrapper, 0.4, {
                    x: '-' + (sWidth * clickCount)
                })


                //CONTENT ANIMATIONS

                var fromProperties = {
                    autoAlpha: 0,
                    x: '-50',
                    y: '-10'
                };
                var toProperties = {
                    autoAlpha: 0.8,
                    x: '0',
                    y: '0'
                };

                TweenLite.fromTo(slide_image, 1, {
                    autoAlpha: 0,
                    y: '40'
                }, {
                    autoAlpha: 1,
                    y: '0'
                });
                TweenLite.fromTo(slide_date, 0.4, fromProperties, toProperties);
                TweenLite.fromTo(slide_title, 0.6, fromProperties, toProperties);
                TweenLite.fromTo(slide_text, 0.8, fromProperties, toProperties);
                TweenLite.fromTo(slide_more, 1, fromProperties, toProperties);

            });

            $('.overlay').addClass('overlay-blue');