/*::* CURSOR *::*/
jQuery(document).ready(function () {
    const cursor = $(".cursor");
    const clickable = $(".clickable, .button");
    const darkBgSection = $('[data-bg-color="dark"], .on-dark-bg');

    let targetX = 0;
    let targetY = 0;
    let isFirstMove = true;

    cursor.hide();

    function enableCursorInteractions() {
        $(document).on("mousemove.cursorControl", function (e) {
            targetX = e.clientX;
            targetY = e.clientY;

            if (isFirstMove && targetX !== 0 && targetY !== 0) {
                cursor.fadeIn();
                isFirstMove = false;
            }
        });

        function updateCursorPosition() {
            cursor.css({
                top: `${targetY}px`,
                left: `${targetX}px`,
            });

            requestAnimationFrame(updateCursorPosition);
        }

        updateCursorPosition();

        clickable.on("mouseenter.cursorControl", function () {
            cursor.addClass("hover-cursor");
        });

        clickable.on("mouseleave.cursorControl", function () {
            cursor.removeClass("hover-cursor");
        });

        darkBgSection.on("mouseenter.cursorControl", function () {
            cursor.addClass("dark-bg");
        });

        darkBgSection.on("mouseleave.cursorControl", function (e) {
            // Check if cursor is moving to the header
            const header = $("#header");
            const headerRect = header[0].getBoundingClientRect();
            const cursorX = e.clientX;
            const cursorY = e.clientY;

            // Check if cursor is within header bounds
            const isOverHeader =
                cursorX >= headerRect.left &&
                cursorX <= headerRect.right &&
                cursorY >= headerRect.top &&
                cursorY <= headerRect.bottom;

            if (isOverHeader) {
                // Check if header is positioned over a dark section
                const headerHeight = header.outerHeight();
                const scrollPosition = $(window).scrollTop();
                let headerOverDarkSection = false;

                darkBgSection.each(function () {
                    const section = $(this);
                    const sectionTop = section.offset().top;
                    const sectionBottom = sectionTop + section.outerHeight();

                    if (
                        scrollPosition + headerHeight / 2 >= sectionTop &&
                        scrollPosition + headerHeight / 2 <= sectionBottom
                    ) {
                        headerOverDarkSection = true;
                    }
                });

                if (!headerOverDarkSection) {
                    cursor.removeClass("dark-bg");
                }
            } else {
                cursor.removeClass("dark-bg");
            }
        });
    }

    function disableCursorInteractions() {
        $(document).off("mousemove.cursorControl");
        clickable.off(".cursorControl");
        cursor.removeClass("hover-cursor").html("");
    }

    function handleCursorFeature() {
        const isLargeScreen = $(window).width() > 767;
        const isDevice = $("html").hasClass("is-device");
        const touchEvents = $("html").hasClass("touchevents");

        if (isLargeScreen || !touchEvents || !isDevice) {
            enableCursorInteractions();
            isFirstMove = true;
        } else {
            disableCursorInteractions();
        }
    }

    onWindowResize(handleCursorFeature);
});

$.easing.easeOutQuadCustom = function (x) {
    return 1 - (1 - x) * (1 - x);
};

