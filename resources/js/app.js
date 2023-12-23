// application startup boostrap activities
import './bootstrap.js';

// theme specific activities
import './adminlte.js';

// global application activities
import {sidebarToggle} from "./main.js";

// sidebar wrapper
const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
// sidebar skin props
const SidebarSkin = {
    scrollbarTheme: "os-theme-light", scrollbarAutoHide: "leave", scrollbarClickScroll: true,
};
// initiate sidebar
sidebarToggle(SELECTOR_SIDEBAR_WRAPPER, SidebarSkin)

