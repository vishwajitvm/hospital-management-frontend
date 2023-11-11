@extends('master')
@section('hospital_management_pages')

<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="feather icon-x"></i> Josephin Doe
        </a>
    </div>
    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5"
                    src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class>
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                    </p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class>
                    <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5"
                    src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class>
                    <p class="chat-cont">can you come with me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="chat-reply-box">
        <div class="right-icon-control">
            <div class="input-group input-group-button">
                <input type="text" class="form-control" placeholder="Write hear . . ">
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="button"><i
                            class="feather icon-message-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="pcoded-navigation-label">Navigation</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu active pcoded-trigger">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="../index-2.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Default</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">CRM</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Analytics</span>
                                        <span class="pcoded-badge label label-info ">NEW</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                <span class="pcoded-mtext">Page layouts</span>
                                <span class="pcoded-badge label label-warning">NEW</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Vertical</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class>
                                            <a href="menu-static.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Static Layout</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-header-fixed.html"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Header Fixed</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-compact.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Compact</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Sidebar Fixed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Horizontal</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class>
                                            <a href="menu-horizontal-static.html" target="_blank"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Static Layout</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-horizontal-fixed.html" target="_blank"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Fixed layout</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-horizontal-icon.html" target="_blank"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Static With Icon</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="menu-horizontal-icon-fixed.html" target="_blank"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Fixed With Icon</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class>
                                    <a href="menu-bottom.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Bottom Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class>
                            <a href="navbar-light.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-menu"></i>
                                </span>
                                <span class="pcoded-mtext">Navigation</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-layers"></i>
                                </span>
                                <span class="pcoded-mtext">Widget</span>
                                <span class="pcoded-badge label label-danger">100+</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="widget-statistic.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Statistic</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-data.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Data</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-chart.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Chart Widget</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">UI Element</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-box"></i>
                                </span>
                                <span class="pcoded-mtext">Basic</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="alert.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Alert</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="breadcrumb.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Breadcrumbs</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="button.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Button</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="box-shadow.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Box-Shadow</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="accordion.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Accordion</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="generic-class.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Generic Class</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="tabs.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Tabs</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="color.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Color</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="label-badge.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Label Badge</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="progress-bar.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Progress Bar</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="list.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">List</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="tooltip.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Tooltip And Popover</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="typography.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Typography</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="other.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Other</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-gitlab"></i>
                                </span>
                                <span class="pcoded-mtext">Advance</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="draggable.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Draggable</span>
                                    </a>
                                </li>
                        </li>
                        <li class=" ">
                            <a href="modal.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Modal</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="notification.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Notifications</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="rating.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Rating</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="range-slider.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Range Slider</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="slider.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Slider</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="syntax-highlighter.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Syntax Highlighter</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="tour.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tour</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="treeview.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tree View</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="nestable.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Nestable</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="toolbar.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Toolbar</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-package"></i>
                            </span>
                            <span class="pcoded-mtext">Extra</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="session-timeout.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Session Timeout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="session-idle-timeout.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="offline.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Offline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="animation.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-aperture rotate-refresh"></i>
                            </span>
                            <span class="pcoded-mtext">Animations</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-command"></i>
                            </span>
                            <span class="pcoded-mtext">Icons</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="icon-font-awesome.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Font Awesome</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="icon-themify.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Themify</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="icon-simple-line.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Simple Line Icon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    <div class="pcoded-navigation-label">Forms</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Form</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Components</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add-On</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-elements-advance.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Advance</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-validation.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="form-picker.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-edit-1"></i>
                                </span>
                                <span class="pcoded-mtext">Form Picker</span>
                                <span class="pcoded-badge label label-warning">NEW</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-select.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-feather"></i>
                                </span>
                                <span class="pcoded-mtext">Form Select</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-masking.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-shield"></i>
                                </span>
                                <span class="pcoded-mtext">Form Masking</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-wizard.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-tv"></i>
                                </span>
                                <span class="pcoded-mtext">Form Wizard</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Tables</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-credit-card"></i>
                                </span>
                                <span class="pcoded-mtext">Bootstrap Table</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Basic Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-sizing.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Sizing Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-border.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Border Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-styling.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Styling Table</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-inbox"></i>
                                </span>
                                <span class="pcoded-mtext">Data Table</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="dt-basic.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Basic Initialization</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-advance.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Advance Initialization</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-styling.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Styling</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-api.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">API</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ajax.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Ajax</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-server-side.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Server Side</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-plugin.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Plug-In</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-data-sources.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Data Sources</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-server"></i>
                                </span>
                                <span class="pcoded-mtext">DT Extensions</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="dt-ext-autofill.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">AutoFill</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Button</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-basic-buttons.html"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Basic Button</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-buttons-html-5-data-export.html"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Data Export</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Col Reorder</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Fixed Columns</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Fixed Header</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-key-table.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Key Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-responsive.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Responsive</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Row Reorder</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-scroller.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Scroller</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-select.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Select Table</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="foo-table.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-hash"></i>
                                </span>
                                <span class="pcoded-mtext">FooTable</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-airplay"></i>
                                </span>
                                <span class="pcoded-mtext">Handson Table</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="handson-appearance.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Appearance</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-data-operation.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Data Operation</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-rows-cols.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Rows Columns</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-columns-only.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Columns Only</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-cell-features.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Cell Features</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-cell-types.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Cell Types</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-integrations.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Integrations</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-rows-only.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Rows Only</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="handson-utilities.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Utilities</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class>
                            <a href="editable-table.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-edit"></i>
                                </span>
                                <span class="pcoded-mtext">Editable Table</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Chart And Maps</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-pie-chart"></i>
                                </span>
                                <span class="pcoded-mtext">Charts</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="chart-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Google Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-chartjs.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">ChartJs</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-list.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">List Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-float.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Float Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-knob.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Knob chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-morris.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Morris Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-nvd3.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Nvd3 Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-peity.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Peity Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-radial.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Radial Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-rickshaw.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Rickshaw Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-sparkline.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Sparkline Chart</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="chart-c3.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">C3 Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-map"></i>
                                </span>
                                <span class="pcoded-mtext">Maps</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Google Maps</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="map-vector.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Vector Maps</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="map-api.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Google Map Search API</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="location.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Location</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Pages</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-unlock"></i>
                                </span>
                                <span class="pcoded-mtext">Authentication</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="auth-sign-in-social.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Login</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="auth-sign-up-social.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Registration</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="auth-reset-password.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Forgot Password</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="auth-lock-screen.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-sliders"></i>
                                </span>
                                <span class="pcoded-mtext">Maintenance</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="error.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Error</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="comming-soon.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Comming Soon</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="offline-ui.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Offline UI</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-mail"></i>
                                </span>
                                <span class="pcoded-mtext">Email</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="email-compose.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Compose Email</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="email-inbox.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Inbox</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="email-read.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Read Mail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">App</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class>
                            <a href="todo.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-bookmark"></i>
                                </span>
                                <span class="pcoded-mtext">To-Do</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Extension</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-file-plus"></i>
                                </span>
                                <span class="pcoded-mtext">Editor</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="ck-editor.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">CK-Editor</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="wysiwyg-editor.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">WYSIWYG Editor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-calendar"></i>
                                </span>
                                <span class="pcoded-mtext">Event Calendar</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="event-full-calender.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Full Calendar</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="event-clndr.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">CLNDER</span>
                                        <span class="pcoded-badge label label-info">NEW</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class>
                            <a href="image-crop.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-scissors"></i>
                                    <b>IC</b>
                                </span>
                                <span class="pcoded-mtext">Image Cropper</span>
                            </a>
                        </li>
                        <li class>
                            <a href="file-upload.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-upload-cloud"></i>
                                </span>
                                <span class="pcoded-mtext">File Upload</span>
                            </a>
                        </li>
                        <li class>
                            <a href="change-loges.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-briefcase"></i>
                                </span>
                                <span class="pcoded-mtext">Change Loges</span>
                                <span class="pcoded-badge label label-warning">1.0</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Other</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-list"></i>
                                </span>
                                <span class="pcoded-mtext">Menu Levels</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Menu Level 2.1</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Menu Level 2.2</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class>
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Menu Level 3.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class>
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Menu Level 2.3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class>
                            <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-power"></i>
                                    <b>D</b>
                                </span>
                                <span class="pcoded-mtext">Disabled Menu</span>
                            </a>
                        </li>
                        <li class>
                            <a href="sample-page.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-watch"></i>
                                </span>
                                <span class="pcoded-mtext">Sample Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pcoded-content">

            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="feather icon-home bg-c-blue"></i>
                            <div class="d-inline">
                                <h5>Dashboard CRM</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="../index-2.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard CRM</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">

                            <div class="row">

                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-red">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Profit</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-danger m-r-10">+11%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-blue">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Orders</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-database text-c-blue f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-primary m-r-10">+12%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-green">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Average Price</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-success m-r-10">+52%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-yellow">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Product Sold</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">6,784</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-tags text-c-yellow f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-warning m-r-10">+52%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-12">
                                    <div class="card latest-update-card">
                                        <div class="card-header">
                                            <h5>What’s New</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="latest-update-box">
                                                <div class="row p-t-20 p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <img src="../files/assets/images/avatar-4.jpg"
                                                            alt="user image"
                                                            class="img-radius img-40 align-top m-r-15 update-icon">
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <i
                                                            class="feather icon-briefcase bg-c-red update-icon"></i>
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>You have 3 pending Task.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <i
                                                            class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>New Order Received.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <img src="../files/assets/images/avatar-4.jpg"
                                                            alt="user image"
                                                            class="img-radius img-40 align-top m-r-15 update-icon">
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <div class="card new-cust-card">
                                        <div class="card-header">
                                            <h5>New Customers</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="align-middle m-b-35">
                                                <img src="../files/assets/images/avatar-2.jpg"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-35">
                                                <img src="../files/assets/images/avatar-3.jpg"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>John Doue</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">stay hungry stay foolish!
                                                    </p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-35">
                                                <img src="../files/assets/images/avatar-3.jpg"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status deactive text-mute"><i
                                                            class="far fa-clock m-r-10"></i>30 min
                                                        ago</span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-0">
                                                <img src="../files/assets/images/avatar-2.jpg"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-12">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Impressions</h6>
                                                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Goal</h6>
                                                    <h3 class="f-w-700 text-c-green">30,564</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-bullseye bg-c-green"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Impact</h6>
                                                    <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-header">
                                            <h5>Total Leads</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Overall</p>
                                                    <h6>68.52%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Monthly</p>
                                                    <h6>28.90%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Day</p>
                                                    <h6>13.50%</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sal-income" style="height:100px"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-header">
                                            <h5>Total Vendors</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Overall</p>
                                                    <h6>68.52%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Monthly</p>
                                                    <h6>28.90%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Day</p>
                                                    <h6>13.50%</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="rent-income" style="height:100px"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card o-hidden">
                                        <div class="card-header">
                                            <h5>Invoice Generate</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Overall</p>
                                                    <h6>68.52%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Monthly</p>
                                                    <h6>28.90%</h6>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted m-b-5">Day</p>
                                                    <h6>13.50%</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="income-analysis" style="height:100px"></div>
                                    </div>
                                </div>


                                <div class="col-xl-8 col-md-12">
                                    <div class="card latest-update-card">
                                        <div class="card-header">
                                            <h5>Latest Activity</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="latest-update-box">
                                                <div class="row p-t-20 p-b-30">
                                                    <div class="col-auto text-right update-meta">
                                                        <i
                                                            class="feather icon-sunrise bg-c-blue update-icon"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6>John Deo</h6>
                                                        <p class="text-muted m-b-15">The trip was an amazing
                                                            and a life changing experience!!</p>
                                                        <img src="../files/assets/images/mega-menu/01.jpg"
                                                            alt class="img-fluid img-100 m-r-15 m-b-10">
                                                        <img src="../files/assets/images/mega-menu/03.jpg"
                                                            alt class="img-fluid img-100 m-r-15 m-b-10">
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta">
                                                        <i
                                                            class="feather icon-file-text bg-c-blue update-icon"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6>Administrator</h6>
                                                        <p class="text-muted m-b-0">Free courses for all our
                                                            customers at A1 Conference Room - 9:00 am
                                                            tomorrow!</p>
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta">
                                                        <i
                                                            class="feather icon-map-pin bg-c-blue update-icon"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6>Jeny William</h6>
                                                        <p class="text-muted m-b-15">Happy Hour! Free drinks
                                                            at <span> <a href="#!"
                                                                    class="text-c-blue">Cafe-Bar all </a>
                                                            </span>day long!</p>
                                                        <div id="markers-map"
                                                            style="height:245px;width:100%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <a href="#!" class=" b-b-primary text-primary">View all
                                                    Activity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card chat-card">
                                        <div class="card-header">
                                            <h5>Chat history</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row m-b-20 received-chat">
                                                <div class="col-auto p-r-0">
                                                    <img src="../files/assets/images/avatar-2.jpg"
                                                        alt="user image" class="img-radius img-40">
                                                </div>
                                                <div class="col">
                                                    <div class="msg">
                                                        <p class="m-b-0">Nice to meet you!</p>
                                                    </div>
                                                    <p class="text-muted m-b-0"><i
                                                            class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 send-chat">
                                                <div class="col">
                                                    <div class="msg">
                                                        <p class="m-b-0">Nice to meet you!</p>
                                                    </div>
                                                    <p class="text-muted m-b-0"><i
                                                            class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                                </div>
                                                <div class="col-auto p-l-0">
                                                    <img src="../files/assets/images/avatar-3.jpg"
                                                        alt="user image" class="img-radius img-40">
                                                </div>
                                            </div>
                                            <div class="row m-b-20 received-chat">
                                                <div class="col-auto p-r-0">
                                                    <img src="../files/assets/images/avatar-2.jpg"
                                                        alt="user image" class="img-radius img-40">
                                                </div>
                                                <div class="col">
                                                    <div class="msg">
                                                        <p class="m-b-0">Nice to meet you!</p>
                                                        <img src="../files/assets/images/mega-menu/01.jpg"
                                                            alt>
                                                        <img src="../files/assets/images/mega-menu/03.jpg"
                                                            alt>
                                                    </div>
                                                    <p class="text-muted m-b-0"><i
                                                            class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 send-chat">
                                                <div class="col">
                                                    <div class="msg">
                                                        <p class="m-b-0">Come now to meet you!</p>
                                                    </div>
                                                    <p class="text-muted m-b-0"><i
                                                            class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                                </div>
                                                <div class="col-auto p-l-0">
                                                    <img src="../files/assets/images/avatar-3.jpg"
                                                        alt="user image" class="img-radius img-40">
                                                </div>
                                            </div>
                                            <div class="row m-b-20 received-chat">
                                                <div class="col-auto p-r-0">
                                                    <img src="../files/assets/images/avatar-2.jpg"
                                                        alt="user image" class="img-radius img-40">
                                                </div>
                                                <div class="col">
                                                    <div class="msg">
                                                        <p class="m-b-0">Nice to meet you!</p>
                                                        <img src="../files/assets/images/mega-menu/03.jpg"
                                                            alt>
                                                    </div>
                                                    <p class="text-muted m-b-0"><i
                                                            class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                                </div>
                                            </div>
                                            <div class="right-icon-control">
                                                <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                        placeholder="Send message">
                                                    <div class="input-group-append">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light"
                                                            type="button"><i
                                                                class="feather icon-message-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="styleSelector">
        </div>

    </div>
</div>

@endsection