$(function() {



  $.validator.setDefaults({

    errorClass: 'help-block',

    highlight: function(element) {

      $(element)

        .closest('.form-group')

        .addClass('has-error');

    },

    unhighlight: function(element) {

      $(element)

        .closest('.form-group')

        .removeClass('has-error');

    },

    errorPlacement: function (error, element) {

      if (element.prop('type') === 'checkbox') {

        error.insertAfter(element.parent());

      } else {

        error.insertAfter(element);

      }

    }

  });

  $.validator.addMethod('strong', function(value, element) {
    return this.optional(element) 
    || value.length >= 6
    && value.length <=19
    
  }, 'Your number must be at least 6 characters long ')

  $.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");



  $("#myForm").validate({
    rules: {
      email: {
        required: true,
        email: true

      },
      pwd: {
        required: true,
        digits: true,
        strong:true
      },
      name: {
        required: true,
        lettersonly: true
      },
       comments: {
        required: true,
        lettersonly: true
      },
      number: {
        required: true
      },
      arrive: {
        required: true
      },
      depart: {
        required: true
      },
      person: {
        required: true

      },
      child: {
        required: true
      },
    
      res: {
        required: true

      },
      number: {
        required: true

      },

      comments: {
        lettersonly:true
       // Regex: true

      },
       room: {
        required: true

      },
      card: {
        required: true

      }
    },
      messages: {
        email: {
          required: 'Please enter an email address.',
          email: 'Please enter a <em>valid</em> email address.',
        }
      }
        
    });

  });