/*::* PROJECT VIEW *::*/
jQuery(document).ready(function () {
    $("[data-section='list-item-template']").each(function () {
        const $this = $(this);
        const container = $this.find(".container");
        const tabContents = container.find(".view-toggle + .tab-contents");
        const contentOffset = tabContents.offset().top - $this.offset().top;
        const projectView = $this.find(".project-view");

        onWindowResize(function () {
            projectView.css({
                "--content-offset": contentOffset + "px",
            });
        });

        $this.find(".project-scroll").each(function () {
            const projectScroll = $(this);
            const counterText = projectScroll.siblings(".counter-text");
            const typeTabLinks = projectScroll
                .closest(".container")
                .find(".tab-links.type");
            const viewTabLinks = projectScroll
                .closest(".tab-container")
                .find(".tab-links.view-toggle");

            if (counterText.length) {
                const scrollItems = projectScroll.find(".project-scroll-item");
                const currentSpan = counterText.find(".current");
                const totalSpan = counterText.find(".total");

                totalSpan.text(scrollItems.length);

                let currentItemIndex = 1;
                let autoScrollTimer = null;
                const AUTO_SCROLL_DELAY = 8000;
                let checkInterval = null;
                let scrollTimeout = null;
                let isUserScrolling = false;

                function isCurrentTabActive() {
                    return projectScroll
                        .closest(".tab-content")
                        .hasClass("active");
                }

                function startAutoScrollTimer() {
                    if (autoScrollTimer) {
                        clearTimeout(autoScrollTimer);
                    }

                    autoScrollTimer = setTimeout(function () {
                        const nextIndex =
                            currentItemIndex < scrollItems.length
                                ? currentItemIndex + 1
                                : 1;
                        const nextItem = scrollItems.eq(nextIndex - 1);

                        if (nextItem.length) {
                            let scrollTop = 0;
                            for (let i = 0; i < nextItem.index(); i++) {
                                scrollTop += scrollItems
                                    .eq(i)
                                    .outerHeight(true);
                            }

                            //disable scroll snap on project-scroll-item
                            $(".project-scroll-item").css(
                                "scroll-snap-align",
                                "none"
                            );
                            projectScroll.css("scroll-snap-type", "none");
                            projectScroll.css("scroll-behavior", "auto");

                            setTimeout(function () {
                                console.log(
                                    "Starting animation to scrollTop:",
                                    scrollTop
                                );
                                projectScroll.animate(
                                    {
                                        scrollTop: scrollTop,
                                    },
                                    4000,
                                    "easeOutQuadCustom",
                                    function () {
                                        console.log("Animation completed");

                                        setTimeout(function () {
                                            $(".project-scroll-item").css(
                                                "scroll-snap-align",
                                                "start"
                                            );
                                            projectScroll.css(
                                                "scroll-snap-type",
                                                "y mandatory"
                                            );
                                            projectScroll.css(
                                                "scroll-behavior",
                                                "smooth"
                                            );
                                        }, 200);
                                    }
                                );
                            }, 100);
                        }
                    }, AUTO_SCROLL_DELAY);
                }

                function stopAutoScrollTimer() {
                    if (autoScrollTimer) {
                        clearTimeout(autoScrollTimer);
                        autoScrollTimer = null;
                    }
                }

                function resetAutoScrollTimer() {
                    if (autoScrollTimer) {
                        clearTimeout(autoScrollTimer);
                    }
                    startAutoScrollTimer();
                }

                function handleUserScroll() {
                    isUserScrolling = true;
                    counterText.removeClass("show");

                    if (scrollTimeout) {
                        clearTimeout(scrollTimeout);
                    }

                    scrollTimeout = setTimeout(function () {
                        isUserScrolling = false;
                        if (isCurrentTabActive()) {
                            counterText.addClass("show");
                        }
                    }, 100);
                }

                function checkTabStatus() {
                    const isActive = isCurrentTabActive();

                    if (isActive) {
                        if (!autoScrollTimer) {
                            startAutoScrollTimer();
                        }
                        // Show counter-text if user is not scrolling
                        if (!isUserScrolling) {
                            counterText.addClass("show");
                        }
                    } else {
                        if (autoScrollTimer) {
                            stopAutoScrollTimer();
                        }
                        // Hide counter-text when tab is inactive
                        counterText.removeClass("show");
                    }
                }

                // Listen for scroll events on the project scroll container
                projectScroll.on("scroll", handleUserScroll);

                scrollItems.each(function () {
                    checkIfInView(
                        0.5,
                        $(this),
                        (entry) => {
                            const currentItem = $(entry.target);
                            const itemIndex =
                                scrollItems.index(currentItem) + 1;

                            // Only update if index actually changed
                            if (itemIndex !== currentItemIndex) {
                                currentItemIndex = itemIndex;
                                currentSpan.text(itemIndex);

                                scrollItems.removeClass("active");
                                currentItem.addClass("active");

                                // Reset auto-scroll timer when index changes
                                resetAutoScrollTimer();
                            }
                        },
                        () => {}
                    );
                });

                // INITIAL SETUP
                if (scrollItems.length > 0) {
                    scrollItems.first().addClass("active");
                    currentSpan.text("1");

                    // Start the interval check
                    checkInterval = setInterval(checkTabStatus, 1000);

                    // Initial check
                    checkTabStatus();
                }

                typeTabLinks.on("click", function () {
                    checkTabStatus();
                });

                viewTabLinks.on("click", function () {
                    checkTabStatus();
                });
            }
        });
    });
});

