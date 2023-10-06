<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard eCommerce | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon-32x32.png">
    <link href="../../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../..assets/vendors/vendors.min.css">
    <!--Post-->
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/flag-icon/css/flag-icon.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="../../assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <!-- BEGIN: Card desaing-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/pages/app-invoice.min.css">
    <!-- BEGIN: 123-->
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/materialize-stepper/materialize-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/pages/form-wizard.min.css">
    <!-- END: Page Level CSS-->
    <!--TAG FILE CSS-->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/vendors/select2/select2-materialize.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/pages/form-select2.min.css">
    <!-- UPLOAD IMAGE/FILE  CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/dropify/css/dropify.min.css">
    <!-- BEGIN: Custom CSS-->

    <!-- BEGIN: my_add CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/pages/my_add/style.css">
    <!--BEGIN: TOASTA NOTIFICATION -->
    <link rel="stylesheet" href="../../assets/css/pages/my_add/toastr.min.css">
    <link rel="stylesheet" href="../../assets/css/pages/my_add/toast.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--END: TOASTA NOTIFICATION -->
    <!-- DELETE ANIMATION  CSS FILE-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom/delete.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <style>
    body {

        background: #eceffc;
    }
    </style>
    <!-- END: my_add CSS-->

</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!--################################################### THIS IS A TOAST NOTIFCATION BAR MAIN TAGS #################-->
    <ul class="notifications"></ul>
    <!--################################################### END TOAST NOTIFCATION BAR MAIN TAGS #################-->
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search"
                            placeholder="Explore Materialize" data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button"
                                href="#" data-target="translation-dropdown"><span
                                    class="flag-icon flag-icon-gb"></span></a></li>
                        <li class="hide-on-med-and-down"><a
                                class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only search-input-wrapper"><a
                                class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                    class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button"
                                href="javascript:void(0);" data-target="notifications-dropdown"><i
                                    class="material-icons">g_translate</i></a>
                        </li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                        src="../../assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a>
                        </li>

                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i
                                    class="flag-icon flag-icon-gb"></i> English</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i
                                    class="flag-icon flag-icon-fr"></i> French</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i
                                    class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i
                                    class="flag-icon flag-icon-de"></i> German</a></li>
                    </ul>
                    <!-- notifications-dropdown$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i
                                    class="material-icons">remove_red_eye</i> English</a></li>


                    </ul>
                    <!-- notifications-dropdown$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i
                                    class="material-icons">person_outline</i> Profile</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i
                                    class="material-icons">lock_outline</i> Lock</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-login.html"><i
                                    class="material-icons">keyboard_tab</i> Logout</a></li>

                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" requ ired="" id="search"
                                    placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i
                                        class="material-icons search-sm-icon">search</i></label><i
                                    class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->





    <!-- BEGIN: SideNavxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html">
                    <img class="hide-on-med-and-down " src="../../assets/images/logo/materialize-logo.png"
                        alt="materialize logo">
                    <img class="show-on-medium-and-down hide-on-med-and-up"
                        src="../../assets/images/logo/materialize-logo-color.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler"
                    href="#">
                    <i class="material-icons">radio_button_checked</i></a></h1>
        </div>


        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="accordion">
            <li class="bold"><a class="waves-effect waves-cyan " href="../dashboard/index.php">
                    <i class="material-icons">settings_input_svideo</i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">content_paste</i>
                    <span class="menu-title" data-i18n="Templates">Admission</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class="active"><a class="active" href="../admission/studentlist.php">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Navbar Dark">Student List</span></a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Horizontal">
                                    Student Transfers</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../admission/transfer_in.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Horizontal Menu">Transfer In</span></a>
                                    </li>
                                    <li><a href="../admission/transfer_out.php">
                                            <i class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Navbar Dark">Transfer Out</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../admission/status.php">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Navbar Dark">Status Type</span></a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Horizontal">
                                    Settings</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../admission/id_card_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Horizontal Menu">ID Card Setting</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                    <i class="material-icons">group</i>
                    <span class="menu-title" data-i18n="Students">Students</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../students/student_attendances.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Student Attendances">Student Attendances</span>
                            </a>
                        </li>
                        <li><a href="../students/attendances_reports.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Attendances Reports  ">Attendances Reports </span>
                            </a>
                        </li>
                        <li><a href=" ../students/leave_manages.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Leave Manages"> Leave Manages</span>
                            </a>
                        </li>
                        <li><a href="../students/student_notes.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Student Notes">Student Notes</span>
                            </a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Student Enrolls">Student Enrolls</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../students/student_promotion.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Student Promotion">Student Promotion</span>
                                        </a>
                                    </li>
                                    <li><a href="../students/course_complete.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Course Complete">Course Complete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../students/course_add_drop.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Course Add Drop">Course Add Drop</span>
                            </a>
                        </li>
                        <li><a href="../students/student_alumni.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Student Alumni">Student Alumni</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Academic</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                    <i class="material-icons">school</i>
                    <span class="menu-title" data-i18n="Academic">Academic</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li><a href="../academic/faculties.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Faculties">Faculties</span>
                            </a>
                        </li>
                        <li><a href="../academic/programs.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Programs">Programs</span>
                            </a>
                        </li>
                        <li><a href="../academic/batches.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Batches">Batches</span>
                            </a>
                        </li>
                        <li><a href="../academic/sessions.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Sessions">Sessions</span>
                            </a>
                        </li>
                        <li><a href="../academic/semesters.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Semesters">Semesters</span>
                            </a>
                        </li>
                        <li><a href="../academic/sections.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Sections">Sections</span>
                            </a>
                        </li>
                        <li><a href="../academic/class_rooms.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Class Rooms">Class Rooms</span>
                            </a>
                        </li>
                        <li><a href="../academic/course.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Course">Course</span>
                            </a>
                        </li>
                        <li><a href="../academic/enroll_course.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Class Routines">Class Routines</span>
                            </a>
                        </li>
                        <li><a href="../academic/exam_routines.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Exam Routines">Exam Routines</span>
                            </a>
                        </li>
                        <li><a href="../academic/my_routines.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="My Routines">My Routines</span>
                            </a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Settings">Settings </span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">

                                    <li><a href="../academic/class_routine_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Class Routine Settings">Class Routine Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="../academic/exam_routine_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Class Routine Settings">Exam Routine Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">import_contacts</i>
                    <span class="menu-title" data-i18n="Examinations"> Examinations</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../examinations/exam_attendances.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Exam Attendances">Exam Attendances</span>
                            </a>
                        </li>
                        <li><a href="../examinations/exam_mark_ledger.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Exam Markledger">Exam Markledger</span>
                            </a>
                        </li>
                        <li><a href="../examinations/exam_results.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Exam Results">Exam Results</span>
                            </a>
                        </li>
                        <li><a href="../examinations/course_type.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Course Type">Course Type</span>
                            </a>
                        </li>
                        <li><a href="../examinations/grading_system.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Grading Systems">Grading Systems</span>
                            </a>
                        </li>
                        <li><a href="../examinations/admit_cards_print.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Admit Card Print">Admit Card Print</span>
                            </a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Settings">Settings </span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">

                                    <li><a href="../academic/class_routine_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Class Routine Settings">Class Routine Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="../academic/exam_routine_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Class Routine Settings">Exam Routine Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"
                                href="JavaScript:void(0)">
                                <i class="material-icons">content_paste</i>
                                <span class="menu-title" data-i18n="Study Materials">Study Materials </span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                    <li><a href="../study_materials/assignment_list.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Assignment List">Assignment List</span>
                                        </a>
                                    </li>
                                    <li><a href="../study_materials/content.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Content">Content</span>
                                        </a>
                                    </li>
                                    <li><a href="../study_materials/content_types.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Content Type">Content Type</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">monetization_on</i>
                    <span class="menu-title" data-i18n="Fees Collections">Fees Collections </span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Student Fees">Student Fees</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../study_materials/content_types.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Fees Due">Fees Due</span>
                                        </a>
                                    </li>
                                    <li><a href="../fees_collections/quick_received.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Quick Received">Quick Received</span>
                                        </a>
                                    </li>
                                    <li><a href="../fees_collections/fees_reports.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Fees Reports">Fees Reports</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../fees_collections/fees_master.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Fees Master">Fees Master</span>
                            </a>
                        </li>
                        <li><a href="../fees_collections/fees_types.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Fees Type">Fees Type</span>
                            </a>
                        </li>
                        <li><a href="../fees_collections/fees_discounts.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Fees Discounts">Fees Discounts</span>
                            </a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Settings">Settings </span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">

                                    <li><a href="../fees_collections/fees_fines.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Fees Fines">Fees Fines</span>
                                        </a>
                                    </li>
                                    <li><a href="../fees_collections/receipt_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Contributions">Contributions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="navigation-header"><a class="navigation-header-text">Human Resources</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">person_pin</i>
                    <span class="menu-title" data-i18n="Human Resources">Human Resources</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../human_resources/staff_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Staff List">Staff List</span>
                            </a>
                        </li>
                        <li><a href="../fees_collections/fees_fines.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Staff Notes">Staff Notes</span>
                            </a>
                        </li>

                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Attendances">Attendances</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../human_resources/daily_attendances.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Daily Attendances">Daily Attendances</span>
                                        </a>
                                    </li>
                                    <li><a href="../human_resources/daily_attendances.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Daily Reports">Daily Reports</span>
                                        </a>
                                    </li>
                                    <li><a href="../human_resources/hourly_attendans.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Hourly Attendances">Hourly Attendances</span>
                                        </a>
                                    </li>

                                    <li><a href="../human_resources/hourly_reports.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Hourly Reports">Hourly Reports</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../human_resources/leave_manages.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Leave Manages">Leave Manages</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/apply_leaves.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Apply Leaves">Apply Leaves</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/pay_rolls.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Pay Roll">Pay Roll</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/leave_types.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Leave Types">Leave Types</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/work_shift_types.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Work Shift Types">Work Shift Types</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/designations.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Designations">Designations</span>
                            </a>
                        </li>
                        <li><a href="../human_resources/departments.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Departments">Departments</span>
                            </a>
                        </li>

                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Settings"> Settings</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">

                                    <li><a href="../human_resources/tax_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Tax Settings">Tax Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="../human_resources/pay_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Pay Settings">Pay Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">attach_money</i>
                    <span class="menu-title" data-i18n="Incomes & Expenses">Incomes & Expenses</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../incomes_expenses/income_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Income List">Income List</span>
                            </a>
                        </li>
                        <li><a href="../incomes_expenses/lncome_categories.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Income Categories">Income Categories</span>
                            </a>
                        </li>
                        <li><a href="../incomes_expenses/expense_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Expense List">Expense List</span>
                            </a>
                        </li>
                        <li><a href="../incomes_expenses/expense_categories.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Expense Categories">Expense Categories</span>
                            </a>
                        </li>
                        <li><a href="../incomes_expenses/outcome_calculation.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Outcome Calculation">Outcome Calculation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">rss_feed</i>
                    <span class="menu-title" data-i18n="Communicates">Communicates</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">


                        <li><a href="../communicates/email.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Notify By Email">Notify By Email</span>
                            </a>
                        </li>

                        <li><a href="../communicates/sms.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Notify By SMS">Notify By SMS</span>
                            </a>
                        </li>

                        <li><a href="../communicates/event_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Event List">Event List</span>
                            </a>
                        </li>

                        <li><a href="../communicates/academic_calender.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Academic Calender">Academic Calender</span>
                            </a>
                        </li>

                        <li><a href="../communicates/notice_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Notice List">Notice List</span>
                            </a>
                        </li>

                        <li><a href="../communicates/notice_categories.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Notice Categories">Notice Categories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Library</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">local_library</i>
                    <span class="menu-title" data-i18n="Library"> Library</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../library/issue_return.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Issue & Return">Issue & Return</span>
                            </a>
                        </li>
                        <li><a href="../library/return_date_over.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Return Date Over">Return Date Over</span>
                            </a>
                        </li>

                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Library Members"> Library Members</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../library/student_list.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Student List">Student List</span>
                                        </a>
                                    </li>
                                    <li><a href="../library/staff_list.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Staff List">Staff List</span>
                                        </a>
                                    </li>
                                    <li><a href="../library/outsider_list.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Outsider List">Outsider List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../library/book_list.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Book List">Book List</span>
                            </a>
                        </li>
                        <li><a href="../library/outsider_list.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Outsider List">Outsider List</span>
                            </a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Settings"> Settings</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../library/library_sett.php"><i
                                                class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Library Card Settings">Library Card Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">remove_from_queue</i>
                    <span class="menu-title" data-i18n="Front Desk">Front Desk </span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li><a href="../front_desk/visitor_logs.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Visitor Log">Visitor Log</span>
                            </a>
                        </li>
                        <li><a href="../front_desk/phone_list.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Phone List">Phone List</span>
                            </a>
                        </li>
                        <li><a href="../front_desk/enquiry_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Enquiry List">Enquiry List</span>
                            </a>
                        </li>
                        <li><a href="../front_desk/complaine_list.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Complaines List">Complaines List</span>
                            </a>
                        </li>
                        <li><a href="../front_desk/postal_exchanges.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Postal Exchanges">Postal Exchanges</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">storage</i>
                    <span class="menu-title" data-i18n="Transcripts"> Transcripts</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../transcripts/mark_sheets.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Marksheets">Marksheets</span>
                            </a>
                        </li>
                        <li><a href="../transcripts/mark_sheet_sett.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Marksheet Settings">Marksheet Settings</span>
                            </a>
                        </li>
                        <li><a href="../transcripts/certificates.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Certificates">Certificates</span>
                            </a>
                        </li>
                        <li><a href="../transcripts/certificates_templates.php"><i
                                    class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Certificates Templates">Certificates Templates</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Settings</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <i class="material-icons">settings</i>
                    <span class="menu-title" data-i18n="Settings">Settings </span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li><a href="../settings/general_sett.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="General Settings">General Settings</span>
                            </a>
                        </li>
                        <li><a href="../settings/states.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="States">States</span>
                            </a>
                        </li>
                        <li><a href="../settings/districts.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Districts">Districts</span>
                            </a>
                        </li>
                        <li><a href="../settings/languages.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Languages">Languages</span>
                            </a>
                        </li>
                        <li><a href="../settings/translates.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Translates">Translates</span>
                            </a>
                        </li>
                        <li><a href="../settings/roles_permiss.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Roles and Permissions">Roles and Permissions</span>
                            </a>
                        </li>
                        <li><a href="../settings/mail_sett.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Mail Settings">Mail Settings</span>
                            </a>
                        </li>
                        <li><a href="../settings/sms_sett.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="SMS Settings">SMS Settings</span>
                            </a>
                        </li>
                        <li><a href="../settings/bulk.php"><i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Bulk Import/Export">Bulk Import/Export</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="navigation-background"></div><a
            class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="col s12">

                <div class="container">
                    <form method="POST " action="">
                        <section class="invoice-edit-wrapper section">
                            <div class="row">
                                <!-- invoice view page -->
                                <div class="col xl9 m8 s12">
                                    <div class="card">
                                        <div class="card-content px-36">
                                            <!-- header section -->
                                            <div class="row mb-1">
                                                <div class="col xl4 m12 display-flex align-items-center">
                                                    <h6 class="invoice-number mr-4 mb-5">Date</h6>
                                                    <input type="text" placeholder="00/00/0000" readonly>
                                                </div>

                                            </div>
                                            <!-- logo and title -->
                                            <div class="row mb-1">
                                                <div class="col m6 s12 invoice-logo display-flex pt-1 push-m6">
                                                    <img src="../../assets/images/gallery/gs_logo.jpg" alt="logo"
                                                        height="65" width="200">
                                                </div>
                                                <div class="col m6 s12 pull-m6">
                                                    <h4 class="indigo-text">View Student</h4>
                                                </div>
                                            </div>
                                            <!--Logo and title has end-->


                                            <!--################ VIEW ##########################################-->
                                            <div id="basic-tabs" class="card-default scrollspy">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="row" id="main-view">
                                                            <div class="col s12">
                                                                <ul class="tabs tab-demo z-depth-1">
                                                                    <li class="tab col m3"><a class="active"
                                                                            href="#test1">Basic Info</a></li>
                                                                    <li class="tab col m3"><a href="#test2">Education
                                                                            Info</a></li>
                                                                    <li class="tab col m3"><a
                                                                            href="#test3">Documents</a></li>
                                                                    <li class="tab col m3"><a href="#test4">Notes</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col s12">
                                                                <div id="test1" class="col s12">
                                                                    <p class="mt-2 mb-2">
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="firstName">First Name *</label>
                                                                            <input type="text" id="firstName"
                                                                                name="first_name" class="validate"
                                                                                readonly="">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="lastName">Last Name *</label>
                                                                            <input type="text" id="lastName"
                                                                                class="validate" name="lastname"
                                                                                class="validate" readonly="">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="father_name">Father Name</label>
                                                                            <input id="father_name" type="text"
                                                                                name="f_name" class="validate">
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="motherName">Mother Name </label>
                                                                            <input type="text" id="motherName"
                                                                                class="validate" name="m_name">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">

                                                                            <label for="phone-code">Contact *</label>
                                                                            <input type="text" class="validate"
                                                                                name="contact" id="phone-code"
                                                                                readonly="">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="Email1">Email *</label>
                                                                            <input type="email" class="validate"
                                                                                name="email" id="Email1" readonly="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Gender *"
                                                                                name="gender" data-error=".errorTxt6"
                                                                                readonly>
                                                                                <option value="">
                                                                                </option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="input-field col m4 s12">

                                                                            <label for="dob">DOB *</label>
                                                                            <input type="text" name="dob"
                                                                                class="datepicker" id="dob"
                                                                                class="validate" readonly="">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Marital Status"
                                                                                name="marital_status"
                                                                                data-error=".errorTxt6">
                                                                                <option value="">Marital Status
                                                                                </option>
                                                                                <option value="sample">sample</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">

                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Blood Group "
                                                                                data-error=".errorTxt6">
                                                                                <option value=""></option>
                                                                                <option value="A+">A+</option>
                                                                                <option value="A-">A-</option>
                                                                                <option value="B+">B+</option>
                                                                                <option value="B-">B-</option>
                                                                                <option value="AB+">AB+</option>
                                                                                <option value="AB-">AB-</option>
                                                                                <option value="O+">O+</option>
                                                                                <option value="O-">O-</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="id">National ID </label>
                                                                            <input type="text" class="validate"
                                                                                name="national_id" id="id">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="p_no">Passport No</label>
                                                                            <input type="text" class="validate"
                                                                                name="passport_no" id="p_no">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <p class="invoice-number mr-4 mb-5">PRESENT
                                                                            ADDREES
                                                                        </p>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="State *"
                                                                                data-error=".errorTxt6"
                                                                                name="persent_state" readonly>
                                                                                <option value="">State * </option>
                                                                                <option value="sample1">sample1</option>
                                                                                <option value="sample2">sample2</option>
                                                                            </select>

                                                                        </div>

                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="District *"
                                                                                data-error=".errorTxt6"
                                                                                name="persent_district" readonly>
                                                                                <option value=""> District
                                                                                </option>
                                                                                <option value="sample">sample</option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="village2">Village</label>
                                                                            <input type="text" class="validate"
                                                                                name="present_village" id="village2">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="address">Addres *</label>
                                                                            <input type="text" class="validate"
                                                                                name="present_address" id="address"
                                                                                readonly="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="invoice-number mr-4 mb-5">PERMANENT
                                                                            ADDREES
                                                                        </p>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="State *"
                                                                                data-error=".errorTxt6" name="per_state"
                                                                                readonly>
                                                                                <option value="">
                                                                                </option>
                                                                                <option value="sample1">sample1</option>
                                                                                <option value="sample2">sample2</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="District *"
                                                                                data-error=".errorTxt6"
                                                                                name="per_district" readonly>
                                                                                <option value="">
                                                                                </option>
                                                                                <option value="sample">sample</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="village1">Village</label>
                                                                            <input type="text" class="validate"
                                                                                name="per_village" id="village1">
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <label for="address2">Addres *</label>
                                                                            <input type="text" class="validate"
                                                                                name="per_address" id="address2"
                                                                                readonly="">
                                                                        </div>
                                                                    </div>
                                                                    </p>
                                                                </div>
                                                                <div id="test2" class="col s12">
                                                                    <p class="mt-2 mb-2">
                                                                    <div class="row">
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="school_name">School Name
                                                                            </label>
                                                                            <input type="text" class="validate"
                                                                                id="school_name" name="school_name">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="exam_id">Exam ID </label>
                                                                            <input type="text" class="validate"
                                                                                id="exam_id" name="s_exam_id">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="year1">Graduation Year</label>
                                                                            <input type="text" class="validate"
                                                                                id="year1" name="s_year1">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="point">Graduation Point</label>
                                                                            <input type="text" class="validate"
                                                                                id="point" name="s_graduation_point">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="collage_name">Collage
                                                                                Name</label>
                                                                            <input type="text" class="validate"
                                                                                id="collage_name" name="collage_name">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="exam_id1">Exam ID </label>
                                                                            <input type="text" class="validate"
                                                                                id="exam_id1" name="c_exam_id">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="year0">Graduation Year</label>
                                                                            <input type="text" class="validate"
                                                                                id="year0" name="c_year1">
                                                                        </div>
                                                                        <div class="input-field col m3 s12">
                                                                            <label for="point1">Graduation Point</label>
                                                                            <input type="text" class="validate"
                                                                                id="point1" name="c_graduation_point">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="invoice-number mr-4 mb-5">Academic
                                                                            Information
                                                                        </p>

                                                                        <div class="input-field col m4 s12">
                                                                            <label for="student_id">Student ID *</label>
                                                                            <input type="text" class="validate"
                                                                                id="student_id" name="student_id"
                                                                                required>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Batch *"
                                                                                data-error=".errorTxt6" name="batch"
                                                                                required>
                                                                                <option value=""></option>
                                                                                <option value="Sample1">Sample1</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Program *"
                                                                                data-error=".errorTxt6" name="program"
                                                                                required>
                                                                                <option value=""></option>
                                                                                <option value="Sample1">Sample1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Session *"
                                                                                data-error=".errorTxt6" name="session"
                                                                                required>
                                                                                <option value="">
                                                                                </option>
                                                                                <option value="Sample1">Sample1</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <select
                                                                                class="max-length browser-default error"
                                                                                data-placeholder="Semester *"
                                                                                data-error=".errorTxt6" name="semester"
                                                                                required>
                                                                                <option value="">
                                                                                </option>
                                                                                <option value="Sample1">Sample1</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <div id="view-multiple">
                                                                                <select class="select2 browser-default"
                                                                                    multiple="multiple" name="section"
                                                                                    data-placeholder="Section">
                                                                                    <option value="Sample1">Sample1
                                                                                    </option>
                                                                                    <option value="Sample2">Sample2
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Add Option Has BEGING  -->
                                                                    <p class="invoice-number mr-4 mb-5">Guardians
                                                                        information

                                                                    <div id="dynamic_field">
                                                                        <div class="row">
                                                                            <div class="input-field col m3 s12">
                                                                                <label for="relation">Relation *</label>
                                                                                <input type="text" class="validate"
                                                                                    id="relation" name="relation"
                                                                                    required="">
                                                                            </div>
                                                                            <div class="input-field col m3 s12">
                                                                                <label for="gur_name">Name *</label>
                                                                                <input type="text" class="validate"
                                                                                    id="gur_name" name="gur_name"
                                                                                    required="">
                                                                            </div>
                                                                            <div class="input-field col m3 s12">
                                                                                <label for="designation">
                                                                                    Designation *</label>
                                                                                <input type="text" class="validate"
                                                                                    id="designation" name="designation"
                                                                                    required="">
                                                                            </div>
                                                                            <div class="input-field col m3 s12">
                                                                                <label
                                                                                    for="gur_organization">Organization
                                                                                    *</label>
                                                                                <input type="text" class="validate"
                                                                                    id="gur_organization"
                                                                                    name="gur_organization" required="">
                                                                            </div>
                                                                            <div class="input-field col m3 s12">
                                                                                <label for="gur_contact">Contact
                                                                                    *</label>
                                                                                <input type="text" class="validate"
                                                                                    id="gur_contact" name="gur_contact"
                                                                                    required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </p>
                                                                </div>
                                                                <div id="test3" class="col s12">
                                                                    <p class="mt-2 mb-2">
                                                                    <div class="row section">
                                                                        <div class="input-field col m6 s6">
                                                                            <h6>Photo</h6>
                                                                            <p>Maximum Photo Upload Size 2MB.</p>
                                                                            <input type="file" id="input-file-max-fs"
                                                                                name="" class="dropify"
                                                                                data-max-file-size="2M">
                                                                        </div>
                                                                        <div class="input-field col m6 s6">
                                                                            <h6>Signature</h6>
                                                                            <p>Maximum File Upload Size 2MB.</p>
                                                                            <input type="file" id="input-file-max-fs"
                                                                                name="" class="dropify"
                                                                                data-max-file-size="2M">
                                                                        </div>
                                                                    </div>
                                                                    </fieldset>
                                                                    <br>
                                                                    <fieldset>
                                                                        <h6>Upload Document</h6>
                                                                        <div id="dynamic_upload">



                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="input-field col m12 s6">
                                                                                <button
                                                                                    class="mb-6 btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan"
                                                                                    name="add" id="added">
                                                                                    <i
                                                                                        class="material-icons left">add</i>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        </p>
                                                                </div>
                                                                <div id="test4" class="col s12">
                                                                    <p class="mt-2 mb-2">
                                                                        <!-- Striped Table -->

                                                                    <div id="striped-table"
                                                                        class="card-default scrollspy">
                                                                        <div class="row">
                                                                            <div class="col s12">
                                                                            </div>
                                                                            <div class="col s12">
                                                                                <table class="striped">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th data-field="id">
                                                                                                Title </th>
                                                                                            <th data-field="name">
                                                                                                Notes
                                                                                            </th>
                                                                                            <th data-field="price">
                                                                                                Attach
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>No data</td>
                                                                                            <td>No data</td>
                                                                                            <td>No data</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>&nbsp</td>
                                                                                            <td>&nbsp</td>
                                                                                            <td>&nbsp</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>&nbsp</td>
                                                                                            <td>&nbsp</td>
                                                                                            <td>&nbsp</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                            <!--########################################################### HIDDEN PRINT PAGE ########################################################################################-->
                                            <div hidden>
                                                <div id="invoice">
                                                    <!-- header section -->
                                                    <!-- logo and title -->
                                                    <div class="row mb-1">
                                                        <div class="col m6 s12 invoice-logo display-flex pt-1 push-m6">
                                                            <img src="../../assets/images/gallery/gs_logo.jpg"
                                                                alt="logo" height="65" width="200">
                                                        </div>
                                                        <div class="col m6 s12 pull-m6">
                                                            <h4 class="indigo-text">Student Details</h4>
                                                        </div>
                                                    </div>
                                                    <!--Logo and title has end-->

                                                    <div>


                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="row">

                                                                    <div class="col s12">
                                                                        <div id="test1" class="col s12">
                                                                            <blockquote>
                                                                                <h5 class="indigo-text">Basic
                                                                                    Information
                                                                                </h5>
                                                                            </blockquote>
                                                                            <p class="mt-2 mb-2">
                                                                            <div class="row">
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>First Name
                                                                                    </label>
                                                                                    <input type="text" name="first_name"
                                                                                        readonly="">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Last Name
                                                                                    </label>
                                                                                    <input type="text" name="lastname"
                                                                                        readonly="">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Father
                                                                                        Name</label>
                                                                                    <input type="text" name="f_name">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Mother Name
                                                                                    </label>
                                                                                    <input type="text" name="m_name">
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">

                                                                                <div class="input-field col m3 s12">

                                                                                    <label>Contact
                                                                                    </label>
                                                                                    <input type="text" name="contact"
                                                                                        readonly="">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label for="Email1">Email</label>
                                                                                    <input type="email" class="validate"
                                                                                        name="email" id="Email1"
                                                                                        readonly="">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Gender</label> <input
                                                                                        type="text" name="gender"
                                                                                        readonly value="Male">

                                                                                </div>
                                                                                <div class="input-field col m3 s12">

                                                                                    <label>DOB</label>
                                                                                    <input type="text" name="dob"
                                                                                        readonly="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Marital</label>
                                                                                    <input type="text"
                                                                                        name="marital_status"
                                                                                        value="sample">

                                                                                </div>
                                                                                <div class="input-field col m3 s12">

                                                                                    <input type="text" name=""
                                                                                        value="A+">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label for="id">National ID </label>
                                                                                    <input type="text" class="validate"
                                                                                        name="national_id" id="id">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Passport No</label>
                                                                                    <input type="text"
                                                                                        name="passport_no">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <p class="invoice-number mr mb-4">
                                                                                    PRESENT
                                                                                    ADDREES
                                                                                </p>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>State</label> <input
                                                                                        type="text" name="persent_state"
                                                                                        readonly value="sample1">
                                                                                </div>

                                                                                <div class="input-field col m3 s12">
                                                                                    <label>District</label> <input
                                                                                        type="text"
                                                                                        name="persent_district" readonly
                                                                                        value="sample">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Village</label>
                                                                                    <input type="text"
                                                                                        name="present_village">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Addres</label>
                                                                                    <input type="text"
                                                                                        name="present_address"
                                                                                        readonly="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <p class="invoice-number mr-4 mb-4">
                                                                                    PERMANENT
                                                                                    ADDREES
                                                                                </p>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>State</label>
                                                                                    <input type="text" name="per_state"
                                                                                        readonly value="sample2">
                                                                                    </input>
                                                                                </div>

                                                                                <div class="input-field col m3 s12">
                                                                                    <label>District</label>
                                                                                    <input type="text"
                                                                                        name="per_district" readonly
                                                                                        value="sample">

                                                                                    </input>
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Village</label>
                                                                                    <input type="text"
                                                                                        name="per_village">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Addres </label>
                                                                                    <input type="text"
                                                                                        name="per_address" readonly="">
                                                                                </div>
                                                                            </div>
                                                                            </p>
                                                                        </div>
                                                                        <div id="test2" class="col s12">
                                                                            <blockquote>
                                                                                <h5 class="indigo-text">Education
                                                                                    Information
                                                                                </h5>
                                                                            </blockquote>
                                                                            <p class="mt-2 mb-2">
                                                                            <div class="row">
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>School Name
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        name="school_name">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Exam ID </label>
                                                                                    <input type="text" name="s_exam_id">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Graduation
                                                                                        Year</label>
                                                                                    <input type="text" name="s_year1">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Graduation
                                                                                        Point</label>
                                                                                    <input type="text"
                                                                                        name="s_graduation_point">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Collage
                                                                                        Name</label>
                                                                                    <input type="text"
                                                                                        name="collage_name">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Exam ID </label>
                                                                                    <input type="text" name="c_exam_id">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Graduation
                                                                                        Year</label>
                                                                                    <input type="text" name="c_year1">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Graduation
                                                                                        Point</label>
                                                                                    <input type="text"
                                                                                        name="c_graduation_point">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <p class="invoice-number mr-4 mb-4">
                                                                                    Academic
                                                                                    Information
                                                                                </p>

                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Student ID
                                                                                    </label>
                                                                                    <input type="text" name="student_id"
                                                                                        required>
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Batch
                                                                                    </label>
                                                                                    <input type="text" name="batch"
                                                                                        required value="Sample1">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Program
                                                                                    </label> <input type="text"
                                                                                        name="program" required
                                                                                        value="Sample1">

                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Session
                                                                                    </label>
                                                                                    <input type="text" name="session"
                                                                                        required value="Sample1">


                                                                                </div>
                                                                            </div>
                                                                            <div class="row">

                                                                                <div class="input-field col m3 s12">
                                                                                    <label>Semester
                                                                                    </label>
                                                                                    <input type="text" name="semester"
                                                                                        value="Sample1">
                                                                                </div>
                                                                                <div class="input-field col m3 s12">
                                                                                    <div id="view-multiple">
                                                                                        <select
                                                                                            class="select2 browser-default"
                                                                                            multiple="multiple"
                                                                                            name="section"
                                                                                            data-placeholder="Section">
                                                                                            <option value="Sample1">
                                                                                                Sample1
                                                                                            </option>
                                                                                            <option value="Sample2">
                                                                                                Sample2
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--Add Option Has BEGING  -->
                                                                            <p class="invoice-number mr-4 mb-4">
                                                                                Guardians
                                                                                information

                                                                            <div id="dynamic_field">
                                                                                <div class="row">
                                                                                    <div class="input-field col m3 s12">
                                                                                        <label>Relation
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            name="relation" required="">
                                                                                    </div>
                                                                                    <div class="input-field col m3 s12">
                                                                                        <label>Name</label>
                                                                                        <input type="text"
                                                                                            name="gur_name" value="hi">
                                                                                    </div>
                                                                                    <div class="input-field col m3 s12">
                                                                                        <label>
                                                                                            Designation </label>
                                                                                        <input type="text"
                                                                                            name="designation" readonly>
                                                                                    </div>
                                                                                    <div class="input-field col m3 s12">
                                                                                        <label>Organization
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            name="gur_organization"
                                                                                            readonly>
                                                                                    </div>
                                                                                    <div class="input-field col m3 s12">
                                                                                        <label>Contact
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            name="gur_contact" readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            </p>
                                                                        </div>

                                                                        <div id="test3" class="col s12">
                                                                            <blockquote>
                                                                                <h5 class="indigo-text">Documents
                                                                                </h5>
                                                                            </blockquote>
                                                                            <p class="mt-2 mb-2">
                                                                            <div class="row section">
                                                                                <div class="input-field col m3 s6">
                                                                                    <h6>Photo</h6>
                                                                                    <input type="file"
                                                                                        id="input-file-max-fs" name=""
                                                                                        class="dropify">
                                                                                </div>
                                                                                <div class="input-field col m3 s6">
                                                                                    <h6>Signature</h6>
                                                                                    <input type="file"
                                                                                        id="input-file-max-fs" name=""
                                                                                        class="dropify" value="" </div>
                                                                                </div>
                                                                                </fieldset>
                                                                                <br>
                                                                                <fieldset>
                                                                                    <h6>Upload Document</h6>
                                                                                    <div id="dynamic_upload">


                                                                                    </div>
                                                                                    </p>
                                                                            </div>

                                                                            <div id="test4" class="col s12">
                                                                                <blockquote>
                                                                                    <h5 class="indigo-text">Notes
                                                                                    </h5>
                                                                                </blockquote>
                                                                                <p class="mt-2 mb-2">
                                                                                    <!-- Striped Table -->

                                                                                <div id="striped-table"
                                                                                    class="card-default scrollspy">
                                                                                    <div class="row">
                                                                                        <div class="col s12">
                                                                                        </div>
                                                                                        <div class="col s12">
                                                                                            <table class="striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th
                                                                                                            data-field="id">
                                                                                                            Title </th>
                                                                                                        <th
                                                                                                            data-field="name">
                                                                                                            Notes
                                                                                                        </th>
                                                                                                        <th
                                                                                                            data-field="price">
                                                                                                            Attach
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>No data</td>
                                                                                                        <td>No data</td>
                                                                                                        <td>No data</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>&nbsp</td>
                                                                                                        <td>&nbsp</td>
                                                                                                        <td>&nbsp</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>&nbsp</td>
                                                                                                        <td>&nbsp</td>
                                                                                                        <td>&nbsp</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--########################################################### HIDDEN PRINT PAGE ########################################################################################-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- invoice action  -->
                                <div class="col xl3 m4 s12">
                                    <div class="card invoice-action-wrapper mb-10">
                                        <div class="progress">
                                            <div class="indeterminate"></div>
                                        </div>
                                        <div class="card-content">
                                            <div class="invoice-action-btn">
                                                <div><a><button class="button">
                                                            <div class="trash">
                                                                <div class="top">
                                                                    <div class="paper"></div>
                                                                </div>
                                                                <div class="box"></div>
                                                                <div class="check">
                                                                    <svg viewBox="0 0 8 6">
                                                                        <polyline points="1 3.4 2.71428571 5 7 1">
                                                                        </polyline>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <span>Delete Item</span>
                                                        </button> </a></div>
                                            </div>
                                            <div class="invoice-action-btn">
                                                <a id="download"
                                                    class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print">
                                                    <span>Print</span>
                                                </a>
                                            </div>
                                            <div class="invoice-action-btn">
                                                <a href="app-invoice-edit.html"
                                                    class="btn-block btn btn-light-indigo waves-effect waves-light">
                                                    <span>Edit Details</span>
                                                </a>
                                            </div>
                                            <div class="row invoice-action-btn">
                                                <div class="col s6 preview">
                                                    <a class="btn btn-light-indigo btn-block waves-effect waves-light"
                                                        href="studentlist.php">
                                                        <span class="responsive-text">Preview</span>
                                                    </a>
                                                </div>
                                                <div class="col s6 save">
                                                    <a class="btn btn-light-purple btn-block waves-effect waves-light"
                                                        href="view-student.php">
                                                        <span class="responsive-text">Refresh</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-payment mb-3">
                                        &nbsp<br>&nbsp
                                    </div>
                                </div>
                                <!--image for Card -->
                                <div class="col xl3 m4 s12">
                                    <div id="card-panel-type" class="section">
                                        <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                            <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                                src="../../assets/images/icon/cardimg.jpg" alt="images">
                                            <h6><a href="#" class="mt-5">Sample Academic</a></h6>
                                            <p>Allready 50 Students Details Are Register</p>
                                            <div class="row mt-4">
                                                <a href="#">
                                                    <div class="col s3 p-0 mt-1"><span class="pt-2">Sample</span>
                                                    </div>
                                                </a>
                                                <div class="col s7 mt-1 right-align">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>

    <!-- END: Page Main-->

    <!-- Theme Customizer -->


    <a href="#" data-target="theme-cutomizer-out"
        class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i
            class="material-icons">settings</i></a>

    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
        <div class="col s12">
            <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
            <h5 class="theme-cutomizer-title">Theme Customizer</h5>
            <p class="medium-small">Customize & Preview in Real Time</p>
            <div class="menu-options">
                <h6 class="mt-6">Menu Options</h6>
                <hr class="customize-devider">
                <div class="menu-options-form row">
                    <div class="input-field col s12 menu-color mb-0">
                        <p class="mt-0">Menu Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>

                        </div>

                    </div>
                    <div class="input-field col s12 menu-bg-color mb-0">
                        <p class="mt-0">Menu Background Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-bg-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>

                        </div>

                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Dark
                            <label class="float-right"><input class="menu-dark-checkbox" type="checkbox"> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Collapsed
                            <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox">
                                <span class="lever ml-0"></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Navbar Options</h6>
            <hr class="customize-devider">
            <div class="navbar-options row">
                <div class="input-field col s12 navbar-color mb-0">
                    <p class="mt-0">Navbar Color</p>
                    <div class="gradient-color center-align">
                        <span class="navbar-color-option gradient-45deg-indigo-blue"
                            data-color="gradient-45deg-indigo-blue"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="navbar-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="navbar-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"></span>

                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Dark
                        <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox"> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>

            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider">
            <div class="navbar-options row">
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Dark
                        <label class="float-right"><input class="footer-dark-checkbox" type="checkbox"> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Theme Customizer -->
    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span class="right hide-on-small-only">Design and Developed by <a
                        href="https://gosetup.com/">Gosetup lab</a></span></div>
        </div>
    </footer>


    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../assets/js/vendors.min.js"></script>
    <!-- END PAGE VENDOR JS-->

    <!-- BEGIN PAGE NUMBER JS-->
    <script src="../../assets/vendors/formatter/jquery.formatter.min.js"></script>
    <!-- END PAGE NUMBER FORMAT JS-->

    <!-- BEGIN THEME  JS-->
    <script src="../../assets/js/plugins.min.js"></script>
    <script src="../../assets/js/search.min.js"></script>
    <script src="../../assets/js/custom/custom-script.min.js"></script>
    <script src="../../assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->

    <!-- BEGIN 123 JS-->
    <script src="../../assets/vendors/materialize-stepper/materialize-stepper.min.js"></script>
    <script src="../../assets/js/scripts/form-wizard.min.js"></script>

    <!-- BEGIN FILE-UPLOAD JS-->
    <script src="../../assets/vendors/dropify/js/dropify.min.js"></script>
    <script src="../../assets/js/scripts/form-file-uploads.min.js"></script>
    <!--My Own js script-->
    <script src="../../assets/js/scripts/my_add/fileset.js"></script>
    <!-- TOAST ALRET SETUP FILE-->
    <script src="../../assets/js/scripts/my_add/toast.js"></script>
    <!--TAG (STATUS) FILE JS-->
    <script src="../../assets/vendors/select2/select2.full.min.js"></script>
    <script src="../../assets/js/scripts/form-select2.min.js"></script>
    <!--END TAG FILE JS-->

    <!-- PDF GENERATION JS FILE-->
    <script src="../../assets/js/scripts/my_add/html2pdf.js"></script>
    <!-- END PDF GENERATION JS FILE-->

    <!--DOCUMENT ADD FILE JS-->
    <script>
    $(document).ready(function() {
        var i = 1;
        $('#added').click(function() {
            i++;
            $('#dynamic_upload').append('<div class="row section" id="row' + i +
                '"> <div class="input-field col m4 s6"><label for="title">Title *</label> <input type="text" class="validate" id="title" name="title" readonly=""></div><div class="input-field col m7 s6"> <p>Document</p> <input type="file" id="input-file-max-fs" readonly="" name="documant_file" class="validate" data-max-file-size="2M"> </div><td><button type="button" name="add" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-red-pink btn_tremove" id="' +
                i + '"><i class="material-icons">clear</i></button></td></div></div>');
        });
        $(document).on('click', '.btn_tremove', function() {
            var button_id = $(this).attr("id");

            $('#row' + button_id + '').remove();
        });

    });
    </script>
    <!-- END  DOCUMENT ADD FILE JS-->
    <!--PHONE CODE-->
    <script>
    $('#phone-code').formatter({
        'pattern': '+94 {{99}}-{{9999999}}',
        'persistent': true
    });
    </script>
    <!-- END PHONE CODE-->
    <!-- delete button animation with css + js -->
    <script>
    document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
        if (!button.classList.contains('delete')) {
            button.classList.add('delete');
            setTimeout(() => button.classList.remove('delete'), 3200);
        }
        e.preventDefault();
    }));
    </script>
</body>

</html>