
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
        course: {
            required: true,
        },
        program: {
            required: true,
        },
        session: {
            required: true,
        },
        semester: {
            required: true,
        },
        section: {
            required: true,
        },
        course: {
            required: true,
        },
        month: {
            required: true,
        },
        year: {
            required: true,
        },
        type: {
            required: true,
        },
    },
    //For custom messages
    messages: {
        course: {
            required: "Please Select Faculty"
        },
        program: {
            required: "Please Select Program"
        },
        session: {
            required: "Please Select Session"
        },
        semester: {

            required: "Please Select Semester"
        },
        section: {
            required: "Please Select Section"
        },
        course: {
            required: "Please Select Course"
        },
        month: {
            required: "Please Select Month"
        },
        year: {
            required: "Please Select Year"
        },
        type: {
            required: "Please Select Type"
        },
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




$('select[required]').css({
    position: 'absolute',
    display: 'inline',
    height: 0,
    padding: 0,
    border: '1px solid rgba(255,255,255,0)',
    width: 0
});
$("#formValidate1").validate({
    rules: {
        course: {
            required: true,
        },
        teacher: {
            required: true,
        },
        room: {
            required: true,
        },
        date: {
            required: true,
        },
        time_from: {
            required: true,
        },
        time_to: {
            required: true,
        }



    },
    //For custom messages
    messages: {
        course: {
            required: "Please Select Course"
        },
        teacher: {
            required: "Please Enter Teacher"
        },
        room: {
            required: "Please Enter Room"
        },
        date: {

            required: "Please Select Date"
        },
        time_from: {

            required: "Please Select Time From"
        },
        time_to: {
            required: "Please Select Time To"
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



document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.timepicker.init(elems, options);
});
// Or with jQuery
$(document).ready(function() {
    $('.timepicker').timepicker();
});