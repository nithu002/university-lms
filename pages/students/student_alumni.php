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
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/flag-icon/css/flag-icon.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="../../assets/css/themes/vertical-dark-menu-template/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/pages/page-users.min.css">
    <!-- END: Page Level CSS-->

    <!-- BEGIN:MY_ADD BUTTON CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom/button.css">
    <!-- END: MY_ADD BUTTON CSS-->

    <!-- DATA TABLE CHATE -->
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/dataTables.checkboxes.css">
    <!-- END: VENDOR CSS-->

    <!-- CSV , EXCAL EXPORT OPTIONS LINKS -->
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <!-- END  CSV , EXCAL EXPORT OPTIONS LINKS -->

    <!--EDIT BUTTON CSS-->
    <style>
    body {

        background: #eceffc;
    }

    fieldset.inline {
        display: inline;
    }

    fieldset {
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        border: 0.5px dotted;
    }

    hr {
        border: 0;
        width: 96%;
        color: white;
        height: 1px
    }
    </style>
</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

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
                                <input class="search-box-sm mb-0" type="search" required="" id="search"
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

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">content_paste</i>
                    <span class="menu-title" data-i18n="Templates">Admission</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="../admission/studentlist.php">
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
            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
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
                        <li class="active"><a class="active" href="../students/student_alumni.php"><i
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
                    <div class="section">

                        <!-- JQUERY VALIDATION -->
                        <div class="row">
                            <div class="col s12">
                                <div id="validations" class="card card-tabs">

                                    <div class="card-content">
                                        <div class="card-title">
                                            <blockquote>
                                                <h5 class="indigo-text">Course Add Drop</h5>
                                            </blockquote>
                                        </div>
                                        <br>
                                        <div id="view-validations">
                                            <form class="formValidate" id="formValidate" method="POST" action="">
                                                <div class="row">
                                                    <div class="col s3">
                                                        <label for="batch">Batch <span
                                                                class="#00c853 green-text">*</span></label>
                                                        <div class="input-field">
                                                            <select class="error" id="batch" name="batch"
                                                                data-error=".errorTxt1" required="">
                                                                <option value="">All</option>
                                                                <option value="1">Manager</option>
                                                            </select>
                                                            <small class="errorTxt1"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col s3">
                                                        <label for="program">
                                                            Program <span class="#00c853 green-text">*</span></label>
                                                        <div class="input-field">
                                                            <select class="error" id="program" name="program"
                                                                data-error=".errorTxt2" required="">
                                                                <option value="">All</option>
                                                                <option value="1">Manager</option>

                                                            </select>
                                                            <small class="errorTxt2"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col s2">
                                                        <br>
                                                        <div class="input-field">
                                                            <button type="submit" name="submit"
                                                                class="btn waves-effect waves-light gradient-45deg-light-blue-cyan z-depth-4">
                                                                <span class="hide-on-small-only">Filter</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- invoice list -->
                        <section class="users-list-wrapper section">
                            <div class="users-list-table">
                                <div class="card">
                                    <div class="card-content">
                                        <p>Transfer In List</p>
                                        <div class="row">

                                            <!-- MODEL PAGE ######################################################################################################################-->
                                            <div id="view-example">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <section class="invoice-edit-wrapper section">
                                                            <div class="col s1">

                                                            </div>
                                                            <div class="col s8">

                                                                <div id="modal1" class="modal col s8">
                                                                    <!--################ VIEW ##########################################-->
                                                                    <div id="basic-tabs" class="card-default scrollspy">
                                                                        <div class="row">
                                                                            <div class="col s12">
                                                                                <div class="row" id="main-view">
                                                                                    <div class="col s12">
                                                                                        <ul
                                                                                            class="tabs tab-demo z-depth-1">
                                                                                            <li class="tab col m3"><a
                                                                                                    class="active"
                                                                                                    href="#test1">Basic
                                                                                                    Info</a></li>
                                                                                            <li class="tab col m3"><a
                                                                                                    href="#test2">Education
                                                                                                    Info</a></li>
                                                                                            <li class="tab col m3"><a
                                                                                                    href="#test3">Documents</a>
                                                                                            </li>
                                                                                            <li class="tab col m3"><a
                                                                                                    href="#test4">Notes</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col s12">
                                                                                        <div id="test1" class="col s12">
                                                                                            <p class="mt-2 mb-2">
                                                                                            <div class="row">
                                                                                                <div class="col s6">
                                                                                                    <fieldset
                                                                                                        class="inline">
                                                                                                        <p><mark
                                                                                                                class="text-primary">Student
                                                                                                                ID:</mark>
                                                                                                            #0
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Name:</mark>
                                                                                                            tasting
                                                                                                            sample
                                                                                                            tasting
                                                                                                            sample</p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Father
                                                                                                                Name:</mark>
                                                                                                            tasting
                                                                                                            sample</p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Mother
                                                                                                                Name:</mark>
                                                                                                            tasting
                                                                                                            sample</p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Phone:</mark>
                                                                                                            0077777</p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Email:</mark>
                                                                                                            tastingsample@gmail.com
                                                                                                        </p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Gender:</mark>
                                                                                                            Male
                                                                                                        </p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Date
                                                                                                                Of
                                                                                                                Birth:</mark>
                                                                                                            19-01-2023
                                                                                                        </p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Marital
                                                                                                                Status:</mark>
                                                                                                            Single
                                                                                                        </p>
                                                                                                        <hr />

                                                                                                        <p><mark
                                                                                                                class="text-primary">Blood
                                                                                                                Group:</mark>
                                                                                                            A+
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                    </fieldset>
                                                                                                    <fieldset>
                                                                                                        <p><mark
                                                                                                                class="text-primary">National
                                                                                                                ID:</mark>
                                                                                                            00000000000000
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Passport
                                                                                                                No:</mark>
                                                                                                            0000000000000000
                                                                                                        </p>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                                <div class="col s6">
                                                                                                    <legend>Permanent
                                                                                                        Address
                                                                                                    </legend>
                                                                                                    <fieldset
                                                                                                        class="inline">
                                                                                                        <p><mark
                                                                                                                class="text-primary">State:</mark>
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">District:</mark>
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Village:</mark>
                                                                                                        </p>
                                                                                                        <hr />
                                                                                                        <p><mark
                                                                                                                class="text-primary">Address:</mark>
                                                                                                        </p>

                                                                                                        <legend>
                                                                                                            Permanent

                                                                                                        </legend>
                                                                                                        <fieldset>
                                                                                                            <p><mark
                                                                                                                    class="text-primary">State:</mark>
                                                                                                            </p>
                                                                                                            <hr />
                                                                                                            <p><mark
                                                                                                                    class="text-primary">District:</mark>
                                                                                                            </p>
                                                                                                            <hr />
                                                                                                            <p><mark
                                                                                                                    class="text-primary">Village:</mark>
                                                                                                            </p>
                                                                                                            <hr />
                                                                                                            <p><mark
                                                                                                                    class="text-primary">Address:</mark>
                                                                                                            </p>
                                                                                                        </fieldset>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div id="test4" class="col s12">
                                                                                            <p class="mt-2 mb-2">
                                                                                                <!-- Striped Table -->


                                                                                            </p>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                        </section>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END  MODEL PAGE ######################################################################################################################-->

                                            <div class="col s1.5 offset-s0"><span class="flow-text">
                                                    <ul type="none">
                                                        <li>

                                                            <a class="button91 button9 tooltip" id="btn"
                                                                onclick="copyText()"><i class="material-icons center"
                                                                    style="font-size: 18px">content_copy</i>
                                                                <span>copy</span></a>

                                                            <a type="button" id="export_button"
                                                                class="button91 button9 tooltip"><i
                                                                    class="material-icons center"
                                                                    style="font-size: 18px">note_add</i><span>
                                                                    excel</span></a>

                                                            <a id="btnExportToCsv" type="button"
                                                                class="button91 button9 tooltip"><i
                                                                    class="material-icons center"
                                                                    style="font-size: 18px">assignment</i><span>csv</span></a>

                                                            <a class="button91 button9 tooltip" id="download">
                                                                <i class="material-icons center"
                                                                    style="font-size: 18px">picture_as_pdf</i><span>
                                                                    pdf</span></a>

                                                            <a href="javascript:void(0);"
                                                                class="button91 button9 tooltip"
                                                                onclick="printPageArea('printableArea')"><i
                                                                    class="material-icons center"
                                                                    style="font-size: 18px">print</i><span>print</span></a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- datatable start -->

                                        <div class="responsive-table">
                                            <table id="users-list-datatable" class="table">
                                                <thead>
                                                    <tr>

                                                        <th></th>
                                                        <th style="width: 10%">Student ID</th>
                                                        <th style="width: 20%">Name</th>
                                                        <th style="width: 15%">Leave Date</th>
                                                        <th style="width: 10%">Days</th>
                                                        <th style="width: 10%">Apply Date</th>
                                                        <th style="width: 10%">Status</th>

                                                        <th style="width: 25% align-center">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>id</td>
                                                        <td>name</td>
                                                        <td>leave_date</td>
                                                        <td>days</td>
                                                        <td>apply_date</td>
                                                        <td><span class="chip green lighten-5">
                                                                <span class="green-text">Active</span></td>
                                                        <td>
                                                            <a href="#modal1" class="modal-trigger button91 button3"><i
                                                                    class="material-icons"
                                                                    style="font-size: 18px">remove_red_eye</i>&nbsp
                                                            </a>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- datatable ends -->

                                        <!--####################################################### HIDDEN THE TABLE ####################################333-->
                                        <div hidden>
                                            <!-- COPY -->
                                            <div id="text">
                                                <!-- EXPORT HTML TO PDF FILE -->
                                                <div id="invoice">
                                                    <!-- EXPORT HTML TO PRINT -->
                                                    <div id="printableArea">
                                                        <!-- EXPORT HTML TO EXCAL FILE -->
                                                        <div id="employee_data">
                                                            <div class="responsive-table">
                                                                <!-- CSV EXPORT -->
                                                                <table id="dataTable" class="table">
                                                                    <thead>
                                                                        <tr>

                                                                            <th></th>
                                                                            <th style="width: 10%">Student ID</th>
                                                                            <th style="width: 20%">Name</th>
                                                                            <th style="width: 15%">Leave Date</th>
                                                                            <th style="width: 10%">Days</th>
                                                                            <th style="width: 10%">Apply Date</th>
                                                                            <th style="width: 10%">Status</th>



                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>id</td>
                                                                            <td>name</td>
                                                                            <td>leave_date</td>
                                                                            <td>days</td>
                                                                            <td>apply_date</td>
                                                                            <td><span class="chip green lighten-5">
                                                                                    <span
                                                                                        class="green-text">Active</span>
                                                                            </td>

                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--######################################  HIDDEN THE TABLE  END########################################################-->


                                    </div>
                                </div>
                            </div>

                        </section>



                        <!--end container-->
                    </div>
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
                            <span class="menu-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-color-option red" data-color="red"></span>
                            <span class="menu-color-option purple" data-color="purple"></span>
                            <span class="menu-color-option pink" data-color="pink"></span>
                            <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-color-option cyan" data-color="cyan"></span>
                            <span class="menu-color-option teal" data-color="teal"></span>
                            <span class="menu-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
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
                            <span class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-bg-color-option red" data-color="red"></span>
                            <span class="menu-bg-color-option purple" data-color="purple"></span>
                            <span class="menu-bg-color-option pink" data-color="pink"></span>
                            <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                            <span class="menu-bg-color-option teal" data-color="teal"></span>
                            <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
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
                        <span class="navbar-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="navbar-color-option gradient-45deg-green-teal"
                            data-color="gradient-45deg-green-teal"></span>
                        <span class="navbar-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="navbar-color-option gradient-45deg-red-pink"
                            data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="navbar-color-option red" data-color="red"></span>
                        <span class="navbar-color-option purple" data-color="purple"></span>
                        <span class="navbar-color-option pink" data-color="pink"></span>
                        <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="navbar-color-option cyan" data-color="cyan"></span>
                        <span class="navbar-color-option teal" data-color="teal"></span>
                        <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                        <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
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
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../assets/js/plugins.min.js"></script>
    <script src="../../assets/js/search.min.js"></script>
    <script src="../../assets/js/custom/custom-script.min.js"></script>
    <script src="../../assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE FORM VALIDATION JS-->
    <script src="../../assets/js/scripts/form-validation.js"></script>
    <script src="../../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- BEGIN PAGE DATA TABLE  JS-->
    <script src="../../assets/js/scripts/page-users.min.js"></script>
    <script src="../../assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/vendors/data-tables/js/datatables.checkboxes.min.js"></script>
    <!-- END PAGE DATA TABLE JS-->
    <!-- MODAL SETUP FILE-->
    <script src="../../assets/js/scripts/advance-ui-modals.min.js"></script>
    <!-- END MODAL SETUP FILE-->
    <!--DATA TABLE EXPORT OPTIONS JS FILE-->
    <!-- PDF GENERATION JS FILE-->
    <script src="../../assets/js/scripts/my_add/html2pdf.js"></script>
    <!-- END PDF GENERATION JS FILE-->
    <script src="../../assets/js/scripts/my_add/data_table_print.js"></script>
    <!--DATA TABLE EXPORT OPTIONS JS FILE END -->

    <script>
    $('select[required]').css({
        position: 'absolute',
        display: 'inline',
        height: 0,
        padding: 0,
        border: '1px solid rgba(255,255,255,0)',
        width: 0
    });

    $("#formValidate").validate({
        rules: {
            batch: {
                required: true,
            },
            program: {
                required: true,
            }
        },
        //For custom messages
        messages: {
            batch: {
                required: "Please Select batch"
            },
            program: {
                required: "Please Select program"
            }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
    </script>
    <!-- END PAGE FORM VALIDATION JS-->
</body>

</html>