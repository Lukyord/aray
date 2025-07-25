// ON WINDOW RESIZE CALLBACK =============================
function onWindowResize(
    callback,
    delay = 300,
    executeOnLoad = true,
    initialCallback
) {
    let lastWidth = $(window).width();
    let resizeTimeout;
    let initialCallbackExecuted = false;

    if (executeOnLoad && typeof callback === "function") {
        callback();
    }

    $(window).on("resize", function () {
        const newWidth = $(window).width();

        if (newWidth !== lastWidth) {
            lastWidth = newWidth;

            if (
                !initialCallbackExecuted &&
                typeof initialCallback === "function"
            ) {
                initialCallbackExecuted = true;
                initialCallback();
            }

            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                if (typeof callback === "function") {
                    callback();
                }

                initialCallbackExecuted = false;
            }, delay);
        }
    });
}

// Window Resize Instant Callback =============================
function onWindowResizeInstant(callback, executeOnLoad = true) {
    let lastWidth = $(window).width();

    if (executeOnLoad && typeof callback === "function") {
        callback();
    }

    $(window).on("resize", function () {
        const newWidth = $(window).width();

        if (newWidth !== lastWidth) {
            lastWidth = newWidth;

            callback();
        }
    });
}

// Function to calculate the 'vw' value
function calcVw(vw) {
    return (vw / 100) * window.innerWidth;
}

// Function to calculate the 'rem' value
function calcRem(rem) {
    return (
        rem * parseFloat(getComputedStyle(document.documentElement).fontSize)
    );
}

// THROTTLE ============================
// usage -> document
//     .querySelector(".work")
//     .addEventListener("wheel", throttle(handleScroll, 1000));
function throttle(func, limit) {
    let inThrottle;
    return function () {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => (inThrottle = false), limit);
        }
    };
}

// CHECK IF FULLY IN VIEW ============================
// function checkIfFullyInView(content, inViewCallback, outOfViewCallback) {
//     if (content.length === 0) {
//         console.log("Content not found");
//         return;
//     }

//     const rect = content[0].getBoundingClientRect();

//     const windowHeight = window.visualViewport ? window.visualViewport.height : window.innerHeight;

//     if (rect.top >= 0 && rect.bottom <= windowHeight) {
//         inViewCallback();
//     } else {
//         outOfViewCallback();
//     }
// }
function checkIfFullyInView(content, inViewCallback, outOfViewCallback) {
    if (content.length === 0) {
        console.log("Content not found");
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    inViewCallback();
                } else {
                    outOfViewCallback();
                }
            });
        },
        {
            threshold: 1.0,
            rootMargin: "0px",
        }
    );

    observer.observe(content[0]);
    return () => observer.disconnect();
}

// CHECK IF IN VIEW ============================
// var ratioInView = 1 / 2; 1/2 of the section is in view
// function checkIfInView(inViewRatio, content, inViewCallback, outOfViewCallback) {
//     if (content.length === 0) {
//         console.log("Content not found");
//         return;
//     }

//     var rect = content[0].getBoundingClientRect();
//     var windowHeight = $(window).height();
//     var sectionHeight = rect.height;
//     var inViewSectionHeight = sectionHeight * inViewRatio;

//     if (rect.top + inViewSectionHeight <= windowHeight && rect.top + sectionHeight > 0) {
//         inViewCallback();
//     } else {
//         outOfViewCallback();
//     }
// }

// Example usage
// const cleanup = checkIfInView(0.5, $element,
//     () => console.log('Element is 50% visible'),
//     () => console.log('Element is not 50% visible')
// );

// When done with the element
// cleanup();
function checkIfInView(
    inViewRatio,
    content,
    inViewCallback,
    outOfViewCallback
) {
    if (content.length === 0) {
        console.log("Content not found");
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    inViewCallback(entry);
                } else {
                    outOfViewCallback();
                }
            });
        },
        {
            threshold: inViewRatio,
            rootMargin: "0px",
        }
    );

    observer.observe(content[0]);
    return () => observer.disconnect();
}

// CHECK IF SCROLL PAST ============================
// var offset = 100;
// var headerOffset = $header.outerHeight();
// function checkIfScrolledPast(content, offSet = 0, scrollPastCallback = () => {}, notScrolledPastCallback = () => {}) {
//     if (content.length === 0) {
//         console.log("Content not found");
//         return;
//     }

//     var sectionTop = content.offset().top;
//     var scrollPosition = $(window).scrollTop();

//     if (scrollPosition > sectionTop + content.outerHeight() - offSet) {
//         scrollPastCallback();
//     } else {
//         notScrolledPastCallback();
//     }
// }

function checkIfScrolledPast(
    content,
    offSet = 0,
    scrollPastCallback = () => {},
    notScrolledPastCallback = () => {}
) {
    if (content.length === 0) {
        console.log("Content not found");
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    const rect = entry.boundingClientRect;
                    if (rect.top < 0) {
                        scrollPastCallback();
                    } else {
                        notScrolledPastCallback();
                    }
                } else {
                    notScrolledPastCallback();
                }
            });
        },
        {
            threshold: 0,
            rootMargin: `${offSet}px 0px 0px 0px`,
        }
    );

    observer.observe(content[0]);
    return () => observer.disconnect();
}

// SCROLL TO TOP============================
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
