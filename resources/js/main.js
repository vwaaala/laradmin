/**
 *
 */
import * as OverlayScrollbarsGlobal from "overlayscrollbars";
export function sidebarToggle(wrapper, skin) {
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(wrapper);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: skin.scrollbarTheme,
                    autoHide: skin.scrollbarAutoHide,
                    clickScroll: skin.scrollbarClickScroll,
                },
            });
        }
    });
}

