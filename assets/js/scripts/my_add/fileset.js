$(document).ready(function() {
    var i = 1;
    $('#add').click(function() {
        i++;
        $('#dynamic_field').append('<div class="row" id="row' + i +
            '"> <div class="input-field col m3 s12"> <label for="relation">Relation *</label> <input type="text" class="validate" id="relation" name="relation" required=""> </div> <div class="input-field col m3 s12"> <label for="gur_name">Name * </label> <input type="text" class="validate" id="gur_name" name="gur_name" required=""> </div> <div class="input-field col m3 s12"> <label for="designation"> Designation *</label> <input type="text" class="validate" id="designation" name="designation" required=""> </div>  <div class="input-field col m3 s12"> <label for="gur_organization">Organization *</label> <input type="text" class="validate" id="gur_organization" name="gur_organization" required=""> </div> <div class="input-field col m3 s12">  <label for="gur_contact">Contact *</label> <input type="text" class="validate" id="gur_contact" name="gur_contact" required=""></div> <div class="input-field col m3 s12"> <td><button type="button" name="add" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-red-pink btn_remove" id="' +
            i + '"><i class="material-icons">clear</i></button></td></div></div></div>');
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");

        $('#row' + button_id + '').remove();
    });

});




document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
});

