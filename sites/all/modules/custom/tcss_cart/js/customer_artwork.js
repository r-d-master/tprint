(function ($, Drupal, window, document, undefined) {
 $(document).ready(function() {

    $('#upload-customer-artwork input[type="checkbox"]').change(function() {
        if($(this).is(":checked")) {
          $('#upload-customer-artwork .form-type-managed-file').hide();
          return;
        }
        $('#upload-customer-artwork .form-type-managed-file').show();
    });

  });
})(jQuery, Drupal, this, this.document);
