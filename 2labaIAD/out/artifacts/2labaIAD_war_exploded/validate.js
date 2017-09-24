$(document).ready(function(){
  $("#myForm").validate({
    rules: {
      enterX: {
        required: true,
        number: true,
        min: -5,
        max: 5
      },
      enterY: {
        required: true,
        number: true,
        min: -5,
        max: 3
      },
      'R[]': { required: true },
    },
    messages: {
      enterX: {
        required: "<br/>Enter X",
        number: "<br/>Enter a Number",
        min: "<br/>Enter a value greater than -5",
        max: "<br/>Enter a value less than 5"
      },
      enterY: {
     	required: "<br/>Enter Y",
        number: "<br/>Enter a Number",
        min: "<br/>Enter a value greater than -5",
        max: "<br/>Enter a value less than 3"
      },
      'R[]': { required: ""},
    }
  });
});