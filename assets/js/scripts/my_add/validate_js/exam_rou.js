
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
            faculty: {
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
            }
        },
        //For custom messages
        messages: {
            faculty: {
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
 
  //  <!-- END PAGE FORM VALIDATION JS-->