/*::* TIMELINE *::*/
jQuery(document).ready(function ($) {
    // Function to initialize marker tracking
    function initMarkerTracking(options = {}) {
        const { sectionSelector, markerSelector, cardSelector } = options;

        if (!$(sectionSelector).length) return;

        const $markerItems = $(markerSelector);
        const $timelineSection = $(sectionSelector);
        const $cards = $(cardSelector);
        let scrollTimeout = null;

        function findClosestToCenter() {
            const viewportCenter = window.innerHeight / 2;
            let closestItem = null;
            let closestDistance = Infinity;

            $cards.each(function () {
                const $item = $(this);
                const rect = this.getBoundingClientRect();
                const itemCenter = rect.top + rect.height / 2;
                const distance = Math.abs(itemCenter - viewportCenter);

                if (distance < closestDistance) {
                    closestDistance = distance;
                    closestItem = $item;
                }
            });

            return closestItem;
        }

        function updateActiveStates() {
            const $closestItem = findClosestToCenter();

            if ($closestItem && $closestItem.length) {
                const cardId = $closestItem.attr("id");
                const $marker = $(`${markerSelector}[data-marker="${cardId}"]`);

                // Update marker active state
                $markerItems.removeClass("active");
                $marker.addClass("active");

                // Update timeline item active state
                $cards.removeClass("active");
                $closestItem.addClass("active");
            }
        }

        function handleScroll() {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }

            scrollTimeout = setTimeout(updateActiveStates, 10);
        }

        $timelineSection.on("scroll", handleScroll);

        $(window).on("scroll", handleScroll);

        updateActiveStates();

        $markerItems.on("click", function () {
            const marker = $(this);
            const cardId = marker.data("marker");
            const timelineItem = $(`#${cardId}`);

            if (timelineItem.length) {
                // Calculate scroll position to center the targeted element
                let scrollTop = 0;
                const allItems = $(cardSelector);
                const targetIndex = allItems.index(timelineItem);
                const containerHeight = $timelineSection.height();
                const targetItemHeight = timelineItem.outerHeight(true);

                // Calculate the top position of the target item
                for (let i = 0; i < targetIndex; i++) {
                    scrollTop += allItems.eq(i).outerHeight(true);
                }

                // Adjust scroll position to center the target item
                const centerOffset = (containerHeight - targetItemHeight) / 2;
                scrollTop = Math.max(0, scrollTop - centerOffset);

                // Disable scroll snap temporarily
                $(cardSelector).css("scroll-snap-align", "none");
                $timelineSection.css("scroll-snap-type", "none");
                $timelineSection.css("scroll-behavior", "auto");

                setTimeout(function () {
                    $timelineSection.animate(
                        {
                            scrollTop: scrollTop,
                        },
                        2000,
                        "easeOutQuadCustom",
                        function () {
                            console.log("Timeline animation completed");

                            setTimeout(function () {
                                $(cardSelector).css(
                                    "scroll-snap-align",
                                    "center"
                                );
                                $timelineSection.css(
                                    "scroll-snap-type",
                                    "y mandatory"
                                );
                                $timelineSection.css(
                                    "scroll-behavior",
                                    "smooth"
                                );
                            }, 50);
                        }
                    );
                }, 50);
            }
        });
    }

    initMarkerTracking({
        sectionSelector: '[data-section="timeline"] .timeline',
        markerSelector: ".timeline-marker",
        cardSelector: ".timeline-item",
    });
});

/*::*  SKIP CURRENT SECTION *::*/
jQuery(document).ready(function ($) {
    const skipButton = $(".skip-section");

    skipButton.on("click", function () {
        const currentSection = $(this).closest("[data-section]");
        const nextSection = currentSection.next("[data-section]");

        if (nextSection.length) {
            window.scrollTo({
                top: nextSection.offset().top,
                behavior: "smooth",
            });
        }
    });
});
