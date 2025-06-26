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
                const AUTO_SCROLL_DELAY = 4000;
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

                            projectScroll.animate(
                                {
                                    scrollTop: scrollTop,
                                },
                                800,
                                "easeInOutQuart"
                            );
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
