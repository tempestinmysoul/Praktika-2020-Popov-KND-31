$(document).ready(function() {

  $(".btn-accept").on("click", function(){
    event.preventDefault();

    let id = $("#order-number-id").val().trim();
    let data = $("#order-data").val().trim();
    let manager = $("#input-manager").val().trim();
    let customer = $(".input-customer-data").val().trim();
    let manager_name = $("#input-manager-name").val().trim();
    let customer_number = $(".input-customer-name").val().trim();
    let description = $("#inputSpecification").val().trim();

    $.ajax({
        url: '../includes/form-save.php',
        type: "POST",
        dataType: 'html',
        cache: 'false',
        data: {
          id,
          data,
          manager,
          customer,
          manager_name,
          customer_number,
          description,
        },
        success: function (data) {
          
        }
      }
    )
  });

});
